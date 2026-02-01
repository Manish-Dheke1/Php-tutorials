<?php 

$fptr = fopen("myfile.txt", "r");
if (!$fptr) {
    die("Unable to open file. Please enter a valid filename ");
}
$content = fread($fptr, filesize("myfile.txt"));
fclose($fptr);
echo $content;

?>