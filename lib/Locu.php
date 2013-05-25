<?php

if (!function_exists('curl_init')) {
    throw new Exception('The CURL PHP extension was not found.');
}

require(dirname(__FILE__) . '/Locu/Request.php');
require(dirname(__FILE__) . '/Locu/Locu.php');
