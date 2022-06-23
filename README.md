# CarForRentSymfony
## About
- CarForRentSymfony is an application that allow users register new account and rent cars with a reasonable price.

- CarForRentSymfony is built on Symfony framework

## Installation

 - First, you have to install symfony. You should follow [symfony installation](https://symfony.com/doc/current/setup.html)
 - Install composer
```bash
$ composer install
```
- install PHP JWT
```bash
$ composer require firebase/php-jwt
```
- PHPUnit
```bash
$ ./vendor/bin/phpunit Tests
$ XDEBUG_MODE=coverage ./vendor/bin/phpunit Tests --coverage-html coverage
```
## Usage
- Clone project
```bash
$ git clone git@github.com:Ductuan92/CarForRentSymfony.git
```
- Make a copy of .env.example and rename to .env then adjust with your database, JWT and AWS s3 config
- run project by
```bash
symfony server:start
```
## License
[MIT](https://choosealicense.com/licenses/mit/)
