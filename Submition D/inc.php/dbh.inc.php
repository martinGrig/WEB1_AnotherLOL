<?php

$servername = "i400678.hera.fhict.nl";
$dBUsername = "root";
$dBPassword = "";
$dBName = "dbi400678";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Conection failed: ".mysqli_connect_error());
}
?>