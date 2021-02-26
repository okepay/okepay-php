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

$signatureCheck = new \OkePay\Models\Request\SignatureCheck();
try {
    $okepay->getOne($signatureCheck);
    die('Signature correct');
} catch (\OkePay\OkePayException $e) {
    print $e->getMessage();
    die('Signature wrong');
}
