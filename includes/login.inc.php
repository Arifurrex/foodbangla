<?php
if(isset($_POST['save'])){
    $username=$_POST['uid'];
    $pwd=$_POST['pwd'];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if(emptyloginInput($username,$pwd)==!false){
        header('location:../login.php?error=emptyinput');
        exit();
    }
    loginUser($conn,$username,$pwd);
}else{
    header('location:../login.php');
    exit();
}