<?php
// This sample demonstrates how to search for transactions

require('autoload.php');

use CyberSource\Model\TransactionSearchRequest as TransactionSearchRequest;


$apiKey =  'my_api_key';
$secretKey = 'my_secret_key';
$config = new CyberSource\Configuration($apiKey, $secretKey);

// This request will return up to 10 transactions with
// credit card number ending in 1111
$searchRequest = new TransactionSearchRequest();
$searchRequest->setQuery("accountSuffix=1111")
              ->setLimit(10);

$cybs_payments = new CyberSource\Payments($config);

try {
    $results = $cybs_payments->searchPayment($searchRequest);
    print("Search result:\n");
    print_r($results);
} catch(CyberSource\ApiException $e) {
    print("Transaction failed\n");
    if ($e->getError() != null) {
        print_r($e->getError());
    } else {
        throw $e;
    }
}
