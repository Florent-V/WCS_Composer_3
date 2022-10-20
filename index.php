<?php 
require __DIR__ . '/vendor/autoload.php';


use CowSay\Cow;

$Marguerite = new Cow('Hello, Farm!');

// store the output in a variable
$Marguerite->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');


echo $Marguerite . PHP_EOL;


?>