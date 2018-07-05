<?php

namespace TestUpload;

//new object creating & calling
echo (new DateTime())->format('Y')."\n";

//different namespaces in class representation
class VarAndFunc
{
    public $k = 'imma property';

    public function k()
    {
        return 'imma variable';
    }
}
$vaf = new VarAndFunc();
echo $vaf->k.' and '.$vaf->k(), PHP_EOL;

//anonymous function example
class Anonymous
{
    public $bar;

    public function __construct()
    {
        $this->bar = 42;
    }
}

$anon = new Anonymous();
//echo ($anon->bar)(), PHP_EOL; // with function
echo ($anon->bar), PHP_EOL; //with variable

//extend example
class uParent
{
    public $name;
}

class Child extends uParent
{
    public function uName($name)
    {
        //setter
        if ($name) {
            $this->name = $name;
        }

        //getter
        else {
            return $this->name;
        }
    }
}

$parent = new uParent();
$son = new Child();
$son->uName("mike vazovskiy");
echo $son->name, PHP_EOL;
