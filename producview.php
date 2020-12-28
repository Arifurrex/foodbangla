<?php
 include_once './header.php';
 if(!isset($_SESSION['useruid'])){
    header('location:login.php?error=login1s');
    exit();
   };
   require_once "./includes/fetchpost.inc.php";
   require_once "./includes/dbh.inc.php";
   $pid=$_GET['id'];
   $sq="SELECT * FROM `post` WHERE `seo_title`='$pid'";
   $res=mysqli_query($conn,$sq);
   $row=mysqli_fetch_array($res);
   $posid=$row['id'];
   $sqq="SELECT `name` FROM `category` AS c1
   INNER JOIN  `has_category` AS h1 
   ON c1.id=h1.category
   WHERE h1.post=$posid";
    $resul=mysqli_query($conn,$sqq);
    $srow=mysqli_fetch_array($resul);
?>
    <section class="producview">
        <div class="producview-leftside">
        <img src="img/<?= $row['image']?>" alt="" class="box_image">
        </div>
    
     <div class="producview-righside">
         <h3 class="produc__title"><?= $row['title']?></h3>
         <p><?= $srow['name']?></p>
         <p class="produc__descripion">
         <?= $row['content']?>
         </p>
         <a href="http://localhost:3000/producedi.php?id=<?= $row['id']?>" class="btn producview--btn1">edit</a>
         <a href="http://localhost:3000/producdele.php?id=<?= $row['id']?>" class="btn producview--btn2">delet</a>

     </div>
    </section>
  

<?php
  include_once'./footer.php';
?>

