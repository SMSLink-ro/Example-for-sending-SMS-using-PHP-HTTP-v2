<?php

$client = new http\Client;
$request = new http\Client\Request;

/*

  HTTPS API Endpoint:  https://secure.smslink.ro/sms/gateway/communicate/index.php
  HTTP API Endpoint:   http://www.smslink.ro/sms/gateway/communicate/index.php

*/

$request->setRequestUrl('https://secure.smslink.ro/sms/gateway/communicate/index.php');
$request->setRequestMethod('GET');

/* 

  Get your SMSLink / SMS Gateway Connection ID and Password from 
  https://www.smslink.ro/get-api-key/

*/

$request->setQuery(new http\QueryString(array(
  'connection_id' => '... My SMS Gateway Connection ID ...',
  'password' => '... My SMS Gateway Password ...',
  'to' => '07xyzzzzzz',
  'message' => 'My Test Message'
)));

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();

?>