<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "anotherlol";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Conection failed: ".mysqli_connect_error());
}
?>