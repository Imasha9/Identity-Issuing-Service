<?php

$serverName="localhost";
$dbUser="root";
$dbPassword="";
$dbName="spark_identity";

$conn= new mysqli($serverName,$dbUser,$dbPassword,$dbName);

if($conn->connect_error){
    die("Connection Faild:".$conn->connect_error);
}
?>