<?php
include('../action.php');
if (!isset($_SESSION['sid'])) {
  header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GetEducated - Anytime, Anywhere</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="../style/enrolledstudents.css">
    <link rel="stylesheet" href="../style/lastbars.css">
    <link rel="stylesheet" href="../style/Instructorsignup.css">
    <link rel="stylesheet" href="../style/lastbars.css">
  </head>
  <body>
    <div class="container">

      <div class="navbar">
        <div class="leftnav">
          <h1>GetEducated</h1>
        </div>

        <div class="rightnav">
          <p><a href="instructorhome.php">Home</a></p>
          <p><a href="../logout.php">Logout</a></p>
        </div>
      </div>

      <div class="course-container">
        <p><span class="h1">Students Enrolled </span>for your offered course</p>
        <hr>
        <div id="enrolledstudentsdetails"></div>
        <div class="card-container">
          <nav class="nav">
            <img src="../images/student-1.png" alt="">
          </nav>
          <article>
            <h1>Name of a student</h1>
            <p>Phone Number</p>
            <p>Email</p>
            <p>Country</p>
          </article>
        </div>
      </div>

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
