<?php

namespace TestUploadInterface;

//use TestUploadInterface\Geometrysquare;

class Circle implements Geometrysquare
{
    private $r = 1;


    public function __construct($x)
    {
        $this->r = $x;
    }

    public function getPerimeter()
    {
        return (int)($this->r) * 2 * pi();
    }

    public function getSquare()
    {
        return pow((int)$this->r, 2) * pi();
    }

}