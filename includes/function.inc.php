<?php
function emptySignupInput($name,$email,$username,$pwd,$pwdRepeat){
    $result;
    if(empty($name)||empty($email)||empty($username)||empty($pwd)||empty($pwdRepeat)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
  };
//   ===============
  function invalidname($name){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$name)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}
//  ===================== 
// ===========================
function invalidemail($email){
    $result;
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      $result=true;
    }else{
        $result=false;
    }
    return $result;
}
// ========================
// =======================
 function invalidpass($pwd,$pwdRepeat){
     $result;
     if($pwd !== $pwdRepeat){
         $result=true;
     }else{
         $result=false;
     }
     return $result;
 }
//  ============================
function usernameexsit($conn,$username,$email){
    $sql="SELECT * FROM `users` WHERE `userUid`=? OR `userEmail`= ?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ss",$username,$email);
    mysqli_stmt_execute($stmt);
    $resultdata=mysqli_stmt_get_result($stmt);
    if($row=mysqli_fetch_assoc($resultdata)){
        return $row;
    }else{
        $result=false;
        return $result;
    }
    mysqli_stmt_close();

}
// ======================================
function createUser($conn,$name,$email,$username,$pwd){
    $sql="INSERT INTO `users`(`userName`, `userEmail`, `userUid`, `userPwd`) VALUES (?,?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:../signup.php?error=stmtfailed");
        exit();
    }
    $hashedpwd=password_hash($pwd,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$username,$hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close();
    header("location:../signup.php?error=none");
        exit();

}

// ===========================
// login start from herer 
// =============================
function emptyloginInput($username,$pwd){
    $result;
    if(empty($username)||empty($pwd)){
      $result=true;
   }else{
    $result=false;
    }
   return $result;
    }

    // ==============
    // login 
function loginUser($conn,$username,$pwd){
    $usernameexsit=usernameexsit($conn,$username,$pwd);
    if($usernameexsit === false){
        header("location:../login.php?error=wronglogin");
        exit();
    }
    $pwdhashed=$usernameexsit['userPwd'];
    $checkpwd=password_verify($pwd,$pwdhashed);
    if($checkpwd == false){
        header("location:../login.php?error=passwrong");
        exit();
    }else if($checkpwd==true){
        session_start();
        $_SESSION['userid']=$usernameexsit["userId"];
        $_SESSION['useruid']=$usernameexsit["userUid"];
        header("location:../index.php");
        exit();
    }
}
// ====================================
// function for insertpost  start here
// ======================================
function emptyisertpos($title,$seo,$content,$category,$author){
    $result;
    if(empty($title)||empty($seo)||empty($content)||empty($category)||empty($author)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}