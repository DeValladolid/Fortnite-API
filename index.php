<?php
require_once 'fortnite-api/Autoloader.php';

$api = new FortniteClient;
$api->setKey('5ae9fa892ff9cf7b4bfb2cda585bc77a');

$data = $api->challenges->get('current', 'en');

var_dump($data);
?>
