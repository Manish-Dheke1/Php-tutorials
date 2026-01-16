 <?php 

echo "This is for loop in php <br>";
for ($index = 1; $index < 6; $index++) {
    echo "The number is $index <br>";
}

?> 



<?php

echo "<br>";

# Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position.

for ($i=1; $i<=10; $i++) {
    if ($i<10)
        {
            echo "$i-";
        }
    else{
            echo "$i";
        }
    
}


echo "<br>";

# Create a script using a for loop to add all the integers between 0 and 30 and display the sum.

$sum = 0;
for ($i=0; $i <=30; $i++){
    $sum += $i;
}
echo "Total sum of integers between 0 and 30 is $sum <br>";

?>

