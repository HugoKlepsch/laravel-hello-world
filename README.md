# What I ran

```bash
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"
composer global require laravel/installer
laravel new laravel-hw
composer require laravel/breeze --dev
php artisan breeze:install
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

`php artisan serve` -- runs http server
`npm run dev` -- constantly watches for changes and rebuilds. Not actually receiving requests.