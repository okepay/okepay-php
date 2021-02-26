<?php

spl_autoload_register(function($class) {
    $root = dirname(__DIR__);
    $classFile = $root . '/lib/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($classFile)) {
        require_once $classFile;
    }
});

// $instanceName is a part of the url where you access your okepay installation.
// https://{$instanceName}.okepay.info
$instanceName = 'YOUR_INSTANCE_NAME';

// $secret is the okepay secret for the communication between the applications
// if you think someone got your secret, just regenerate it in the okepay administration
$secret = 'YOUR_SECRET';

$okepay = new \OkePay\OkePay($instanceName, $secret);

$transaction = new \OkePay\Models\Request\Transaction();
$transaction->setFilterDatetimeUtcGreaterThan(new \DateTime('2019-12-01 00:00:00'));
$transaction->setFilterDatetimeUtcLessThan(new \DateTime('2020-10-01 00:00:00'));
$transaction->setOffset(40);
$transaction->setLimit(20);

try {
    $response = $okepay->getAll($transaction);
    var_dump($response);
} catch (\OkePay\OkePayException $e) {
    print $e->getMessage();
}
