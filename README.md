# POS Management System (Laravel)

A simple Point-of-Sale web application built with **Laravel 12** for the IT0049 Web System Technologies course (TFA5).

## Pages

- `/` - Landing page
- `/about` - About the system
- `/customers` - Customer Accounts listing (static array)
- `/users` - User Accounts listing (static array)

## Requirements

- PHP >= 8.2
- Composer
- MySQL (optional, for migrations/seeders)

## Local Setup

1. Clone the repository.
2. Copy `.env.example` to `.env` and configure database credentials.
3. Run `composer install`.
4. Run `php artisan key:generate`.
5. Run `php artisan migrate --force`.
6. Run `php artisan db:seed --force`.
7. Start the dev server: `php artisan serve`.
8. Visit `http://localhost:8000`.

## TFA7: Forms, Validation, and File Upload

Extended with Laravel resource controllers and form validation:

- **Create Customer** (`/customers/create`) with validation (required full_name, email)
- **Create User** (`/users/create`) with validation (required username unique, full_name)
- **Edit Customer** (`/customers/{id}/edit`) with pre-filled form
- **Edit User** (`/users/{id}/edit`) with pre-filled form and avatar upload
- **Avatar upload** - validates image type and size (≤2MB), stores to `public` disk, saves path to DB
- **User Accounts listing** - displays user avatar or placeholder

## Tech Stack

- Laravel 12
- Blade templating
- MySQL with migrations and seeders
- CSS (custom styles)

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- Simple, fast routing engine
- Powerful dependency injection container
- Multiple back-ends for session and cache storage
- Expressive, intuitive database ORM
- Database agnostic schema migrations
- Robust background job processing
- Real-time event broadcasting

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out Laravel Learn.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the Laravel documentation.

## Code of Conduct

In order to ensure the Laravel community is welcoming to all, please review and abide by the Code of Conduct.

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the MIT license.
