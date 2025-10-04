# speakwell

This repository contains the Speakwell PHP project — a simple e-learning / course platform with PHP front-end and Composer-managed dependencies.

Files of note:
- `about.php`, `courses.php`, `teachers.php`, etc.
- `admin/` contains admin area pages
- `components/` contains shared components like `connect.php`

.gitignore hides `vendor/`, `uploaded_files/`, and other local artifacts.

To run locally:
1. Install PHP and Composer.
2. Place the project in your web server root (or use PHP built-in server).
3. Configure the database with `course_db.sql` and update `components/connect.php` with your DB credentials.

License: add a license file if you plan to publish.
