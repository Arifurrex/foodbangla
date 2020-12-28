<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@200;400;700;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/normalize.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
      integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="src/2-styles/main.css" />
    <title>food bangla</title>
  </head>
  <body>
    <!-- ============================ -->
    <!-- header start from here  -->
    <!-- ============================ -->
    <header>
      <nav>
        <a href="http://localhost:3000/index.php" class="logo-image">
            <img src="./img/logo1.png" alt="logo-light" /> 
        
        </a>
        <ul class="nav-list">
          <li class="nav-list-item">
            <a href="http://localhost:3000/profile.php" class="black nav-links"
              ><i class="fas fa-home"></i> HOME</a
            >
          </li>
          <!-- <li class="nav-list-item">
            <a href="/src/3-pages/location.html" class="black nav-links"
              >LOCATIONS</a
            >
          </li> -->
          <!-- <li class="nav-list-item">
            <a href="/src/3-pages/contact.html" class="black nav-links"
              >CONTACT</a
            >
          </li> -->
          <?php
          if(isset($_SESSION['useruid'])){
            echo'<li class="nav-list-item">
            <a href="../profile.php" class="black nav-links"
              ><i class="fas fa-user"></i>'." ". $_SESSION['useruid'].'</a
            >
          </li>';
          echo'<li class="nav-list-item">
            <a href="includes/logou.inc.php" class="black nav-links"
              ><i class="fas fa-sign-out-alt"></i>LOGOU</a
            >
          </li>';
          }else{
            echo'<li class="nav-list-item">
            <a href="/src/3-pages/contact.html" class="black nav-links"
              >SIGNUP</a
            >
          </li>';
          echo' <li class="nav-list-item">
          <a href="login.php" class="black nav-links"
            >LOGIN</a
          >
        </li>';
          }
          ?> 
        </ul>
        <div class="menu-btn">
          <div class="menu-btn__burger"></div>
        </div>
        <div class="mobile-white-background"></div>
        <div class="mobile-nav-block">
          <ul class="mobile-nav-list">
            <li class="mobile-nav-list-item">
              <a href="/src/3-pages/aboutus.html" class="nav-links-mobile"
                >OUR COMPANY</a
              >
            </li>
            <li class="mobile-nav-list-item">
              <a href="/src/3-pages/location.html" class="nav-links-mobile"
                >LOCATIONS</a
              >
            </li>
            <li class="mobile-nav-list-item">
              <a href="/src/3-pages/contact.html" class="nav-links-mobile"
                >CONTACT</a
              >
            </li>
            <li class="mobile-nav-list-item">
              <a href="/src/3-pages/contact.html" class="nav-links-mobile"
                >SIGNUP</a
              >
            </li>
            <li class="mobile-nav-list-item">
              <a href="/src/3-pages/contact.html" class="nav-links-mobile"
                >LOGIN</a
              >
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- ============================ -->
    <!-- header end from here  -->
    <!-- ============================ -->