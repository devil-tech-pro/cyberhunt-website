# CyberHunt PHP + MySQL

This package converts the supplied CyberHunt static website into a PHP/MySQL-ready project while retaining its original HTML structure, CSS, artwork, images, section videos, and theme assets.

## Requirements
- PHP 8.1+ (8.2 recommended)
- MySQL 8.0+ or MariaDB 10.5+
- PHP extensions: `pdo`, `pdo_mysql`, `mbstring`
- Apache (XAMPP/WAMP/LAMP) or PHP built-in server for local testing

## Install with XAMPP
1. Extract the `CyberHunt-PHP-MySQL` folder into `C:\xampp\htdocs\CyberHunt`.
2. Start Apache and MySQL in XAMPP.
3. Open phpMyAdmin and import `database.sql`.
4. Edit `config/database.php` with your database credentials. XAMPP defaults are usually `root` with an empty password.
5. Open `http://localhost/CyberHunt/index.php`.
6. Create an account using Sign Up, then log in.

## Implemented server-side
- MySQL PDO connection with prepared statements
- Signup with validation and `password_hash()`
- Login with `password_verify()` and PHP sessions
- Session ID regeneration after authentication
- CSRF tokens on authentication and enrollment forms
- Protected dashboard, My Courses, and Certificates pages
- Logout endpoint
- Tables for courses, modules, notes, quizzes, questions, attempts, enrollments, and certificates
- Enrollment and quiz-attempt API endpoints ready for frontend wiring

## Important current scope
The source archive was a front-end demo. Its catalog cards, lesson descriptions, notes, and quiz questions are still authored as existing page content; the SQL schema is ready for moving that content into MySQL, but this conversion does not invent missing course videos, PDF note files, quiz answer keys, admin panel, payment gateway, email verification, password reset delivery, Google OAuth, or GitHub OAuth. The visible Google/GitHub demo buttons were removed from the real authentication forms so they do not falsely imply OAuth works.

The existing theme preference remains in browser localStorage; no account password or authentication token is stored there.

## Security before public launch
- Change DB credentials and use a restricted database user.
- Serve only over HTTPS.
- Keep `config/database.php` outside public web root in production where possible.
- Add rate limiting, email verification, password reset delivery, admin authorization, secure upload validation, and a Content Security Policy.
- Do not expose `database.sql` or backups from a public directory after installation.

## Key files
- `config/database.php` — MySQL connection settings
- `includes/bootstrap.php` — session and helpers
- `includes/functions.php` — PDO, auth, CSRF helpers
- `database.sql` — schema
- `login.php`, `signup.php`, `logout.php` — authentication
- `enroll.php`, `save-quiz-attempt.php` — database endpoints
- `assets/`, `css/styles.css` — original supplied design assets
