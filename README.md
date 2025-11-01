# Laravel Filament Dashboard

A Laravel Filament project built for learning and practicing CRUD operations with Users, Posts, and Categories.

This repository demonstrates a simple admin dashboard built with Filament to manage application data through resource pages (list, create, edit, view, delete). It's ideal as a learning sandbox or a starting point for small projects.

## Contents
- Overview
- Features
- Requirements
- Installation
- Configuration
- Running the app
- Filament admin (how to access)
- Seeders & testing data
- Customizing Resources
- Common issues & troubleshooting
- Contributing
- License
- Author

---

## Overview
This project uses:
- Laravel (8/9/10 compatible)
- Filament admin panel for CRUD UI
- Eloquent models and Blade views where appropriate

Primary resources implemented:
- Users
- Posts
- Categories

The repo languages are primarily Blade and PHP.

---

## Features
- Filament resources for managing Users, Posts, and Categories
- Create / Read / Update / Delete operations
- Simple relationships (e.g., Posts -> Category, Post author)
- Basic validation and form layout using Filament forms
- Seeders to populate example data (if included in repo)

---

## Requirements
- PHP >= 8.0
- Composer
- A database supported by Laravel (MySQL, PostgreSQL, SQLite, etc.)
- Node & npm (if front-end asset compilation is needed)
- Laravel 8 | 9 | 10 (tested with modern releases)

---

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Hatem-Mohammed-toma/laravel-filament-dashboard.git
   cd laravel-filament-dashboard
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Copy environment file and generate an app key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure your `.env` database values:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. Install frontend dependencies and build assets (if present):
   ```bash
   npm install
   npm run dev   # or npm run build for production
   ```

6. Run migrations and seeders:
   ```bash
   php artisan migrate
   php artisan db:seed
   ```
   If the repository includes a specific seeder for admin or example data, it will populate sample Users, Posts, and Categories.

---

## Configuration / Environment variables
Add or verify any Filament-related environment variables. Commonly used ones:
```
APP_NAME=Laravel
APP_ENV=local
APP_URL=http://localhost

# Database
DB_...

# Optional Filament variables (if used by the project)
FILAMENT_PATH=/admin
FILAMENT_ADMIN_EMAIL=admin@example.com
FILAMENT_ADMIN_PASSWORD=secret
```

If the repository uses a custom config file (e.g., `config/filament.php`), check it for exact variable names.

---

## Running the application
Start the local server:
```bash
php artisan serve
```
Visit http://127.0.0.1:8000 (or your APP_URL).

---

## Filament admin panel
Filament usually mounts the admin UI at `/admin` (or configured `FILAMENT_PATH`). To access:

1. Ensure an admin user exists:
   - If the repo has a seeder, it may create an admin user during `db:seed`.
   - Or create one via tinker:
     ```bash
     php artisan tinker
     >>> \App\Models\User::create([
     ... 'name' => 'Admin',
     ... 'email' => 'admin@example.com',
     ... 'password' => bcrypt('secret'),
     ... 'is_admin' => true, // if the project uses an is_admin flag
     ... ]);
     ```

2. Visit the admin URL:
   ```
   http://127.0.0.1:8000/admin
   ```
3. Log in with the admin credentials.

If the project uses Filament's default auth scaffolding, you may be able to register and then assign admin roles via database changes.

---

## Seeders & example data
If seeders are included, they typically populate:
- A demo admin user
- Example categories
- Sample posts with relations to categories and users

Run:
```bash
php artisan db:seed
```
or run a specific seeder:
```bash
php artisan db:seed --class=DemoSeeder
```

---

## Customizing resources
- Filament resources live in `app/Filament/Resources` (or `app/Http/Resources` depending on structure).
- Each resource contains:
  - Resource class (registers the resource)
  - Page classes (List, Create, Edit, View)
  - Forms & tables definitions (fields, columns, relations)
- To add or adjust fields, update the resource's `form()` and `table()` definitions and test via the admin UI.

---

## Common issues & troubleshooting
- 403 / No access to Filament: Check Filament configuration and user authorization rules (gates or policies).
- Missing Admin user: Create one via seeder or tinker.
- Migration errors: Ensure database credentials are correct and the database exists.
- Asset problems: Run `npm install` and `npm run dev` or `npm run build`.

---

## Tests
If tests exist in the repository, run:
```bash
php artisan test
```
or
```bash
./vendor/bin/phpunit
```

---

## Contributing
Contributions and improvements are welcome. Suggested workflow:
1. Fork the repo
2. Create a feature branch
3. Make changes and add tests (if applicable)
4. Open a pull request with a clear description of changes

Please follow code style and document any breaking changes.

---

## License
This project is provided under the MIT License. See the LICENSE file for details.

---

## Author / Contact
Author: Hatem-Mohammed-toma  
Repository: https://github.com/Hatem-Mohammed-toma/laravel-filament-dashboard
