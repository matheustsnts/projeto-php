<?php

$array = array(40,200,100,150,"School of Net", true);

echo $array[0];
echo "\n";
echo $array[1];
echo "\n";
echo $array[2];
echo "\n";
echo $array[3];
echo "\n";
echo $array[4];
echo "\n";
echo $array[5];

// array de forma organizada
$array1 = array(
    0 => "teste",
    1 => 300,
    2 => true,
    "matheus" => 25.5,
);

echo "\n";
echo $array1["matheus"];

echo var_dump($array1);