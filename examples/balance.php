<?php
include_once '../vendor/autoload.php';

$fullNode = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$solidityNode = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$eventServer = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');

try {
    $tron = new \IEXBase\TronAPI\Tron($fullNode, $solidityNode, $eventServer);
} catch (\IEXBase\TronAPI\Exception\TronException $e) {
    exit($e->getMessage());
}


//$tron->setAddress('TQj4Ac9QSWqFHN4y2GDqgSDzsyBJDPeK431');
$balance = $tron->getBalance('41a1dcb0193b0cc9fd5667f88e4fae70eef9c9fd9a', true);
var_dump($balance);