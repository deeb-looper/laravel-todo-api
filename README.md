# TodoAppAPI

CRUD + Sanctum Authentication Rest API

Simple rest API with Laravel 9 using mysql db

## Prerequisites

- [Composer](https://getcomposer.org/)
- [XAMPP](https://www.apachefriends.org/)
- [Postman](https://www.postman.com/downloads/)

## Getting started

Before installation process make sure `composer` is already installed

- Navigate to root directory and run

  > composer install

- Run command

  > cp .env.example .env

- Adjust `DB_*` parameters

  - If you want to use Mysql, make sure you have mysql server up and running. This project uses Mysql.

- Run command

  > php artisan key:generate --ansi

- Run command

  > php artisan migrate

- Install dependecies

  > npm install

## Run locally for development

- Run `php artisan serve` which will start the server at http://localhost:8000

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
