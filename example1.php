<?php
echo "Example 1: Autoload Braintree.php and verify merchant snippet doesn't error";
include("vendor/autoload.php");

class XYZ {}
class ABC {}

if (is_subclass_of('Braintree', 'XYZ')) echo "subclass of xyz";
if (is_subclass_of('Braintree', 'ABC')) echo "subclass of abc";

echo "Finished without error\n";
