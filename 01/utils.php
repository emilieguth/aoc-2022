<?php
function extractElvesCaloriesDesc($lines) {
  $elvesCalories = [];
  $currentElve = 0;
  foreach($lines as $line) {
    if (isset($elvesCalories[$currentElve]) === false) {
      $elvesCalories[$currentElve] = 0;
    }
    if (strlen($line) === 0) {
      $currentElve++;
    } else {
      $elvesCalories[$currentElve] += (int)$line;
    }
  }
  arsort($elvesCalories);
  return $elvesCalories;
}