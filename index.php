<?php

require_once __DIR__ . '/functions.php';

// Kg
$weight = 53;
// M
$height = 1.73;

$bmi = calculateBmi($weight, $height);

echo $bmi;