<?php 

echo "Welcome to php tutorials on functions <br>";

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value){
        $sum += $value;
    }
    return $sum;
}

function avgMarks($avgArr){
    $sum = 0;
    $i = 0;
    foreach ($avgArr as $value){
        $sum += $value;
        $i++;    
    }
    return $sum/$i;

}

$manish = [34, 98, 45, 12, 98, 93];
$sumMarks = processMarks($manish);
echo "Total marks scored by Manish out of 600 is $sumMarks";

$avgscore = avgMarks($manish);
echo "<br> Average marks scored by Manish is $avgscore";
?>