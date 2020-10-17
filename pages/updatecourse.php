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
    <link rel="stylesheet" type="text/css" href="../style/updatecourse.css">
    <link rel="stylesheet" type="text/css" href="../style/lastbars.css">
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
            <ul>
              <li><a href="instructorhome.php">Home</a></li>
              <li><a href="../logout.php">Log out</a></li>
            </ul>
          </div>
      </div>

      <div class="text-container">

      	
        <div class="form" id="update">
          <h1>Update Course</h1>
          <h3>Please update your courses here</h3>
          <hr>
          <div id="displaycourses"></div>
          <!-- <form class="update-form" action="" method="post">
                <label for="name">Name of a course : </label>
                <input id="name" type="text" name="name" placeholder="Name of a course" required>

                <label for="category">Category : </label>
                <select class="category" name="cat">
                  <option value="Artificial">Artificial Intelligence</option>
                  <option value="datascience">Data Science</option>
                  <option value="DL">Deep Learning</option>
                  <option value="ML">Machine Learning</option>
                  <option value="NLP">Natural Language Processing</option>
                  <option value="cyber">CyberSecurity</option>
                  <option value="blockchain">Blockchain</option>
                  <option value="C">Programing in C/C++</option>
                  <option value="Java">Programing in Java</option>
                  <option value="javascript">Programing in JavaScript</option>
                  <option value="python">Programing in Python</option>
                  <option value="R">Programing in R</option>
                  <option value="webdev">Web Development</option>
                  <option value="app">App Development</option>
                  <option value="programing">Introduction to programing</option>
                  <option value="database">Dabase management system</option>
                </select>
                <br><br>

                <label for="startdate">Date of Start :</label>
                <input id="startdate" class="startdate" type="date" name="date" placeholder="Date of start">
                <br><br>

                <label for="mod1">Module 1 : </label>
                <input id="mod1" type="text" name="mod1" placeholder="Module 1" required>

                <label for="mod2">Module 2 : </label>
                <input id="mod2" type="text" name="mod2" placeholder="Module 2" required>

                <label for="mod3">Module 3 : </label>
                <input id="mod3" type="text" name="mod3" placeholder="Module 3" required>

                <label for="mod4">Module 4 : </label>
                <input id="mod4" type="text" name="mod4" placeholder="Module 4" required>

                <label for="mod5">Module 5 : </label>
                <input id="mod5" type="text" name="mod5" placeholder="Module 5" required>

                <div class="btn">
              		<button type="submit" class="updatebtn" name="courseupdatebtn">Update</button>
            	</div>
              <hr>
              </form> -->      
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
