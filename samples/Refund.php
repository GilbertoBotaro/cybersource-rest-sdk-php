<?php
// This sample demonstrates how to create a sale and
// then request a refund for the transaction

require('autoload.php');

use CyberSource\Model\Payment as Payment;
use CyberSource\Model\AuthCaptureRequest as AuthCaptureRequest;
use CyberSource\Model\CaptureRequest as CaptureRequest;
use CyberSource\Model\RefundRequest as RefundRequest;


$apiKey =  'my_api_key';
$secretKey = 'my_secret_key';
$config = new CyberSource\Configuration($apiKey, $secretKey);

$payment = new Payment();
$payment->setCardNumber('4111111111111111')
        ->setCardExpirationMonth('10')
        ->setCardExpirationYear('2016');

$request = new AuthCaptureRequest();
$request->setAmount(12.00)
        ->setCurrency('USD')
        ->setPayment($payment);

try {
    $cybs_sales = new CyberSource\Sales($config);
    $sale = $cybs_sales->createSale($request);
    print("Sale result:\n");
    print_r($sale);

    $cybs_refunds = new CyberSource\Refunds($config);
    $refund_request = (new RefundRequest())->setAmount(10.00);
    $refund = $cybs_refunds->refundCapture($sale->getId(), $refund_request);

    print("Refund result:\n");
    print_r($refund);
} catch(CyberSource\ApiException $e) {
    print("Transaction failed\n");
    if ($e->getError() != null) {
        print_r($e->getError());
    } else {
        throw $e;
    }
}
