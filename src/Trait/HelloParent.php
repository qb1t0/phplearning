<?php

namespace TestUploadTrait;

//says hello
trait HelloParent
{
    public static function sayHello()
    {
        echo "Hello ";
    }

    public static function sayGbye()
    {
        echo "\nBye!";
    }
}