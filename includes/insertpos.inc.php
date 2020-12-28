<?php
 if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $seo=$_POST['seo_title'];
    $content=$_POST['content'];
    $category=$_POST['category'];
    $author=$_POST['author'];
    $image=$_FILES['image'];    
    require_once"dbh.inc.php";
    require_once"function.inc.php";
    if(emptyisertpos($title,$seo,$content,$category,$author,$image)==!false){
        header('location:http://localhost:3000/insertfoodform.php?error=insertinput');
        exit();
    };
    $tmpname=$_FILES['image']['tmp_name'];
    $filename=$_FILES['image']['name'];
    $ima=move_uploaded_file($tmpname,"../img/".$filename);
    $query="INSERT INTO `post`(`title`, `seo_title`, `content`, `author`,`image`) 
    VALUES ('$title','$seo','$content','$author','$filename')";
    mysqli_query($conn,$query);
    
    // post ta kon categoryer ta defie kore devo 
    $sql="SELECT * FROM `post` WHERE `seo_title` = '$seo'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    echo $row[0];
    $post_id=$row[0];
   
    // isert has category data 
    $category_array=explode(" ",$category);  //explode str k array korbe exam[1,2,4]
    foreach($category_array as $el){
     $query="INSERT INTO `has_category`(`post`, `category`) VALUES ($post_id,$el)";
     mysqli_query($conn,$query);
     header('location:http://localhost:3000/insertfoodform.php?error=insertdatasuccess');
    }
}else{
        header('location:../signup.php');
    }


