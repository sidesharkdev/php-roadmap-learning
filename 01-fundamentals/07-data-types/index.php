<?php

$name      = "Xavier"; // string
$age       = 21;       // integer
$height    = 170.5;    // float
$isStudent = true;     // boolean
$nothing   = null;     // null

$skills = ["PHP", "Git", "Linux"]; // array

echo "Name: " . $name . "\n";
echo "Age: " . $age . "\n";
echo "Height: " . $height . "\n";
echo "Student: " . ($isStudent ? "Yes" : "No") . "\n";
echo "Nothing: ";
var_dump($nothing);

echo "Skills: ";
print_r($skills);
