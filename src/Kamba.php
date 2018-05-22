<?php

namespace Kamba;

use GuzzleHttp\Client as GuzzleClient;

class Kamba
{
    /**
     * The Environment variable name or argument for API URI.
     *
     * @var string
     */
    const KAMBA_API_URI = 'KAMBA_API_URI';

     /**
     * The Environment variable name or argument for API request time out.
     *
     * @var string
     */
    const KAMBA_API_TIME_OUT = 'KAMBA_API_TIME_OUT';

    /**
     * The Environment variable name or argument for api_key.
     *
     * @var string
     */
    const KAMBA_API_KEY = 'KAMBA_API_KEY';

    /**
     * The Environment variable name or argument for merchant_id.
     *
     * @var string
     */
    const KAMBA_MERCHANT_ID = 'KAMBA_MERCHANT_ID';

    /**
     * KAMBA Merchant ID to be set on instances
     *
     * @var string
     */
    private static $kamba_merchant_id;

    /**
     * API KEY to be set on instances
     *
     * @var string
     */
    private static $kamba_api_key;

    /**
     * 
     * Ex.: https://kamba-api-staging.herokuapp.com/v1/
     *
     * @var string;
     */
    private static $kamba_api_uri;

    public function __construct() {
        
    }

    /**
     * Set API KEY
     *
     * @param $kamba_api_key
     */
    public static function setApiKey($kamba_api_key)
    {
        if (null === self::$kamba_api_key) {
            self::$kamba_api_key = $kamba_api_key;
        }
    }

    /**
     * Get KAMBA API Key from environment.
     *
     * @return string
     */
    public static function getApiKey()
    {
        if (null !== self::$kamba_api_key) {
            return self::$kamba_api_key;
        }

        return getenv(static::KAMBA_API_KEY);
    }

    /**
     * Set API URI
     *
     * @param $kamba_api_uri
     */
    public static function setApiUri($kamba_api_uri)
    {
        if (null === self::$kamba_api_uri) {
            self::$kamba_api_uri = $kamba_api_uri;
        }
    }

    /**
     * Get KAMBA API URI from environment.
     *
     * @return string
     */
    public static function getApiUri()
    {
        if (null !== self::$kamba_api_uri) {
            return self::$kamba_api_uri;
        }

        if (!empty(getenv(static::KAMBA_API_URI))) {
            return getenv(static::KAMBA_API_URI);
        }

        return 'https://kamba-api-staging.herokuapp.com/v1/';
    }

    /**
     * Get KAMBA Merchant ID from environment.
     *
     * @return string
     */
    public static function getKambaMerchantId()
    {
        if (null !== self::$kamba_merchant_id) {
            return self::$kamba_merchant_id;
        }

        return getenv(static::KAMBA_MERCHANT_ID);
    }

}
