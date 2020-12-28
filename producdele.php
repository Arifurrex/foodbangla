<?php
include"../foodbangla/includes/dbh.inc.php";
$idel=$_GET['id'];
print_r($_GET);
$sqldel="DELETE FROM `post` WHERE `id`='$idel'";
mysqli_query($conn,$sqldel);
header('location:http://localhost:3000/index?error=insertinput');