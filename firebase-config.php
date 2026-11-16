<?php
$firebase = require __DIR__ . '/config/firebase.php';
header('Content-Type: application/javascript; charset=utf-8');
?>
export const firebaseConfig = <?= json_encode($firebase, JSON_UNESCAPED_SLASHES) ?>;
