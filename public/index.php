<?php
namespace App;
require '../vendor/autoload.php';
//require '../src/Wcs/Hello.php';

$hello=new Wcs\Hello();
echo $hello->talk();