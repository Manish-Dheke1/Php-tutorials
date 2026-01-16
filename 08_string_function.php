<?php

$name = "Harry is a good boy";
echo "Length of " . "a string is " . strlen($name);
echo "<br>";

echo str_word_count($name);
echo "<br>";

echo strrev($name);
echo "<br>";

echo strpos($name, "is");
echo "<br>";

echo str_replace("Harry", "Rohan", $name);
echo "<br>";

echo "<pre>";
echo rtrim("   this is a string   ");
echo "<br>";
echo ltrim("   this is a string   ");
echo "</pre>";
echo "<br>";

echo strtoupper($name);
echo strtolower($name);

?>  