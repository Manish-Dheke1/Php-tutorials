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

// Variables to be inserted into table
$name="Anam";
$destination = "America";

// Sql query to be executed
$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);

// Add a new trip to Trip table in database
if($result){
    echo "The record was inserted successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}

?>