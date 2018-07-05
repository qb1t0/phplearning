<?php

require 'vendor/autoload.php';

use TestUploadTrait\Loadtrait as LoadTrait;

$first = new LoadTrait("Mark", "male");
$second = new LoadTrait("", "male");

LoadTrait::sayGbye();
