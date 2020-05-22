<?php

$servername="localhost";
$dBUusername="root";
$dBPassword="";
$dbname ="gartdb";


$conn = mysqli_connect($servername, $dBUusername,$dBPassword,$dbname);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}