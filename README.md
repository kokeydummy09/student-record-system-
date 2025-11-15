# Student Record System (Laravel CRUD)

A simple Student Record System built with Laravel and MySQL implementing full CRUD for student records. This repository was created as part of an assessment for Goldplan Insurance Services.

---

## Features

- Student CRUD: Create, Read, Update, Delete student records.
- Validation: Unique validation for Student ID and Email.
- List & Profile Views: List shows Student ID, Name, Email, Course, Year Level; profile shows full details.
- Confirm Delete: Deletions require confirmation.

---

## Tech Stack

- Laravel 11
- PHP 8+
- MySQL (Aiven used in this project)
- Blade templates
- Vite / Tailwind (optional)
- Render.com (example deployment)

---

## Installation (Local Setup)

Prerequisites:
- PHP 8.1+
- Composer
- Node.js (16+) and npm (or yarn/pnpm)
- MySQL or MariaDB
- Git

1. Clone repository:
```bash
git clone https://github.com/kokeydummy09/student-record-system-.git
cd student-record-system
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install frontend dependencies and build:
```bash
npm ci
npm run build   # production build: generates public/build/manifest.json
```

4. Copy `.env.example` to `.env` and set values:
```bash
cp .env.example .env
php artisan key:generate
```
Edit `.env` to set your `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`. Do not commit secrets.

5. Run migrations and seeders:
```bash
php artisan migrate
php artisan db:seed   # optional if seeders exist
```

6. Start local server:
```bash
php artisan serve
# open http://localhost:8000
```

---

**Environment**
- The repo includes an example `.env.example`. Ensure secrets are not committed.
- Important env variables:
  - `APP_ENV=local|production`
  - `APP_DEBUG=true|false` (set `false` in production)
  - `DB_*` — database connection info
  - `VITE_*` or other variables needed by Vite

---

**Database**
- Migrations are in `database/migrations`.
- Factories and seeders exist in `database/factories` and `database/seeders`.

---

**Assets / Vite**
- This project uses Vite for frontend builds. In production run:
```bash
npm ci
npm run build
```
- The build step generates `public/build/manifest.json`. If this file is missing, Blade `@vite()` will throw an exception and pages using it will return HTTP 500. See Troubleshooting below.

---

**Running Tests**
- If tests are present, run:
```bash
composer test
# or
./vendor/bin/pest
# or
phpunit
```

---

**Deployment (Render.com / Docker notes)**
- If deploying with Docker, ensure Node build step runs before the final PHP image is produced. Recommended: a multi-stage Dockerfile that builds frontend in a Node image and copies `public/build` into the PHP image.
- Example Render build commands (if not using a custom Dockerfile):
```bash
npm ci
npm run build
composer install --no-dev --optimize-autoloader
php artisan config:cache
php artisan route:cache
```
- If using a custom Dockerfile, the production image must include `public/build` (copy from build stage).
- Ensure file permissions allow the webserver to read `public/build` and `storage`.

---

**Troubleshooting**
- 500 errors on pages that use `@vite()` typically mean `public/build/manifest.json` is missing or unreadable.
  - Check for manifest:
    ```bash
    ls -l public/build/manifest.json
    head -n 20 public/build/manifest.json
    ```
  - If missing, run `npm run build` and redeploy (or copy `public/build` into the image).
  - Ensure `php artisan view:clear` and `php artisan config:clear` after building assets to refresh compiled views.
- If Laravel logs contain an exception trace referencing `Illuminate\Foundation\Vite->manifest`, it confirms a manifest problem.
- Permissions:
  ```bash
  chown -R www-data:www-data public/build
  chmod -R 755 public/build
  ```
  (replace `www-data` with your webserver user)

---

**Sample Accounts / Test Data**
- If seeders or demo accounts are provided, note them here. If not, create an admin account via seeder or manually in DB.
- Example (create admin user via tinker):
```bash
php artisan tinker
>>> \App\Models\User::create([
... 'name' => 'Admin',
... 'email' => 'admin@example.com',
... 'password' => bcrypt('password'),
... 'is_admin' => 1
... ]);
```

---

**Goldplan Submission Notes (brief)**
- Goal: Build a Student Record System using Laravel (PHP 8+) and MySQL.
- Acceptance criteria (user stories):
  - Create Student: Student ID and Email must be unique; required fields: Student ID, Full Name, Date of Birth, Gender, Email, Course/Program, Year Level.
  - View Students: List and detail profile view as described.
  - Update Student: Validation for uniqueness maintained.
  - Delete Student: Requires confirmation and removes the student.
- Deliverables:
  - Public Git Repository (link)
  - Live Demo URL (hosted)
  - `README.md` with setup steps + test account
  - `.env.example` (no secrets)
- Deadline: November 18, 2025

---

**How to submit**
- Share repo URL and live demo URL (e.g., Render) to `devapp@goldplaninsurance.com` as required.

---

**Commit / Branching**
- `main` branch contains deployment-ready code. If you rewrite history (squash commits), push with `--force-with-lease` and communicate with teammates.

---

**Contributing**
- Feel free to open issues or PRs.

---

**License**
- Choose a license (MIT recommended) and include `LICENSE` if you want to allow reuse.

---

**Contact**
- For assessment questions, contact Goldplan at `devapp@goldplaninsurance.com`.
- For repo issues, open an issue on GitHub.

---

If you'd like I can commit this change into a branch and push it for you — tell me if you want that.
# Student Record System (Laravel CRUD)

A simple **Student Record System** built with Laravel and MySQL, implementing full CRUD functionality using Blade templates.  
This project is submitted as part of the assessment for **Goldplan Insurance Services**.

---

## Features

- **Student CRUD**
  - Create new student records with unique validation for **Student ID** and **Email**
  - View a list of all students
  - View a full detailed profile for each student
  - Update student information
  - Delete student records with a confirmation step

---

## Tech Stack

- Laravel 11  
- PHP 8+  
- MySQL (Hosted on Aiven)  
- Blade Templates  
- TailwindCSS (optional)  
- Render.com (for deployment)

---

## Installation (Local Setup)

1. **Clone Repository**
```bash
git clone https://github.com/kokeydummy09/student-record-system-.git
cd student-record-system-

