<?php

session_start(); 


// Unset all of the session variables
session_unset(); // Remove all session variables
session_destroy(); // Destroy the session

header("Location: login.php"); 
exit(); 




?>