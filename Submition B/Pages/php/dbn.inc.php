<?php


$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystemtut"; /*imeto na databazata v phpmyadmin*/



$conn = new mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

if (!conn){
    die("Connection failed: ".mysqli_connect_error());
}