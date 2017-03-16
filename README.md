# Cybersource REST API Library for PHP
[![Build Status](https://travis-ci.org/CyberSource/cybersource-rest-sdk-php.png?branch=master)](https://travis-ci.org/CyberSource/cybersource-rest-sdk-php)

PHP client bindings for the CyberSource REST API. Documentation for the CyberSource Payments REST API can be found [here](https://developer.visa.com/products/cybersource/reference#cybersource).

## Prerequisites

- PHP 5.3 or above
   - [curl](http://php.net/manual/en/book.curl.php), [openssl](http://php.net/manual/en/book.openssl.php), [mbstring](http://php.net/manual/en/book.mbstring.php)
- A [VDP](https://developer.visa.com) account; create an application with "CyberSource Payment API" checked.

## Installing the SDK
* Download the cybersource-rest-sdk-php-master.zip package into a directory of your choice.
* Extract and go to the cybersource-rest-sdk-php-master directory.

### Installing with Composer
Ensure that you have Composer installed. See the [official web site](https://getcomposer.org/download/) for instructions. Once Composer is installed, you can enter the project root and run:
```
composer install
```
To use the client, include the Composer-generated autoload file:

```php
require_once('/path/to/project/vendor/autoload.php');
```

## Getting Started
Set your API key and Shared Secret key in [configuration.ini](conf/configuration.ini).
- Cybersource Payment API uses X-Pay-Token authentication method. For more information, refer to the [VDP Manual](https://github.com/visa/SampleCode/wiki/Manual#x-pay-token-authentication).

## Running Samples
Enter the following command.
```php
php RunTransaction.php
```
When prompted, choose the transaction type you want to run, and provide the name of the payload file from the [samples](/samples) folder.

## Tests
In order to run tests, you'll need [PHPUnit](https://phpunit.de). You'll also need to use [Composer](https://getcomposer.org/) for autoloading. If you used Composer to install the client, this should already be set up. Otherwise, to use Composer for autoloading only, from the project root run
```
composer.phar dump-autoload
```

If you installed PHPUnit with Composer, run the tests from the project root with the command ````vendor/bin/phpunit````.
