# CyberHunt — Firebase setup

This build uses Firebase Authentication (Email/Password) and Cloud Firestore. The existing PHP pages and shared `includes/header.php` / `includes/footer.php` structure are retained. The old MySQL connection is no longer used by the Firebase login, signup, course-enrolment, quiz-attempt, or dashboard activity flows.

## 1. Firebase Console

1. Open project `cyberhunt-c19a8`.
2. Authentication → Sign-in method → enable **Email/Password**.
3. Firestore Database → create the database (production mode is preferred).
4. Firestore → Rules → paste the contents of `firestore.rules` and publish.
5. Authentication → Settings → Authorized domains: add `localhost` for local development and your real domain before deployment.

## 2. Run the PHP site

- Copy the `CyberHunt` folder into XAMPP `htdocs`.
- Start Apache. MySQL is not required for the Firebase flows in this build.
- Open `http://localhost/CyberHunt/`.
- PHP must have the OpenSSL extension enabled and outbound HTTPS access to `www.googleapis.com` so `auth-session.php` can verify Firebase ID-token signatures.
- Use PHP 8.1+ and serve the site over HTTPS in production. `localhost` is suitable for local development.

## 3. What is stored

- `users/{firebaseUid}`: learner profile.
- `enrollments/{firebaseUid_courseId}`: learner course enrolment and progress fields.
- `quizAttempts/{autoId}`: quiz score, total questions, quiz title and timestamp.
- `certificates/{id}`: read-only user-owned certificate records (certificate issuance is not implemented by this client build).

The dashboard reads the current user's enrollment, quiz-attempt and certificate documents. Quiz attempts are written when the quiz is completed. The Kali Linux course detail page writes its enrolment to Firestore.

## 4. Important scope and security notes

- Firebase Web API keys are public client identifiers. The Firestore rules are the actual data boundary; do not put service-account private keys in the website.
- `auth-session.php` verifies Firebase ID-token signature and claims using Google's published Secure Token certificates before creating the PHP session used by protected PHP pages.
- Course, note and quiz catalogue content in the current supplied website is still authored in its existing PHP/HTML/JavaScript page files. It has **not** been migrated into Firestore collections automatically. Firestore rules include read-only published catalogue collections (`courses`, `notes`, `quizzes`) for a future content migration/admin publisher.
- The supplied quiz question bank remains in `quiz.php`; only completed quiz results are persisted to Firestore.
- Admin content management, certificate issuance, profile editing, email verification and username uniqueness enforcement are not part of this build.
- `enroll.php` and `save-quiz-attempt.php` are retired endpoints; the Firebase client now handles these actions.

## 5. Video hero

Courses uses `assets/course.mp4`, Notes uses `assets/study.mp4`, and Quizzes uses `assets/quize.mp4`. The hero has a larger, edge-to-edge video frame with a surface-coloured left gradient fade and mobile-specific sizing. Existing shared header/footer includes and the site's theme assets are retained.
