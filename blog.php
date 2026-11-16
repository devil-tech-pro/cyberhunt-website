<?php require_once __DIR__ . '/includes/bootstrap.php'; ?>
<!doctype html>
<html lang="en">

<head><?php if (function_exists("csrf_token")): ?>
        <meta name="csrf-token" content="<?= e(csrf_token()) ?>"><?php endif; ?>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="0;url=books.php">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>CyberHunt Books</title>
    <script>location.replace('books.php');</script>
</head>

<body>
    <p>Blog has moved. <a href="books.php">Open Books</a>.</p>
<script type="module" src="js/firebase-session.js"></script></body>

</html>