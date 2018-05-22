<?php

namespace Kamba\Http;

use GuzzleHttp\Client as Guzzle;
use Kamba\Kamba;

class Client extends Guzzle
{
    
    public function __construct(array $config = [])
    {
        $kamba_merchant_host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';

        $config = array_merge([
            'base_uri' => Kamba::getApiUri(),
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => "Token ".Kamba::getApiKey()
            ]
        ], $config);

        parent::__construct($config);
    }
}
