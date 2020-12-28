
<?php
 include_once './header.php';
 if(!isset($_SESSION['useruid'])){
    header('location:login.php?error=login1s');
    exit();
   };
   require_once "./includes/fetchpost.inc.php";
   require_once "./includes/dbh.inc.php";
?>
    <!-- ============================ -->
    <!-- canada loacation  start from here  -->
    <!-- ============================ -->
 
    <section class="profile">
      <div class="profile__text">
          <?php
          if(isset($_SESSION['useruid'])){
            echo "<h2 class='profile__header'>welcome Mr" ." ".  $_SESSION['useruid']  . " in food blog </h2>";
          }
        ?>
        <p class="paragraph">
          Ready to take it to the next level? Let’s talk about your project or
          idea and find out how we can help your business grow. If you are
          looking for unique digital experiences that’s relatable to your users,
          drop us a line.
        </p>
      </div>
    </section>
    <!-- ============================ -->
    <!-- canada location end from here  -->
    <!-- ============================ -->
    <div class="masarny">
    <div class="maranycontainer">
		<?php
		// print_r($result);
		while($row=mysqli_fetch_array($result)){
			$posid=$row['id'];
			 $sqli="SELECT `name` FROM `category` AS c1
			 INNER JOIN  `has_category` AS h1 
			 ON c1.id=h1.category
			 WHERE h1.post=$posid";
			 $rest=mysqli_query($conn,$sqli);
			 $caname="";
			 while($row2=mysqli_fetch_array($rest)){
				$caname=$row2['name'];
			 }
			echo '
			<a class="box" href="http://localhost:3000/producview.php?id='.$row['seo_title'].'">
			<img src="img/'.$row['image'].'" alt="" class="box_image">
				<div class="content">
					<h3 class="box-header">'.$row['title'].'</h3>
					<div class="box__daca">
						<p class="dave">'.substr($row['date'],0,10).'</p>
						<p class="cae">'.$caname.'</p>
						
					</div>
				</div> 
			</a>
			';
		}
		?>
	
	</div>
    </div>
<?php
  include_once'./footer.php';
?>
