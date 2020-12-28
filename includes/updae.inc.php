<?php
require_once"dbh.inc.php";
$idu=$_GET['id'];
 $title=$_POST['title'];
 $seo=$_POST['seo_title'];
 $content=$_POST['content'];
 $category=$_POST['category'];
 echo '<pre>';
 print_r($_POST);
 echo '</pre>';
 print_r($_GET);
 $sqld="UPDATE `post` SET `title`='$title',`seo_title`='$seo',`content`='$content' WHERE `id`='$idu'";
 mysqli_query($conn,$sqld);
header('location:http://localhost:3000/index.php?success=success');