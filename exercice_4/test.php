<?php

require_once'Cat.php';

$cat= new Cat();

$catArray1 = ['firstname'=>'Tim', 'age'=>13, 'color'=>'grey', 'sex'=>'male', 'race'=>'persian'];
$catArray2 = ['firstname'=>'Susi', 'age'=>2, 'color'=>'black', 'sex'=>'female', 'race'=>'unknown'];
$catArray3 = ['firstname'=>'Sheila', 'age'=>5, 'color'=>'red', 'sex'=>'female', 'race'=>'mix'];

$cat1=Cat::fromArray($catArray1);
$cat2=Cat::fromArray($catArray2);
$cat3=Cat::fromArray($catArray3);

echo '<pre>';
var_dump($cat1);
var_dump($cat2);
var_dump($cat3);
echo '</pre>';

$cat1.getInfo();
