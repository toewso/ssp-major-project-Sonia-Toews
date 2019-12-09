<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!isset($_SESSION)) session_start(); //Starts a session to pass your session variables. Stores the user that is using it

$conn = mysqli_connect("localhost", "root", "root", "my_project");


if( mysqli_connect_errno( $conn )){
    echo "Failed to connect to MYSQLI:" . mysqli_connect_error();
}
?>