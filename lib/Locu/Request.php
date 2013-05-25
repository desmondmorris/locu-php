<?php

/*
* Request
* This classes handles the HTTP requests responsible
* for making calls to the Locu API.
*/

class Request
{
    /**
     * Base URL
     */
    const API_URL = 'http://api.locu.com/';

    /**
     * API Version
     */
    const API_VERSION = 'v1_0';

    /**
     * API Key
     */
    private $_api_key;


    /**
     * Constructor
     *
     * @param array $base_url
     * @return void
     */
    public function __construct($config)
    {
        //@todo - write test
        if (!is_array($config)) {
            throw new Exception("Configuration:  Missing configuration.");
        }

        //@todo - write test
        if (!isset($config['api_key']) || $config['api_key'] == '') {
            throw new Exception("Configuration: Missing API Key.");
        }

        $this->_setApiKey($config['api_key']);
    }

    /**
     * API Key Setter
     *
     * @param string  $api_key
     * @return void
     */
    private function _setApiKey($api_key)
    {
        $this->_apiKey = $_api_key;
    }

    /**
     * API Key Getter
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->_api_key;
    }

}
