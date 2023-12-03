<?php
require __DIR__ . '/utils.php';
require __DIR__ . '/../utils.php';
$lines = extractFileToArray('input.txt');

$elvesCalories = extractElvesCaloriesDesc($lines);
$max = array_shift($elvesCalories);
var_dump($max);

?>