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

# Local dev

In `myapp` dir:

```bash
composer dev
```
