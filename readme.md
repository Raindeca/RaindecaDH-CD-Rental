# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)


# Deca-CDProblem Basic API

## Prerequiresites
* MySQL **v5.6**
* Php **v7.0.9**
* Lumen Framework **v5.5.2**

## Preparation
Ensure you have cloned/pulled the repository to your local. Open terminal in the root repository and run all these commands.

1. Access your Application Locally. you will receive local link to access the API
    ```sh
    php -S localhost:8000 -t public
    ```
2. Configure your database setup in order to connect this API to your database. Access the setup by config it via environment hidden folder.
    ```sh
    .env
    ```
    
3. Migrating the data to your local database.
     ```sh
    php artisan migrating --seed
    ```

## Usages
at this point, you will be able to use this API completely

1. Open the endpoint lists from web.php at router folder

2. Enter the local url with their respective endpoint. example:
    ```sh
    http://localhost:8000/admin/cd/collection
    ```

3. For every method that included POST, PATCH, DELETE at web.php, should be checked via third-party software. example: Postman (https://www.postman.com/downloads/)

4. Close your terminal by pressing ctrl+c or simply close via GUI button