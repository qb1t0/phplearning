<?php

require 'vendor/autoload.php';

use TestUpload\CallBack as CallBack;


echo "2nd callback example:\n";
$callBack = new CallBack();
call_user_func("TestUpload\CallBack::getBack");


echo "2nd callback example:\n";

$double = function ($x)
{
    return $x * 2;
};

$numbers = range(1, 5);
$new_numbers = array_map($double, $numbers);

print_r($new_numbers);
print implode(' ', $new_numbers);
