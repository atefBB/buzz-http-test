<?php

require_once __DIR__ . '/vendor/autoload.php';

$browser  = new Buzz\Browser;
$response = $browser->get('http://www.google.com');

var_dump($response->getBody()->getContents());die();
