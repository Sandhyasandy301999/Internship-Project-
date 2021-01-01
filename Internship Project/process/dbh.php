<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "Internship Project";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>