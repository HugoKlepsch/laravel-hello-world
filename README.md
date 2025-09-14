# Dev env setup

```bash
# Install PHP
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"

# Composer is the PHP package manager
# Install Laravel
composer global require laravel/installer

# Create laravel project 'myapp'
laravel new myapp

# Install Breeze -- Laravel's default authentication scaffolding
composer require laravel/breeze --dev
php artisan breeze:install

# Build resources
npm install && npm run dev

# Start local server
php artisan serve
```

# Terminology

* Templates "blades" in resources/views
* Routes in routes/web.php, routes/auth.php
* Controllers in app/Http/Controllers
* Models in app/Models
* Migrations in database/migrations
	* Seeders in database/seeders

# Notes

What is `php artisan`?

> `php artisan` is the command-line interface included with Laravel that 
provides a number of commands for developing your application. 
It allows you to perform tasks like database migrations, cache clearing, 
creating controllers/models/migrations, running tests, and starting the 
development server.

What should I read to get up to speed on Laravel?

* https://laravel.com/docs/12.x#next-steps
* https://laravel.com/docs/12.x/lifecycle
* https://laravel.com/docs/12.x/configuration
* https://laravel.com/docs/12.x/structure
* https://laravel.com/docs/12.x/frontend
* https://laravel.com/docs/12.x/container
* https://laravel.com/docs/12.x/facades
* https://laravel.com/docs/12.x/eloquent
* https://laravel.com/docs/12.x/migrations
* https://laravel.com/docs/12.x/seeding
* https://laravel.com/docs/12.x/testing
* https://laravel.com/docs/12.x/authentication
* https://laravel.com/docs/12.x/authorization

# Local dev

In `myapp` dir:

```bash
composer dev
```
