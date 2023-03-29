<?php 

require 'vendor/autoload.php';

$client = new MongoDB\Client;

$KRS = $client->KRS;

$result1 = $KRS->createCollection('KRS');
var_dump($result1);


?>