<?php
 include_once './header.php';
?>
    <!-- ============================ -->
    <!-- canada loacation  start from here  -->
    <!-- ============================ -->
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
    <section class="contact">
      <div class="contact__text contact__text--modifierforinsert">
        <h2 class="contact__header contact--writtingmode">insert your post here !!</h2>
        
      </div>
      <div class="contact__form">
      <form action="../includes/insertpos.inc.php" class="decor decoreform" method="post" enctype="multipart/form-data">
      <div class="form-left-decoration"></div>
      <div class="form-right-decoration"></div>
      <div class="circle"></div>
      <div class="form-inner">
        <input type="hidden" name="author" value="1">
        <input type="text" name="title"placeholder="title">
        <input type="text" name="seo_title" placeholder="seo-title">
        <input type="text" name="category" placeholder="category">
        <input type="file" name="image"/>
        <textarea placeholder="content" name="content" rows="5" ></textarea>
        <button type="submit"  name="submit" value="submit" >Submit</button>
      </div>
    </form>
      </div>
     
    </section>
    <!-- ============================ -->
    <!-- canada location end from here  -->
    <!-- ============================ -->

<?php
  include_once'./footer.php';
?>
