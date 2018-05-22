<?php

require __DIR__.'/../vendor/autoload.php';

// Insira aqui o seu KAMBA_API_KEY
putenv('KAMBA_API_KEY=7p2RbUyWWCq34cLd8QJJFQtt');

// Insira aqui a URI ou URL da API KAMBA Checkout, se não informado será o utilizada
// a URI ou URL padrão https://kamba-api-staging.herokuapp.com/v1/
putenv('KAMBA_API_URI=https://kamba-api-staging.herokuapp.com/v1/');

// Instancia a entidade para realizar a transação
$transaction = new Kamba\Transaction\Request\Transaction;

//Criando uma transação
$transactionResponse = $transaction->create([
	"receiver_id" => "0ad91a92-5c75-41f2-918b-6c1ec3f72b7c",
	"amount" => 10,
	"description" => "Pagando o emprestimo"
]);

//Resposta da transação
//print_r($transactionResponse);

//Origem do pagamento
echo "Origem: {$transactionResponse->from->firstname}\nEmail: 
{$transactionResponse->from->email}\n";

//Destinatário
echo "Destinatário: {$transactionResponse->to->firstname} 
\nEmail: {$transactionResponse->to->email}\n";