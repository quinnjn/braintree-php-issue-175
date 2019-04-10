<?php
echo "Example 2: Load Braintree.php and verify the gateway can be created";
include("vendor/autoload.php");

$gateway = new Braintree_Gateway([
    'environment' => 'sandbox',
    'merchantId' => 'your_merchant_id',
    'publicKey' => 'your_public_key',
    'privateKey' => 'your_private_key'
]);

print_r($gateway);

echo "Finished without error\n";
