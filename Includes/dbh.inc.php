<?php

$ServerName="localhost";
$dBUserName= "root";
$dBPassword="";
$dBName="phpproject01";

$conn= mysqli_connect($ServerName,$dBUserName,$dBPassword, $dBName);
if(!$conn){
    die("connection failed: ".mysqli_connect_error());   
}