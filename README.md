# Cybersource REST API Library for PHP
[![Build Status](https://travis-ci.org/CyberSource/cybersource-rest-sdk-php.png?branch=master)]
(https://travis-ci.org/CyberSource/cybersource-rest-sdk-php)

PHP client bindings for the CyberSource REST API. Documentation for the CyberSource Payments REST API can be found [here](https://vdp.visa.com/products/cybersource/reference#cybersource).

## Prerequisites

- PHP 5.3 or above
   - [curl](http://php.net/manual/en/book.curl.php), [openssl](http://php.net/manual/en/book.openssl.php)
- A [VDP](https://vdp.visa.com) account with CyberSource enabled

## Getting Started
All you need to do to get started is set your API key and shared secret key in the configuration object:
```php
$config = new CyberSource\Configuration('apiKey', 'secretKey');
```

## Samples
Samples are included which you can run from the project home directory after setting the API key and secret key. For example:
```
php samples/Sale.php
```

### Authorization and Capture (Credit Card) Example
```php
$cybs_auth = new \CyberSource\Authorizations();
$request = new AuthCaptureRequest();
$request->setAmount(50.00)
        ->setCurrency('USD')
        ->setPayment($payment);

$auth = $cybs_auth->createAuthorization($request);

$cybs_captures = new CyberSource\Captures();
$capture = $cybs_captures->capture($auth->getId(), (new CaptureRequest())->setAmount(15.00));
```

## Tests

In order to run tests, you'll need [PHPUnit](https://phpunit.de). You'll also need to use [Composer](https://getcomposer.org/) for autoloading. If you used Composer to install the client, this should already be set up. Otherwise, to use Composer for autoloading only, from the project root run
```
composer.phar dump-autoload
```

If you installed PHPUnit with Composer, run the tests from the project root with the command ````vendor/bin/phpunit````.

