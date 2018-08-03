<?php

include_once './vendor/autoload.php';

$browser  = new Buzz\Browser;
$response = $browser->get('http://www.google.com');

// echo $browser->getLastRequest() . "\n";

var_dump($browser->getLastRequest());die();
