<?php
require('vendor/autoload.php');
$client = new \GuzzleHttp\Client();
$res = $client->request('GET', 'https://dog.ceo/api/breeds/list/all');
echo $res->getStatusCode();
// 200
echo $res->getBody();
// '{"id": 1420053, "name": "guzzle", ...}'
