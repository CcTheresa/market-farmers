
<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## AgriMarket Connect: Enhancing Farmer Access to Market Demand and Transport Services

## Description

AgriMarket Connect is a platform designed to facilitate direct interaction between farmers and vendors, enhancing efficiency in the agricultural sector. Farmers can easily connect with vendors to supply their produce, while vendors can register their demand and facilitate transactions with farmers. The platform also includes an admin dashboard for managing users and providing statistical insights.


# Dependancies
- Laravel (PHP framework)
- MySQL (Database)
- Bootstrap (Frontend framework)
- Chart.js (Data visualization)


## Clone the repository
``bash
git clone https://github.com/yourusername/agrimarket-connect.git
cd agrimarket-connect

#install dependancies
-composer install
-npm install

#Set up environment
-cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve

## usage
- Open browser and navigate to : http://localhost:8000
- register and verify email
- log in and use dashboard
  
### Project Structure


## Overview

The project is organized following standard Laravel conventions, with key folders and their contents structured as follows:

- `app/`:
  - Contains controllers, models, middleware, and other PHP logic.
  - **Controllers**: Handle HTTP requests and responses.
  - **Models**: Represent database tables and encapsulate business logic.
  - **Middleware**: Implements HTTP middleware for request processing.

- `database/`:
  - Contains migrations, seeders, and database factories.
  - **Migrations**: Define database schema changes using PHP.
  - **Seeders**: Populate the database with initial data for testing and development.
  - **Factories**: Define blueprints for generating fake data during testing.

- `resources/`:
  - Contains assets and views used by the frontend.
  - **views/**: Blade templates for HTML rendering.
  - **assets/**: CSS stylesheets, JavaScript files, and image assets.

- `routes/`:
  - Contains route definitions for the application.
  - **web.php**: Defines web routes for handling HTTP requests.
  - **api.php**: Defines API routes for serving JSON responses.

- `public/`:
  - Contains publicly accessible files such as index.php, images, and compiled assets.

- `tests/`:
  - Contains automated tests for the application.
  - **Feature/**: Tests that simulate user actions.
  - **Unit/**: Tests that isolate and validate individual units of code.

## Key Files

- `.env`: Configuration file for environment variables such as database credentials and application settings.
- `composer.json`: Defines PHP dependencies and scripts managed by Composer.
- `package.json`: Defines JavaScript dependencies and build scripts managed by npm.
- `artisan`: Laravel's command-line utility for executing commands such as running migrations, serving the application, and clearing caches.

The project adheres to Laravel's MVC (Model-View-Controller) architecture, promoting separation of concerns and maintainability. Custom folders and files may be added based on specific project requirements, but the above structure provides a solid foundation for developing and deploying your application.



## Security Vulnerabilities
- prone to SQL injections

## License

This project is licensed under the [MIT license](https://opensource.org/licenses/MIT).
