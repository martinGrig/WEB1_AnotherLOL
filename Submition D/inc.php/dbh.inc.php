<?php

$servername = "studmysql01.fhict.local";
$dBUsername = "dbi400678";
$dBPassword = "Password";
$dBName = "dbi400678";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Conection failed: ".mysqli_connect_error());
}
?>