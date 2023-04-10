<?php
$server = "127.0.0.1:3307";
$username = "root";
$password = "";
$db = "contactusdb";
$connection = mysqli_connect($server, $username, $password, $db);
if(!$connection){
    die("Connection to database failed due to ".mysqli_connect_error());
}
?>