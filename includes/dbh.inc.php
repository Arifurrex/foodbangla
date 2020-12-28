<?php
$dbhos='localhost';
$dbusername='root';
$dbpassword='';
$dbname='blog2';
$conn=mysqli_connect($dbhos,$dbusername,$dbpassword,$dbname);
if(!$conn){
    die("connection failed :" . mysqli_connect_errno());
}