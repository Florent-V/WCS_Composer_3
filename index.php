<?php 
require __DIR__ . '/vendor/autoload.php';


use CowSay\Cow;

$Marguerite = new Cow('Suprise MotherFucker!');

// store the output in a variable
$Marguerite->setEyes('$$')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');


echo $Marguerite . PHP_EOL;

$bear = new CowSay\Bear("Oh, oh, Tiens voilà quelqu'un Petit Ours Brun");

$sheep = new CowSay\Sheep("bééééééééééééééééééééé");

$tux = new CowSay\Tux("Linus Torvalds is my father !");


echo $bear . PHP_EOL;
echo $sheep . PHP_EOL;
echo $tux . PHP_EOL;


?>