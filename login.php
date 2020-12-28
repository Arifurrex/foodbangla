
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
      if(isset($_GET['error'])){
        if($_GET["error"]=="emptyinput"){
          echo"fill in all login fields!";
        }else if($_GET["error"]=="wronglogin"){
            echo"worong!";
          }else if($_GET["error"]=="passwrong"){
            echo"passwrong worong!";
          }
      
      }
      ?>
   </div>
       <!-- arer end  -->
    <section class="login">
      <div class="login__text">
        <h2 class="login__header">food bangla</h2>
        <p class="paragraph">
        food bangla helps you connect and share with the people in your life.
        </p>
      </div>
      <div class="login__form">
          <form action="includes/login.inc.php" method="post">
          <div class="from-control">
            <input type="text" name="uid"  placeholder="username" />
          </div>
          <div class="from-control">
            <input type="text" name="pwd" placeholder="password" />
          </div>
          <div class="from-control">
            <input type="submit" name="save" value="save" class="btn" />
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
