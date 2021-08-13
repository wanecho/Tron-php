<?php
include_once '../vendor/autoload.php';

use IEXBase\TronAPI\Provider\HttpProvider;
use IEXBase\TronAPI\Tron;

$fullNode = new HttpProvider('https://api.trongrid.io');
$solidityNode = new HttpProvider('https://api.trongrid.io');
$eventServer = new HttpProvider('https://api.trongrid.io');

//Example 1
try {
    $tron = new Tron($fullNode, $solidityNode, $eventServer);
    //$data= $tron->getBlockByNumber(32600826);
   
    $data=  $tron->getBlockRange(32760141,32760142);
    var_dump($data);

} catch (\IEXBase\TronAPI\Exception\TronException $e) {
    die($e->getMessage());
}