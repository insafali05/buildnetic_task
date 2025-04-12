Laravel API Development Assessment Test

This project is built as part of a Laravel API Development Assessment. It includes a RESTful API for posts, user authentication, role-based access, and an event-driven email notification system using Laravel’s latest features.

-   Requirements

PHP 8.1+
Composer
Laravel 10
MySQL

-   How to Start

1. Clone the repository
   git clone https://github.com/insafali05/buildnetic_task.git
   cd buildnetic_task

2. Install dependencies
   composer install

3. Create .env file
   cp .env.example .env

4. Generate app key
   php artisan key:generate

5. Configure your .env file, Set up your DB*\* and MAIL*\* values as needed.

6. Run migrations and seed database
   php artisan migrate --seed

7. Start development server
   php artisan serve

-   Authentication: This app uses Laravel Sanctum for API authentication.

1. Register : POST /api/register
2. Login : POST /api/login

A Bearer token is returned after login, which must be included in the Authorization header for protected routes.

-   Posts API

-> Get all posts (paginated)
GET /api/posts
Returns a JSON response with 10 posts per page.

Note: All actions are protected and require a valid Sanctum token.

-   Notifications
    When a new post is created, an event (PostCreated) is dispatched. A listener (SendPostNotification) sends an email to all users with the admin role.
