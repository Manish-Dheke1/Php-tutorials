<?php

// Session -> Used to manage information in different pages.

// Verify user login info
session_start();
$_SESSION['username'] = "Harry"; 
$_SESSION['favCat'] = "Books";
echo "We have saved your session";

?>