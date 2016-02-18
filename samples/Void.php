<?php
// This sample demonstrates how to create a sale and
// then request a void for the transaction

require('autoload.php');

use CyberSource\Model\Payment as Payment;
use CyberSource\Model\AuthCaptureRequest as AuthCaptureRequest;
use CyberSource\Model\AuthCaptureRequest as voidRequest;


$apiKey =  'my_api_key';
$secretKey = 'my_secret_key';
$config = new CyberSource\Configuration($apiKey, $secretKey);

$payment = new Payment();
$payment->setCardNumber('4111111111111111')
        ->setCardExpirationMonth('10')
        ->setCardExpirationYear('2016');

$saleRequest = new AuthCaptureRequest();
$saleRequest->setAmount(5.99)
        ->setCurrency('USD')
        ->setPayment($payment);

$voidRequest = new VoidRequest();
$voidRequest->setReferenceId("reference_id");

$cybs_sales = new CyberSource\Sales($config);
$cybs_voids = new CyberSource\Voids($config);

try {
    $sale = $cybs_sales->createSale($saleRequest);
    print("Sale result:\n");
    print_r($sale);

    $void = $cybs_voids->voidSale($sale->getId(), $voidRequest);
    print("Void result:\n");
    print_r($void);    
} catch(CyberSource\ApiException $e) {
    print("Transaction failed\n");
    if ($e->getError() != null) {
        print_r($e->getError());
    } else {
        throw $e;
    }
}
