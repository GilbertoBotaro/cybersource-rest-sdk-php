<?php
// This sample demonstrates how to authorize a payment and then capture it.

require('autoload.php');

use CyberSource\Model\Payment as Payment;
use CyberSource\Model\AuthCaptureRequest as AuthCaptureRequest;
use CyberSource\Model\CaptureRequest as CaptureRequest;


$apiKey =  'my_api_key';
$secretKey = 'my_secret_key';
$config = new CyberSource\Configuration($apiKey, $secretKey);

$cybs_auth = new \CyberSource\Authorizations($config);

$payment = new Payment();
$payment->setCardNumber('4111111111111111')
        ->setCardExpirationMonth('10')
        ->setCardExpirationYear('2016');

$request = new AuthCaptureRequest();
$request->setAmount(20.9)
        ->setCurrency('USD')
        ->setPayment($payment);

$auth = $cybs_auth->createAuthorization($request);
print("Auth result:\n");
print_r($auth);

$cybs_captures = new CyberSource\Captures($config);
$capture = $cybs_captures->captureAuthorization($auth->getId(), (new CaptureRequest())->setAmount(20.00));
$capture = $cybs_captures->getCapture($capture->getId());
print("Capture result:\n");
print_r($capture);
