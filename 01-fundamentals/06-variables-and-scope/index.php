<?php

// Variables

$name  = "Xavier";
$age   = 21;
$score = 85;

echo "Name: " . $name . "\n";
echo "Age: " . $age . "\n";
echo "Score: " . $score . "\n";

// Changing a variable's value

$score = 90;

echo "Updated Score: " . $score . "\n";

// Local scope

function showMessage(): void
{
    $message = "Hello from function scope.";

    echo $message . "\n";
}

showMessage();

echo $message;
