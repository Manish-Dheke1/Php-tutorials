<?php
// echo "Welcome to for each loop<br>";
// $arr = array("bananas", "apples", "Honey", "Bread");

// // for ($i=0; $i < count($arr); $i++) {
// //     echo $arr[$i] . "<br>";
// // }


// foreach ($arr as $value) {
//     echo "$value <br>";
// }

?>


<?php 

$arr = array("apple", "mango", "grapes", "oranges");
for ($i=0; $i < count($arr); $i++) {
    echo $arr[$i] . "<br>";
}

echo "<br>";

foreach ($arr as $value){
    echo $value . "<br>";
}
?>