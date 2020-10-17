<?php
  include("../action.php");
  if (isset($_POST['login2'])) {
    $uname=$_POST['uname'];
    $psw=$_POST['psw'];
    $query="SELECT * FROM admin WHERE username='$uname'AND password='$psw'";
    $run=mysqli_query($con,$query);
    if (mysqli_num_rows($run)==1) {
        $row=mysqli_fetch_array($run);
        $_SESSION['id']=$row['id'];
        $_SESSION['uname']=$row['username'];
      header('location:adminhome.php');
    }
  }

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="../style/Admin.css">
  </head>
  <body>
    <div class="container">
      <h1>Admin Login</h1>
      <form action="" method="post">
        <div class="textbox">
          <label for="username1"><img src="../images/img_user.png" alt="User" class="user"></label>
          <input id="username1" type="text" name="uname" placeholder="Admin Username" required>
        </div>
        <div class="textbox">
          <label for="pass"><img src="../images/img_lock.png" alt="User" class="user"></label>
          <input id ="pass" type="password" name="psw" placeholder="Password" required>
        </div>

        <input id="loginNew" class="btn" type="submit" name="login2" value="LogIn">
        <a href="../index.php"><input class="btn" type="button" name="" value="Cancel"></a>
      </form>
    </div>
  </body>
</html>
