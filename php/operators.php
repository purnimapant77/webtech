<?php
$a = 20;
$b = 10;

echo "<h2>Arithmetic Operators</h2>";
echo "Addition (a + b) = " . ($a + $b) . "<br>";
echo "Subtraction (a - b) = " . ($a - $b) . "<br>";
echo "Multiplication (a * b) = " . ($a * $b) . "<br>";
echo "Division (a / b) = " . ($a / $b) . "<br>";
echo "Modulus (a % b) = " . ($a % $b) . "<br>";

echo "<h2>Comparison Operators</h2>";
echo "a == b : ";
var_dump($a == $b);
echo "<br>";

echo "a != b : ";
var_dump($a != $b);
echo "<br>";

echo "a > b : ";
var_dump($a > $b);
echo "<br>";

echo "a < b : ";
var_dump($a < $b);
echo "<br>";

echo "<h2>Logical Operators</h2>";
echo "(a > 15 && b < 15) : ";
var_dump($a > 15 && $b < 15);
echo "<br>";

echo "(a > 25 || b < 15) : ";
var_dump($a > 25 || $b < 15);
echo "<br>";

echo "!(a == b) : ";
var_dump(!($a == $b));
echo "<br>";

?>
