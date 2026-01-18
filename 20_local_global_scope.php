<?php 

$a = 98; // Global Variable = Scope outside the function

function printValue(){
    $a = 97;  // Local Variable = Scope inside the function
    echo "Value of variable is $a";
}


echo $a;
printValue();

?>