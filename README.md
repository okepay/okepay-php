okepay-php
===========

VERSIONING
----------

This client API library uses the API version 1.0.0 of OkePay. If you got troubles, make sure you are using the correct library version!

Requirements
------------
We recommend to use PHP version >= 5.4

The following php modules are required: cURL

Getting started with OKEPAY
----------------------------
If you don't already use Composer, then you probably should read the installation guide http://getcomposer.org/download/.

Please include this library via Composer in your composer.json and execute **composer update** to refresh the autoload.php.

For the latest library version you can use the following content of composer.json:

```json
{
    "require": {
        "okepay/okepay": "dev-master"
    }
}
```


For the Version 1.0.0 you can use the following content of composer.json:

```json
{
    "require": {
        "okepay/okepay": "1.0.0"
    }
}
```


1.  Instantiate the okepay class with the following parameters:
    $instance: Your OkePay instance name. (e.g. instance name 'demo' you request your OkePay instance https://demo.okepay.info
    $apiSecret: This is your API secret which you can find in your instance's administration.

    ```php
    $okepay = new \OkePay\OkePay($instance, $apiSecret);
    ```
2.  Instantiate the model class with the parameters described in the API-reference:

    ```php
    $subscription = new \OkePay\Models\Request\Subscription();
    $subscription->setId(1);
    ```
3.  Use your desired function:

    ```php
    $response  = $okepay->cancel($subscription);
    $subscriptionId = $response->getId();
    ```

    It recommend to wrap it into a "try/catch" to handle exceptions like this:
    ```php
    try{
        $response  = $okepay->cancel($subscription);
        $subscriptionId = $response->getId();
    }catch(\OkePay\OkePayException $e){
        //Do something with the error informations below
        $e->getCode();
        $e->getMessage();
    }
    ```


Documentation
--------------

For further information, please refer to the official REST API reference: https://developers.okepay.info/v1.0/reference
