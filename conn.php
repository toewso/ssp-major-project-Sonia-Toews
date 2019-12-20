<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!isset($_SESSION)) session_start(); //Starts a session to pass your session variables. Stores the user that is using it


if($_SERVER["SERVER_NAME"] == "soniatoews.com"){ // start a session to pass your session variables
    // PRODUCTION = Conects to PLESK Database
    $conn = mysqli_connect("localhost", "toewso", "8To$5x8x", "my_project");


} else {
    //DEVELPMENT/LOCAL - Connects to the MAMP Database
    $conn = mysqli_connect("localhost", "root", "root", "my_project");
}


if( mysqli_connect_errno( $conn )){
    echo "Failed to connect to MYSQLI:" . mysqli_connect_error();
}
?>