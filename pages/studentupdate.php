<?php
  include('../action.php');
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
    <link rel="stylesheet" href="../style/update.css">
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
            <ul>
              <li><a href="#update">Update profile</a></li>
              <li><a href="studenthome.php">Home</a></li>
              <li><a href="#notifications">Notifications</a></li>
              <li><a href="#message">Messages</a></li>
              <li><a href="#delete">Delete</a></li>
              <li><a href="../logout.php">Log out</a></li>
            </ul>
          </div>
      </div>


      <div class="text-container">

        <div id="student_data"></div>
        <!-- <div class="form">
          <h1>Update information</h1>
          <h3>Please update your personal information here</h3>
          <hr>
          <form class="update-form" action="" method="post">
            <label for="Fname"><b><b>First Name<b></label>
            <input type="text" name="Fname" placeholder="First Name" required>

            <label for="Lname"><b>Last Name<b></label>
            <input type="text" name="Lname" placeholder="Last Name" required>

            <label for="uname"><b>Username<b></label>
            <input type="text" name="uname" placeholder="Enter username" required>

            <label for="pnum"><b>Phone Number<b></label>
            <input type="text" name="pnum" placeholder="Enter your phone number" required>

            <label for="gender"><b>Gender<b></label>
              <select class="gender" name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="others">Others</option>
              </select>
              <br><br>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

            <div class="btn">
              <button type="submit" class="updatebtn" name="updatebtn">Update</button>
            </div>
          </form>
        </div> -->

        <br><br>


        <div class="notifications" id="notifications">
          <h1>Notifications</h1>
          <hr>
          <p>No new notification available</p>
        </div>


        <div class="messages" id="message">
          <h1>Messages</h1>
          <hr>
          <p>Sorry, no message available</p>
        </div>


        <div class="delete">
          <h1>Delete my account</h1>
          <hr>
          <p>By continuing to delete my account, your account will be permanently deleted. You'll not get any notification or message and not even you'll get any kind of refund for the incomplete courses which you've applied for.</p>
          <h2>Before clicking the below <span id="del-color">DELETE BUTTON</span> please make sure that you actually wanna to do it.</h2>
          <p>Once, you clicked it your account will be permanently deletedd.</p>
          <button type="button"  class="delbtn" id="delbtn">Delete</button>
        </div>

      </div>


      <div class="gap">

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
          <p>&copy - 2019. All rights reserved | Designed by Shadow_Works. Developed by Shubhodeep Adak/p>
        </div>
      </div>

      <div class="last">
          <hr>
      </div>

    </div>
  </body>
</html>
