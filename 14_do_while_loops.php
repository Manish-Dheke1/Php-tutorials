<?php 

echo "Welcome to do-while loops <br>";

/*  Syntax of do-while loop
do {
    // code to be executed;
    ...
} while (condition);

even if the condition is false, the code block will be executed once.
*/

$i = 0;
do {
    echo "$i <br>";
    $i++;
} while($i<5);

?>