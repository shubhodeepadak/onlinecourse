<?php
  session_start();
  if (!isset($_SESSION['id'])) {
    header('location:../index.php');
  }


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
    <link rel="shortcut icon" href="../images/logo.png">
	<link rel="stylesheet" type="text/css" href="../style/example.css">
	<link rel="stylesheet" type="text/css" href="../style/studentdisplay.css">
	<link rel="stylesheet" type="text/css" href="../style/instructordisplay.css">
	<link rel="stylesheet" type="text/css" href="../style/adminupdate.css">
	<link rel="stylesheet" type="text/css" href="../style/coursedisplay.css">
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
          <button type="button" class="info" onclick="document.getElementById('id02').style.display='block'" name="std">Students enrolled</button>
          <div id="id02" class="modal">
            <form class="modal-content animate" action="" method="post">
            	<div class="student-container">
            		<div class="close-container"><span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            		</div>
            		<h1>Students details</h1>
        			<hr>
        			<div id="student"></div>
        			<!-- <div class="card-container">
        			  <nav class="nav">
        			    <img src="../images/student-2.png" alt="">
        			  </nav>
        			  <article>
        			    <h1>Name of a Student: </h1>
        			    <p>Student id: </p>
        			    <p>Phone Number: </p>
        			    <p>Email: </p>
        			    <p>Country: </p>
        			  </article>
        			</div> -->
        			
        		</div>
          	</form>
          </div>


          <button type="button" class="info" onclick="document.getElementById('id03').style.display='block'" name="ins">Instructors enrolled</button>
          <div id="id03" class="modal">
            <form class="modal-content animate" action="" method="post">
            	<div class="instructor-container">
            		<div class="close-container"><span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
            		</div>
            		<h1>Instructor details</h1>
        			<hr>
        			  <div id="instructor"></div>
        			  <!-- <div class="card-container">
			          	<nav class="nav">
            				<img src="../images/instructor-1.jpg" alt="">
        			  	</nav>
          			  	<article>
          			  		<h1>Name of a Instructor: </h1>
            				<p>Phone Number: </p>
            				<p>Email: </p>
            				<p>Description: </p>
            				<p>Country: </p>
          				</article>
        			  </div> -->
        			  
        		</div>
          	</form>
          </div>


          <button type="button" class="info" onclick="document.getElementById('admin_data').style.display='block'" name="upd">Update Information</button>
          <div id="admin_data" class="info-container">
            <!-- <span onclick="document.getElementById('admin_data').style.display='none'" class="admin-close-sign" title="Close Modal">&times;</span> -->
            <!-- <form class="modal-content-sign" action="" method="post">
              <div class="container-sign">
                <h1>Personal Details</h1>
                <hr>
                <label for="Fname"><b><b>First Name<b></label>
                <input type="text" name="Fname" placeholder="First Name" required>

                <label for="Lname"><b>Last Name<b></label>
                <input type="text" name="Lname" placeholder="Last Name" required>

                <label for="uname"><b>Username<b></label>
                <input type="text" name="uname" placeholder="Enter username" required>

                <label for="pnum"><b>Phone Number<b></label>
                <input type="text" name="pnum" placeholder="Enter your number" required>

                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <div class="clearfix-sign">
                  <button type="button" class="update" name="button">Update</button>
                </div>
              </div>
            </form> -->
          </div>

          <p><a href="../logout.php">Logout</a></p>
        </div>
	</div>



	<div class="slider">
		<div class="load">
		</div>
		<div class="content">
			<div class="principal">
				<form method=" ">
					<h1>For Furthur details about Instructor</h1>
					<p>Please enter the instructor's Id</p>
					<input type="text" class="search-field" id="instdetail1" placeholder="Please Enter Instructro's Id">
					<button class="search-btn instsearch" type="button"  name="instdetail">Search</button>
				</form>	
					
					<br><br><br>
					

				<form method=" ">
					<h1>For Furthur details about Student</h1>
					<p>Please enter the Student's Id</p>
					<input type="text" class="search-field" id="sdetail" placeholder="Please Enter Student's Id" name='fname'>
					<button class="search-btn stdsearch" type="button"  name="stddetail">Search</button>
				</form>
				
			</div>
			
		</div>


		<div id="instdetail" class="modaldet">
            <form class="modal-content animate" action="" method="post">
            	<div class="details-container">
            		<div class="close-container"><span onclick="document.getElementById('instdetail').style.display='none'" class="close" title="Close Modal">&times;</span>
            		</div>
            		<h1>Instructor details</h1>
        			<hr>
        	  		<div id="instructor-search"></div>
        	  	<!--	<div class='card-container'>
			   			   <nav class='nav'>
            				<img src='../images/instructor-1.jpg' >
        	  			</nav>
          	  			<article>
          	  				<h1>Name of a Instructor: </h1>
            				<p>Phone Number: </p>
            				<p>Email: </p>
            				<p>Description: </p>
            				<p>Country: </p>
          				</article>
        	  		</div>
        	  		<h2>Courses Offered</h2>
        	  		<hr>
        	  		<div class='card-container'>
			   			    <nav class='nav'>
            				<img src='../images/background_image13-1.jpg'>
        	  			</nav>
          	  			<article>
          	  				<h1>Course Topic: </h1>
            				<p>Category: </p>
            				<p>Start date: </p>
            				<p>Modules: </p>
          				</article>
          				<div class="gap"><hr></div>
        	  		</div>---->
        		</div>
          	</form>
        </div>


        <div id="stddetail" class="modaldet">
            <form class="modal-content animate" action="" method="post">
            	<div class="details-container">
            		<div class="close-container"><span onclick="document.getElementById('stddetail').style.display='none'" class="close" title="Close Modal">&times;</span>
            		</div>
            		<h1>Student details</h1>
        			<hr>
        	  		<div id="student-complete"></div>
        	  <!---	<div class='card-container'>
			   			<nav class='nav'>
            				<img src='../images/student-1.png'>
        	  			</nav>
          	  			<article>
          	  				<h1>Name of a Student: </h1>
            				<p>Phone Number: </p>
            				<p>Email: </p>
            				<p>Country: </p>
          				</article>
        	  		</div>
        	  		<h2>Courses Enrolled</h2>
        	  		<hr>
        	  		<div class='card-container'>
			   			<nav class='nav'>
            				<img src='../images/background_image13-1.jpg'>
        	  			</nav>
          	  			<article>
          	  				<h1>Course Topic: </h1>
            				<p>Instructor name: </p>
            				<p>Start date: </p>
            				<p>Modules: </p>
          				</article>
          				<div class='gap'><hr></div>
        	  		</div>---->
        		</div>
          	</form>
        </div>
	</div>



</div>


</body>
</html>