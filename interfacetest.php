<?php

require 'vendor/autoload.php';

use TestUploadInterface\Circle as Circle;

$circle = new Circle(readline("Input radius: "));


//why this working
$a = $circle->getSquare();
$b = $circle->getPerimeter();

echo "square: $a\nperimeter: $b\n";

//but this isn't
echo "Square: {$circle->getSquare()} \n";
