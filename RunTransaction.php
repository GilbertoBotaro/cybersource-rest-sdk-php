<?php

//if you are using composer to install the sdk, uncomment the next line
//require_once('vendor/autoload.php');

//if you are using composer to install the sdk, comment out the next line 
require('autoload.php');

set_include_path(dirname(__FILE__) . '/conf');

use \CyberSource\ApiException as ApiException;
use \CyberSource\Configuration as Configuration;
use \CyberSource\Authorizations as Authorizations;
use \CyberSource\Captures as Captures;
use \CyberSource\Credits as Credits;
use \CyberSource\Payments as Payments;
use \CyberSource\Refunds as Refunds;
use \CyberSource\Sales as Sales;
use \CyberSource\Voids as Voids;

class RunTransaction {

	private $config;

	function __construct() {
		$conf = parse_ini_file('configuration.ini');
		if(isset($conf['apiKey']) && !empty($conf['apiKey']) && isset($conf['sharedSecret']) && !empty($conf['sharedSecret'])) {
			$this->config = new Configuration($conf['apiKey'], $conf['sharedSecret']);
        }
        else {
        	throw new ApiException("apiKey or secret key is not set in configuration.ini", 400);
        }
	}

	private function getTransactionType() {
		print("Either enter transaction type or the number corresponding to it : \n1 auth \n2 capture \n3 sale \n4 refund capture \n5 refund sale \n6 credit \n7 search \n8 void \n");
		$transactionType = readline("");
		return $transactionType;
	}

	private function getParams($transactionType) {
		$param = [];
		switch($transactionType) {
			case '1' : case 'auth' :
				$transactionType  = 'auth';
				array_push($param, readline('give payload file name for auth, it should be json file : '));
				break;
			case '2' : case 'capture' :
				array_push($param, readline('provide either Authorization ID or auth payload, if the input is in the form of *.json then it will be consider as auth payload otherwise authorization id : '));
				array_push($param, readline('provide capture payload : '));
				if(strpos($param[0], '.json') === false) {
					$transactionType = "capture";
				} else {
					$transactionType = 'captureAfterAuth';
				}
				break;
			case '3' : case 'sale' :
				$transactionType = 'sale';
				array_push($param, readline('give payload file name for sale, it should be json file : '));
				break;
			case '4' : case 'refund capture' :
				$transactionType = 'refundCapture';
				array_push($param, readline('provide capture id : '));
				array_push($param, readline('provide refund capture payload : '));
				break;
			case '5' : case 'refund sale' :
				$transactionType = 'refundSale';
				array_push($param, readline('provide sale id : '));
				array_push($param, readline('provide refund sale payload : '));
				break;
			case '6' : case 'credit' :
				$transactionType = 'credit';
				array_push($param, readline('give payload file name for credit, it should be json file : '));
				break;
			case '7' : case 'search' :
				array_push($param, readline('provide either transaction id or query json, if input is in the form of *.json then it will be consider as search payload otherwise transaction id : '));
				if(strpos($param[0], '.json') === false) {
					$transactionType = 'getPayment';
				} else {
					$transactionType = 'search';
				}
				break;
			case '8' : case 'void' :
				$transactionType = 'void';
				array_push($param, readline('enter any one: capture, credit, refund, sale : '));
				$param[0]=ucfirst($param[0]);
				array_push($param, readline('enter transaction id : '));
				array_push($param, readline('enter void payload : '));
				break;
			default :
				throw new ApiException("Invalid transaction type selected.", 400);
		}
		foreach($param as $key => $value) {
			if(strpos($value, '.json') !== false) {
				if(file_exists('samples/'.$value)) {
					$param[$key] = file_get_contents('samples/'.$value);
				} else {
					throw new ApiException($value." no such file in samples dir", 400);
				}
			}
		}
		return [$transactionType, $param];
	}

	public function main() {
		$param = [];
		$transactionType = $this->getTransactionType();
		list($transactionType, $param) = $this->getParams($transactionType);
		
		$response;
		$statusCode;

		switch($transactionType) {
			case 'auth' : 
				$api = new Authorizations($this->config);
				$response = $api->createAuthorization($param[0]);
				break;
			case 'capture' : 
				$api = new Captures($this->config);
				$response = $api->captureAuthorization($param[0], $param[1]);
				break;
			case 'captureAfterAuth' :
				$authApi = new Authorizations($this->config);
				$response = $authApi->createAuthorization($param[0]);
				$captureApi = new Captures($this->config);
				$response = $captureApi->captureAuthorization($response->getId(), $param[1]);
				break;
			case 'sale' :
				$api = new Sales($this->config);
				$response = $api->createSale($param[0]);
				break;
			case 'refundCapture' :
				$api = new Refunds($this->config);
				$response = $api->refundCapture($param[0], $param[1]);
				break;
			case 'refundSale' :
				$api = new Refunds($this->config);
				$response = $api->refundSale($param[0], $param[1]);
				break;
			case 'credit' :
				$api = new Credits($this->config);
				$response = $api->createCredit($param[0]);
				break;
			case 'authReversalAfterAuth' :
				$api = new AuthorizationApi($this->config);
				$response = $api->createAuthorization($param[0]);
				$param[0] = $api->getAuthId($response);
			case 'authReversal' :
				$api = new AuthorizationApi($this->config);
				$response = $api->reverseAuthorization($param[0], $param[1]);
				break;
			case 'getPayment' :
				$api = new Payments($this->config);
				$response = $api->getPayment($param[0]);
				break;
			case 'search' :
				$api = new Payments($this->config);
				$response = $api->searchPayment($param[0]);
				break;
			case 'void' :
				$api = new Voids($this->config);
				$funct = "void".$param[0];
				$response = $api->$funct($param[1], $param[2]);
				break;
			default :
				throw new ApiException("some unknown error occured", 400);
		}
		/*var_dump($response);*/
		print_r($response);

	}
}


//invoking main function of this class
$runTransaction = new RunTransaction();
$runTransaction->main();
restore_include_path();