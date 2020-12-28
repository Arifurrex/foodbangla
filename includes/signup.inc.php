<?php
  if(isset($_POST['save'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['uid'];
    $pwd=$_POST['pwd'];
    $pwdRepeat=$_POST['pwdRepeat'];
   
    require_once'../includes/dbh.inc.php';
    require_once'../includes/function.inc.php';
    
  if(emptySignupInput($name,$email,$username,$pwd,$pwdRepeat)==!false){
      header('location:../signup.php?error=emptyinput');
      exit();
  }

  if(invalidname($name)==!false){
    header('location:../signup.php?error=invalidname ');
    exit();
  } 

  if(invalidemail($email)==!false){
    header('location:../signup.php?error=invalidemail');
    exit();
  } 

  if(invalidpass($pwd,$pwdRepeat)==!false){
    header('location:../signup.php?error=passnoma');
    exit();
  } 
  if(usernameexsit($conn,$username,$email)==!false){
    header('location:../signup.php?error=usernameaken');
    exit();
  } ;
  createUser($conn,$name,$email,$username,$pwd);

    
  }else{
      header('location:../signup.php');
  }
  
?>