<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "project311";

$conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);

if(!$conn){
die("COnnection Failed" . mysqli_connect_error());

}
