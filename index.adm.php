
<?php
 include_once 'header.php';
?>
    <!-- ============================ -->
    <!-- canada loacation  start from here  -->
    <!-- ============================ -->
    <section class="contact">
      <div class="contact__text">
        <h2 class="contact__header">sign up here !!</h2>
        <p class="paragraph">
          Ready to take it to the next level? Let’s talk about your project or
          idea and find out how we can help your business grow. If you are
          looking for unique digital experiences that’s relatable to your users,
          drop us a line.
        </p>
      </div>
      <div class="contact__form">
          <form action="includes/signup.inc.php" method="post">
          <div class="from-control paragraph">
            <input type="text" name="name" placeholder="name" />
          </div>
          <div class="from-control">
            <input type="email" name="email" placeholder="email" />
          </div>
          <div class="from-control">
            <input type="text" name="uid"  placeholder="username" />
          </div>
         
          <div class="from-control">
            <input type="text" name="pwd" placeholder="password" />
          </div>
          <div class="from-control">
            <input type="text" name="pwdRepeat" placeholder="repassword" />
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
  include_once'footer.php';
?>
