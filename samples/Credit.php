<?php
// This sample demonstrates how to send a credit request

require('autoload.php');

use CyberSource\Model\Payment as Payment;
use CyberSource\Model\AuthCaptureRequest as AuthCaptureRequest;
use CyberSource\Model\CreditRequest as CreditRequest;


$apiKey =  'my_api_key';
$secretKey = 'my_secret_key';
$config = new CyberSource\Configuration($apiKey, $secretKey);

$payment = new Payment();
$payment->setCardNumber('4111111111111111')
        ->setCardExpirationMonth('10')
        ->setCardExpirationYear('2016');

$creditRequest = new CreditRequest();
$creditRequest->setAmount(5.00)
              ->setCurrency('USD')
              ->setPayment($payment);

$cybs_credits = new CyberSource\Credits($config);

try {
    $credit = $cybs_credits->createCredit($creditRequest);
    print("Credit result:\n");
    print_r($credit);

} catch(CyberSource\ApiException $e) {
    print("Transaction failed\n");
    if ($e->getError() != null) {
        print_r($e->getError());
    } else {
        throw $e;
    }
}
