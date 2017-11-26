<?php
require 'vendor/autoload.php';

use AlbanyDesigns\NPPESApi\NPPESApi;

$client = new NPPESApi(false);

$results = $client->search(array('last_name' => "Smith"));


$singleResult = $client->searchByNumber("ABCDEFG");
var_dump($singleResult);