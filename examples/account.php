<?php
include_once '../vendor/autoload.php';

try {
    $tron = new \IEXBase\TronAPI\Tron();

    $generateAddress = $tron->generateAddress(); // or createAddress()
    $isValid = $tron->isAddress($generateAddress->getAddress());


    echo 'Address hex: '. $generateAddress->getAddress() . "\r\n";
    echo 'Address base58: '. $generateAddress->getAddress(true) . "\r\n";
    echo 'Private key: '. $generateAddress->getPrivateKey() . "\r\n";
    echo 'Public key: '. $generateAddress->getPublicKey() . "\r\n";
    echo 'Is Validate: '. $isValid . "\r\n";

    echo 'Raw data: '. json_encode($generateAddress->getRawData()) . "\r\n";

    $converseAddress = $tron->importAddress($generateAddress->getPrivateKey());
    $isValid = $tron->isAddress($converseAddress->getAddress());


    echo 'Address hex: '. $converseAddress->getAddress() . "\r\n";
    echo 'Address base58: '. $converseAddress->getAddress(true) . "\r\n";
    echo 'Private key: '. $converseAddress->getPrivateKey() . "\r\n";
    echo 'Public key: '. $converseAddress->getPublicKey() . "\r\n";
    echo 'Is Validate: '. $isValid . "\r\n";

    echo 'Raw data: '. json_encode($converseAddress->getRawData()) . "\r\n";

} catch (\IEXBase\TronAPI\Exception\TronException $e) {
    echo $e->getMessage();
}



