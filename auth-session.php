<?php
require_once __DIR__ . '/includes/bootstrap.php';
header('Content-Type: application/json; charset=utf-8');
function b64url_decode(string $v): string { return (string) base64_decode(strtr($v, '-_', '+/') . str_repeat('=', (4 - strlen($v) % 4) % 4)); }
function fail_auth(int $status, string $message): never { http_response_code($status); echo json_encode(['ok'=>false,'error'=>$message]); exit; }
if ($_SERVER['REQUEST_METHOD'] !== 'POST') fail_auth(405, 'Method not allowed');
$body = json_decode(file_get_contents('php://input'), true) ?: [];
$jwt = (string)($body['idToken'] ?? '');
$parts = explode('.', $jwt);
if (count($parts) !== 3) fail_auth(401, 'Invalid Firebase token');
$header = json_decode(b64url_decode($parts[0]), true) ?: [];
$claims = json_decode(b64url_decode($parts[1]), true) ?: [];
$project = 'cyberhunt-c19a8';
$now = time();
if (($header['alg'] ?? '') !== 'RS256' || ($claims['aud'] ?? '') !== $project || ($claims['iss'] ?? '') !== 'https://securetoken.google.com/'.$project || empty($claims['sub']) || ($claims['exp'] ?? 0) < $now || ($claims['iat'] ?? PHP_INT_MAX) > $now || ($claims['auth_time'] ?? PHP_INT_MAX) > $now) fail_auth(401, 'Firebase token claims are invalid');
$cache = sys_get_temp_dir().'/cyberhunt_firebase_certs.json';
$certs = is_file($cache) && filemtime($cache) > $now-3600 ? json_decode((string)file_get_contents($cache), true) : null;
if (!is_array($certs)) {
  $ctx = stream_context_create(['http'=>['timeout'=>8,'header'=>"Accept: application/json\r\n"]]);
  $raw = @file_get_contents('https://www.googleapis.com/robot/v1/metadata/x509/securetoken@system.gserviceaccount.com', false, $ctx);
  $certs = $raw ? json_decode($raw, true) : null;
  if (!is_array($certs)) fail_auth(503, 'Could not validate Firebase token. Check server internet access.');
  @file_put_contents($cache, json_encode($certs), LOCK_EX);
}
$cert = $certs[$header['kid'] ?? ''] ?? null;
if (!$cert) fail_auth(401, 'Firebase signing key not found');
$key = openssl_pkey_get_public($cert);
$sig = b64url_decode($parts[2]);
if (!$key || openssl_verify($parts[0].'.'.$parts[1], $sig, $key, OPENSSL_ALGO_SHA256) !== 1) fail_auth(401, 'Firebase token signature is invalid');
session_regenerate_id(true);
$_SESSION['user'] = [
  'id' => (string)$claims['sub'],
  'full_name' => (string)($body['profile']['fullName'] ?? $claims['name'] ?? $claims['email'] ?? 'CyberHunt Learner'),
  'email' => (string)($claims['email'] ?? ''),
  'username' => (string)($body['profile']['username'] ?? ''),
  'role' => 'student'
];
echo json_encode(['ok'=>true,'user'=>$_SESSION['user']]);
