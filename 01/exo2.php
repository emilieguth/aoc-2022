<?php
require __DIR__ . '/utils.php';
require __DIR__ . '/../utils.php';
$lines = extractFileToArray('input.txt');

$elvesCalories = extractElvesCaloriesDesc($lines);

$max = 0;
for($i = 0; $i < 3; $i++) {
  $max += array_shift($elvesCalories);
}
var_dump($max);

