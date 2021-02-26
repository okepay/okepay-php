<?php

use OkePay\Models\Request\Design;
use OkePay\OkePay;
use OkePay\OkePayException;

spl_autoload_register(function ($class) {
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

$okepay = new OkePay($instanceName, $secret);

$design = new Design();
$design->setUuid('YOUR_UUID');

try {
    $response = $okepay->delete($design);
    var_dump($response);
} catch (OkePayException $e) {
    print $e->getMessage();
}
