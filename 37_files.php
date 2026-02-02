<?php 

// Writing to a file in php
// echo "Writing to file in PHP";
// $fptr = fopen("myfile2.txt", "w");
// fwrite($fptr, "This is first line \n");
// fwrite($fptr, "This is second line");
// fclose($fptr);

// Appending to a file in php
// $fptr = fopen("myfile2.txt", "a");
// fwrite($fptr, "This is being appended to the file \n");
// fclose($fptr);

// $fptr = fopen("myfile2.txt", "w");
// fwrite($fptr, "This is new file \n");
// fwrite($fptr, "This is second file \n");
// fwrite($fptr, "This is third file ");
// fclose($fptr);


$fptr = fopen("myfile3.txt", "a");
fwrite($fptr, "This is first append file\n");
// fwrite($fptr, "This is second append file");
// fwrite($fptr, "This is third append file");
fclose($fptr);



































?>