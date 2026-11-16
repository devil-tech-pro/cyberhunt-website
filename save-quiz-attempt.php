<?php
require_once __DIR__ . '/includes/bootstrap.php';
http_response_code(410);
header('Content-Type: application/json; charset=utf-8');
echo json_encode(['ok'=>false,'error'=>'Quiz attempts are now saved directly to Firebase by the website.']);
