<?php
$ide=$_GET['id'];
$sqled="SELECT * FROM `post` WHERE `id` = '$ide'";
$res=mysqli_query($conn,$sqled);
$row=mysqli_fetch_array($res);
// print_r($row);

$sqledr="SELECT `name` FROM `category`AS c1
INNER JOIN `has_category` AS h1
ON c1.id=h1.category
WHERE h1.post = '$ide'";
$resr=mysqli_query($conn,$sqledr);
$rowr=mysqli_fetch_array($resr);
