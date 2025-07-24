<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
# DataTables Example App

A simple Laravel application that displays a server-side jQuery datatable.

## Features

- Server-side pagination and searching
- jQuery and DataTables integration
- mySQL database
- dummy data seeding

## Getting Started

### 1. Install dependencies

`composer install`

### 2. Create and configure .env

```
cp .env.example .env
php artisan key:generate
```

### 3. Run migrations and seeders

```
php artisan migrate
php artisan db:seed
```

### 4. Run the development server

`composer run dev`

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
