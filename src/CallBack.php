<?php

namespace TestUpload;

class CallBack
{
    public function __construct()
{
    echo "im here man\n";
}

    public static function getBack()
    {
        echo "I'm first  callback result\n";
    }

    public static function getBack2()
    {
        echo "I'm second callback result\n";
    }
}