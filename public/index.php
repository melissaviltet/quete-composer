<?php

require_once __DIR__ .  '/../vendor/autoload.php';
use App\Wcs\Hello;
$hello = new Hello();

echo $hello -> talk ();

$sayhello = new \HelloWorld\SayHello();
echo $sayhello -> world ();




