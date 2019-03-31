<?php

require_once ('Singleton.php');

$abc = Singleton::getInstance();
$abc->setValue('some_value');
echo $abc->getValue() . PHP_EOL;

$qwe = Singleton::getInstance();
$qwe->setValue('another_value');
echo $qwe->getValue() .  PHP_EOL;