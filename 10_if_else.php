<?php

// $a = 85;
// $b = 9;

// if ($a > 78) {
//     echo "a is greater than 78"; 
// }
// else {
//     echo "a is not greater than 78";
// }

// $age = 4;

// if ($age>18){
//     echo "You can drink water with tea and alcohol";
// }
// elseif($age>13){
//     echo "You can drink water with tea only";
// }
// else{
//     echo "You can drink water only";
// }

$marks = 80;
if ($marks>=90){
    echo "Marks is A+";
}
elseif($marks>=80 && $marks<90){
    echo "Marks is A";
}
elseif($marks>=60 && $marks<79){
    echo "Marks is B+";
}
elseif($marks>=50 && $marks<59){
    echo "Marks is B";
}
elseif($marks>=40 && $marks<49){
    echo "Marks is C+";
}
else
    {
        echo "Fail";
    }

echo "<br>";

$age = 25;
if ($age>25 && $age<=65){
    echo "You are eligible to drive";
}
else{
    echo "You are not eligible to drive";
}
?>