<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['uname']);
unset($_SESSION['fname']);
unset($_SESSION['sid']);
header('location:pages/instructor.php');
 ?>
