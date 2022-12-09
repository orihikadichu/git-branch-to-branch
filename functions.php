<?php

function calculateBmi(float $weight, float $height): float
{
    return $weight / ($height ** 2);
}