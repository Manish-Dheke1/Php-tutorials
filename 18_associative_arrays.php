<?php 

echo "Welcome to associative arrays <br>";

// Associative Arrays
$favCol = array(
    'shubham' => 'red', 
    'rohan' => 'green',
    'manish' => 'blue'
    );
foreach ($favCol as $key => $value) {
    echo "The favorite color of ".$key." is ".$value."<br>";
}


echo $favCol['manish'];
echo "<br>"; 
echo $favCol['rohan'];  
?>