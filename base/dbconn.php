<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "xyz";

$connection = mysqli_connect($server,$username,$password,$db);
if(!$connection){
    die("connection is failed :" .mysqli_connect_error());
}else{
    echo "success <br>";
}
$sqldb = "create database if not exists xyz";
$result = mysqli_query($connection,$sqldb);
if($result){
    echo "database inserted successfully <br>";
}
$sqltbl = "create table if not exists boy(
Id int primary key not null auto_increment,
Name varchar(255),
Email varchar(255),
Password varchar(255),
Contact varchar(255)
)";
$result = mysqli_query($connection,$sqltbl);
if($result){
    echo "table inserted successfully <br>";
}
?>