<?php
use GateySDK\GateySDK\GateyClient;

$id=0; // your project id here
$gateysdk = new GateyClient($id,'CLIENT_KEY'); // if you want to auth with client key
//$gateysdk = new GateyClient($id, null, 'SERVER_KEY'); // if you want to auth with server key
//$gateysdk = new GateyClient($id, 'CLIENT_KEY', null, 'https://example.org/v1'); // if you want to auth with server key and another endpoint
//$gateysdk = new GateyClient($id, null, 'SERVER_KEY', 'https://example.org/v1'); // if you want to auth with server key and another endpoint
// usage: new GateyClient($projectid, "client key", "or server key (leave client as null)", "https://endpoint.com/v1");

$gateysdk->capture_message("Capture me!","DEBUG"); // capture message 
// usage: $gateysdk->capture_message("MESSAGE", "LEVEL", $exception);

set_exception_handler(array($gateysdk, 'catch')); // now Gatey will catch any exceptions
throw new Exception("This exception will be catched");
restore_exception_handler(); // now Gatey won't be processing any exceptions
throw new Exception("And that won't");
