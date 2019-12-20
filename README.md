# Backend tryout excercise

## Pre-installation

-   Install PHP (latest stable)
-   Install composer

## Installation

-   Clone the repository
-   Inside the project root, run `composer install`
-   The database can be seeded (and later reseeded) by running `php artisan migrate:fresh --seed`.
-   You can now run the application on a local PHP server by running `php artisan serve` in the project root.

## The application

The application is a barebones Laravel 6 installation with very few things added.

## Your task

The database has three tables: _users_, _games_, and _reviews_,

There is already a controller class for each of the resources, each having an index endpoint which lists every item in the database for said resource.

The endpoints can be accessed here:

-   http://127.0.0.1:8000/api/users
-   http://127.0.0.1:8000/api/games
-   http://127.0.0.1:8000/api/reviews

Your task is to enable for additional ways to access the data.

## Tips

-   The included database is a SQLite database. [DB Browser for SQLite](https://sqlitebrowser.org/dl/) is a useful app for looking inside the database.

-   An API client like [Postman](https://www.getpostman.com/downloads/) is helpful for querying the API.

-   [Laravel's](https://laravel.com/docs/6.x/), especially [Eloquent (Laravel's query builder)](https://laravel.com/docs/6.x/eloquent) may be useful.

-   The internet is a valuable resource. Use it freely!

-   No files in this project are sacred, feel free to edit anything to suit your taste or needs.
