<?php
session_start();
if (!isset($_SESSION['id'])) {
  header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Courses on Programing</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="bgimage.css">
    <link rel="stylesheet" href="../style/studentnavbar.css">
    <link rel="stylesheet" href="../style/lastbars.css">
    <link rel="stylesheet" href="coursestyle.css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
  </head>
  <body>
    <div class="container">

      <div class="navbar">
        <div class="leftnav">
          <h1>GetEducated</h1>
        </div>
        <div class="rightnav">
            <a href="../pages/studenthome.php">Home</a>
            <a href="../logout.php">Log out</a>

        </div>
      </div>


      <div class="programingbgimage">
      </div>


      <div class="text">
        <h1>Explore <span class="highlight">Introduction to programming</span></h1>
        <h3>Results for Introduction to programming</h3>
        <hr>
      </div>

      <div id="PROGRAMING"></div>
      <!-- <div class="card-container">
        <nav class="nav">
          <img src="../images/prog-2.jpg" alt="Programing">
        </nav>
        <article>
          <h1>Course Topic</h1>
          <p>Start Date</p>
          <p>Modules</p>
          <button type="button" class="enroll" name="button">Enroll now</button>
        </article>
      </div> -->


      <div class="below-bar">
        <hr>
        <div class="row">
          <div class="column">
            <h3>GetEducated for Bussiness</h3>
            <h3>Teach on GetEducated</h3>
            <p>About us</p>
          </div>
          <div class="column">
            <p>Careers</p>
            <p>Blog</p>
            <p>Help and Support</p>
          </div>
          <div class="column">
            <p>Affilate</p>
            <p>Featured Courses</p>
          </div>
        </div>
        <br><br><br><br><br><br><br> <hr>
      </div>


      <div class="company">
        <h3>Top companies choose <span class="get">GetEducated for Bussiness</span> to built in-demand career skills.</h3>
        <div class="column">
          <img src="../images/Google-2.png" alt="Google">
          <img src="../images/att-2.png" alt="Att">
          <img src="../images/aws-2.jpg" alt="AWS">
          <img src="../images/nvidia-2.png" alt="Nvidia">
          <img src="../images/IBM-2.png" alt="IBM">
        </div>
      </div>
      <hr>


      <div class="lastnav">
        <div class="inside">
          <p>&copy - 2019. All rights reserved | Designed by Shadow_Works. Developed by Shubhodeep Adak</p>
        </div>
      </div>

      <div class="last">
          <hr>
      </div>

    </div>
  </body>
</html>
