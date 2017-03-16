# Cybersource REST API Library for PHP
[![Build Status](https://travis-ci.org/CyberSource/cybersource-rest-sdk-php.png?branch=master)]
(https://travis-ci.org/CyberSource/cybersource-rest-sdk-php)

PHP client bindings for the CyberSource REST API. Documentation for the CyberSource Payments REST API can be found [here](https://vdp.visa.com/products/cybersource/reference#cybersource).

## Prerequisites

- PHP 5.3 or above
   - [curl](http://php.net/manual/en/book.curl.php), [openssl](http://php.net/manual/en/book.openssl.php), [mbstring](http://php.net/manual/en/book.mbstring.php)
- A [VDP](https://vdp.visa.com) account with CyberSource enabled

## Installing the SDK
* Download the cybersource-rest-sdk-python-master.zip package into a directory of your choice.
* Extract and go to the cybersource-rest-sdk-python-master directory.

###Installing with Composer
You'll first need to make sure you have Composer installed. You can follow the instructions on the [official web site](https://getcomposer.org/download/). Once Composer is installed, you can enter the project root and run:
```
composer install
```
Then, to use the client, you'll need to include the Composer-generated autoload file:

```php
require_once('/path/to/project/vendor/autoload.php');
```

## Getting Started
All you need to do to get started is set your API key and shared secret key in ````configuration.ini```` under ````conf/````:

## Samples
Samples are included under ````samples/````.
```
php samples/Sale.php
```
## Run a Transaction
```php
php RunTransaction.php
```
It will ask for the transaction type you want to run and the required payload for that transaction.

## Tests

In order to run tests, you'll need [PHPUnit](https://phpunit.de). You'll also need to use [Composer](https://getcomposer.org/) for autoloading. If you used Composer to install the client, this should already be set up. Otherwise, to use Composer for autoloading only, from the project root run
```
composer.phar dump-autoload
```

If you installed PHPUnit with Composer, run the tests from the project root with the command ````vendor/bin/phpunit````.

