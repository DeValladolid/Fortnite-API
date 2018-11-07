<?php
require_once 'fortnite-api/Autoloader.php';

$api = new FortniteClient;
$api->setKey('your_key');

$data = $api->items->store();

var_dump($data);
?>
