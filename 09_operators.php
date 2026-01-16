<?php
/* Operators in PHP
1. Arithmetic Operators
2. Assignment Operators
3. Comparison Operators
4. Logical Operators
*/

$a = 45;
$b = 8;

// 1. Arithmetic Operators
// echo "Sum of a+b is " . ($a + $b);
// echo "<br>";
// echo "Difference of a-b is " . ($a - $b);
// echo "<br>";
// echo "Product of a*b is " . ($a*$b);
// echo "<br>";
// echo "Division of a/b is " . ($a/$b);
// echo "<br>";
// echo "For a % b , result is " . ($a % $b). "<br>";
// echo "For a ** b , result is " . ($a ** $b) . "<br>";

// 2. Assignment Operators
// $x = $a;
// echo "For x, the value is " . $x;

// $a += 5;
// echo "For a, the value is " . $a . "<br>";

// $a -= 5;
// echo "For a, the value is " . $a . "<br>";

// $a *= 5;
// echo "For a, the value is " . $a . "<br>";

// $a /= 5;
// echo "For a, the value is " . $a . "<br>";

// $a %= 5;
// echo "For a, the value is " . $a . "<br>";

// 3. Comparison Operators
$x = 7;
$y = 9;

// echo "Result of x == y is ";
// echo var_dump($x == $y) . "<br>";

// echo "Result of x < y is ";
// echo var_dump($x < $y) . "<br>";

// echo "Result of x > y is ";
// echo var_dump($x > $y) . "<br>";

// echo "Result of x <= y is ";
// echo var_dump($x <= $y) . "<br>";

// echo "Result of x >= y is ";
// echo var_dump($x >= $y) . "<br>";

// 4. Logical Operators
$m = true;
$n = false;
echo "Result of m and n is ";
echo var_dump($m && $n) . "<br>";

echo "Result of m or n is ";
echo var_dump($m || $n) . "<br>";

echo "Result of m not is ";
echo var_dump(!$m) . "<br>";

?>