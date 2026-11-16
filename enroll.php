<?php
require_once __DIR__ . '/includes/bootstrap.php';
http_response_code(410);
header('Content-Type: text/plain; charset=utf-8');
echo 'Course enrolment is now handled by Firebase from the course page.';
