
<?php
 include_once './header.php';
 include_once './includes/aler.inc.php';
 include_once './includes/dbh.inc.php';
 include_once './includes/edi.inc.php';
?>

  
    <section class="contact">
      <div class="contact__text contact__text--modifierforinsert">
        <h2 class="contact__header contact--writtingmode">edit your post here !!</h2>
        
      </div>
      <div class="contact__form">
      <form action="../includes/updae.inc.php?id=<?= $row['id']?>" class="decor decoreform" method="post" enctype="multipart/form-data">
      <div class="form-left-decoration"></div>
      <div class="form-right-decoration"></div>
      <div class="circle"></div>
      <div class="form-inner">
        <input type="hidden" name="author" value="1">
        <input type="text" name="title"placeholder="title" value="<?=$row['title']?>">
        <input type="text" name="seo_title" placeholder="seo-title" value="<?=$row['seo_title']?>">
        <input type="text" name="category" placeholder="category" value="<?=$rowr['name']?>">
        <input type="image" name="image" value="../img/<?=$row['image']?>"/>
        <img src="../img/<?=$row['image']?>" alt="">
        <input type="file" name="image"/>
        <textarea placeholder="content" name="content" rows="5" ><?=$row['content']?></textarea>
        <button type="submit"  name="submit" value="submit" >Update now</button>
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
