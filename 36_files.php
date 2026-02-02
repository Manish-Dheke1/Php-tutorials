<?php 

$fptr = fopen("myfile.txt", "r");

// Reading a file line by line
// while($a=fgets($fptr)) {
//     echo $a;
//     break;
// }
// echo "End of line has been reached";
// fclose($fptr);

// Reading a file character by character
// while($a=fgetc($fptr)) {
//     echo $a;
//     break;
// }
// echo "End of line has been reached";
// fclose($fptr);

// Write a program which reads content of file until . has been encountered
while($a=fgetc($fptr)){
    echo $a;
    if($a == ".") {
        break;
    }   
}
echo "End of line has been reached";
fclose($fptr);
?>