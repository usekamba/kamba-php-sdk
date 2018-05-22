<?php

ini_set('display_errors',1);

require __DIR__.'/../vendor/autoload.php';

putenv('KAMBA_API_KEY=7p2RbUyWWCq34cLd8QJJFQtt');

putenv('KAMBA_MERCHANT_ID=0ad91a92-5c75-41f2-918b-6c1ec3f72b7c');

putenv('KAMBA_API_URI=https://kamba-api-staging.herokuapp.com/v1/');

$transaction = new Kamba\Transaction\Request\Transaction;

$transactionResponse = $transaction->create([
    "receiver_id" => "0ad91a92-5c75-41f2-918b-6c1ec3f72b7c",
	"amount" => 1500,
	"description" => "Kumbo da kixiquila"
]);

print_r($transactionResponse);