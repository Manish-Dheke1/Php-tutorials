<?php 

mysqli_report(MYSQLI_REPORT_OFF);

//Connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbmanish6";

// Creating a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die ("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Create a table in db
$sql = "CREATE TABLE `phptrip` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);

// Check for the tablecreation success
if($result){
    echo "The table created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
}

?>