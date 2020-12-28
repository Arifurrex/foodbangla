  <!-- aler sar -->
  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <?php
    if(isset($_FILES['image'])){
      echo "<pre>";
      print_r($_FILES);
      echo "</pre>";
    }
      if(isset($_GET['error'])){
        if($_GET["error"]=="insertinput"){
          echo"fill in all fields!";
        }
         else if($_GET["error"]=="insertdatasuccess"){
          echo"data insert successfully!!!";
        }
        else if($_GET["error"]=="invalidemail"){
          echo"choose proper email!";
        }
        else if($_GET["error"]=="passnoma"){
          echo"password doesnt match!";
        }
        else if($_GET["error"]=="usernameaken"){
          echo"user name already taken!";
        }
        else if($_GET["error"]=="stmtfailed"){
          echo"stmt failed!";
        }
        else if($_GET["error"]=="none"){
          echo"congratulation signup done!!";
        }
      }
      ?>
   </div>
       <!-- arer end  -->