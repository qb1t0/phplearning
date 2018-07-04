<?php
require 'vendor/autoload.php';

//use TestUpload\MyUpload as MyUpload;
use TestUpload\Magic as Magic;

//$miniUpload = new MyUpload();
//$miniUpload->test();


echo("_____________________\nconstruct:\n");
$object = new Magic(1,2);

echo("_____________________\ninvoke:\n");
$object();// for invoke

echo("_____________________\n__toSting:\n");
echo $object;

echo("_____________________\n__set:\n");
$object->secret = 42;

echo("_____________________\n__get:\n");
echo "$object->secret\n";

echo("_____________________\n__isset:\n");
echo isset($object->secret) ?
    "Congratulations, your data was founded\n" : "Seems, like it is not here\n";

echo("_____________________\n__unset:\n");
unset($object->secret);

echo("_____________________\n__get (again):\n");
echo "$object->secret\n";

echo("_____________________\n__call:\n");
$object->runTest("42");

echo("_____________________\n__clone:\n");

$object2 = clone $object;
$object->n = false;
echo "new obj n: ";
var_dump($object->n);
echo "old obj n: ";
var_dump($object2->n);
echo("_____________________\n");