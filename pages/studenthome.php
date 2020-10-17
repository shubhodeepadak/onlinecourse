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
    <title>GetEducated - Anytime, Anywhere</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="../style/studenthome.css">
    <link rel="stylesheet" href="../style/lastbars.css">
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
            <a href="../logouttech.php">Teach on GetEducated</a>
            <a href="#left">My Courses</a>
            <a href="#">Wishlist</a>
            <div class="dropdown">
              <button type="button" class="dropbtn" name="button"><?php echo $_SESSION['fname'] ; ?> </button>
              <div class="dropdown-content">
                <a href="studentupdate.php">Update Profile</a>
                <a href="studentupdate.php">Notifications</a>
                <a href="studentupdate.php">Messages</a>
                <hr>
                <a href="../logout.php">Log out</a>
              </div>
            </div>

        </div>
      </div>


      <div class="course-container">
        <h1>Welcome back, <?php echo $_SESSION['fname'] ; ?></h1>
        <h3>Ready to jump back in?</h3>
        <hr>
        <h3 class="left" id="left">My Courses</h3>

        <div id="ENROLLED"></div>
        <!-- <div class="card-container">
          <nav class="nav">
            <img src="../images/background_image4-2.jpg" alt="Course">
          </nav>
          <article>
            <h1>Course Topic :</h1>
            <p>Instructor :</p>
            <p>Start Date :</p>
            <p>Modules :</p>
            <button type="button" class="delcourse" name="button">Delete course</button>
          </article>
        </div> -->

      </div>


      <div class="programs">
        <h1>What to learn next</h1>
        <hr>
        <div class="column">
          <a href="../courses/AI.php"><img src="../images/artificial-1.jpg" alt="Artificial Intelligence"></a>
          <a href="../courses/datascience.php"><img src="../images/datascience-1.jpg" alt="Data Science"></a>
          <a href="../courses/deeplearning.php"><img src="../images/deeplearning-1.jpg" alt="Deep Learning"></a>
          <a href="../courses/ml.php"><img src="../images/machine-1.png" alt="Machine Learning"></a>
          <a href="../courses/NLP.php"><img src="../images/NLP-1.jpg" alt="Natural Language Processing"></a>
          <a href="../courses/cyber.php"><img src="../images/cyber-1.png" alt="Cyber Security"></a>
          <a href="../courses/blockchain.php"><img src="../images/blockchain-1.png" alt="blockchain"></a>
          <a href="../courses/C.php"><img src="../images/C-1.jpg" alt="Programing in C and C++"></a>
          <a href="../courses/java.php"><img src="../images/java-1.png" alt="Programing in Java"></a>
          <a href="../courses/javascript.php"><img src="../images/javascript-1.png" alt="Programing in JavaScript"></a>
          <a href="../courses/python.php"><img src="../images/python-1.png" alt="Programing in Python"></a>
          <a href="../courses/r.php"><img src="../images/R-1.png" alt="Programing in R"></a>
          <a href="../courses/web.php"><img src="../images/web-1.png" alt="Web Development"></a>
          <a href="../courses/android.php"><img src="../images/android-1.png" alt="Android Development"></a>
          <a href="../courses/programing.php"><img src="../images/programming-1.jpg" alt="Programing"></a>
          <a href="../courses/data.php"><img src="../images/database-1.jpg" alt="Database Management"></a>
        </div>
      </div>


      <div class="gaps">

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
