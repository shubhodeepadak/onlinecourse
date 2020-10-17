<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GetEducated - Anytime, Anywhere</title>
    <link rel="stylesheet" type="text/css" href="style/Home.css">
    <link rel="stylesheet" type="text/css" href="style/login.css">
    <link rel="stylesheet" type="text/css" href="style/signup.css">
    </head>
  <body>
    <div class="container">

      <div class="navbar">
        <div class="leftnav">
          <h1>GetEducated</h1>
        </div>

        <div class="rightnav">
          <ul>
            <li><a href="Home.html">Home</a></li>
            <li><a href="pages/Admin.php">Admin Login</a></li>
            <li><a href="pages/Instructor.php">Teach on GetEducated</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>

      <div class="bgcontainer">
        <div class="bgimage">
        </div>
        <div class="text">
          <h1>Start Learning and</h1>
          <div class="th1"><h1>Create your <span class="in">Future</span></h1></div>
          <p>Study any topic, anytime, anywhere Choose from hundreds of</p>
          <p>experts-led courses now</p>
          <h3>For Bussiness | Become an Instructor</h3>
          <h2>Creative and Experienced</h2>
          <h3>We provide one of the World's top online education plateform</h3>


          <button class="btn2" onclick="document.getElementById('id02').style.display='block'">Log In</button>
          <div id="id02" class="modal">
            <form class="modal-content animate" action="" method="post">
              <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="images/img_avatar.png" alt="Avatar" class="avatar">
              </div>
              <div class="containerlog">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <button class="logbtn" type="submit">Login</button>
                </div>
              <div class="containerlog" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
              </div>
            </form>
          </div>


          <button class="btn3" onclick="document.getElementById('id03').style.display='block'">Sing up</button>
          <div id="id03" class="modal-sign">
            <span onclick="document.getElementById('id03').style.display='none'" class="close-sign" title="Close Modal">&times;</span>
            <form class="modal-content-sign" action="">
              <div class="container-sign">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="Fname"><b><b>First Name<b></label>
                <input type="text" name="Fname" placeholder="First Name" required>

                <label for="Lname"><b>Last Name<b></label>
                <input type="text" name="Lname" placeholder="Last Name" required>

                <label for="uname"><b>Username<b></label>
                <input type="text" name="uname" placeholder="Enter username" required>

                <label for="pnum"><b>Phone Number<b></label>
                <input type="text" name="pnum" placeholder="Enter your number" required>

                <label for="city"><b>City<b></label>
                <input type="text" name="city" placeholder="Enter your city name" required>

                <label for="country"><b>Country<b></label>
                <input type="text" name="Country" placeholder="Enter your Country name" required>

                <label for="gender"><b>Gender<b></label>
                  <select class="gender" name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="others">Others</option>
                  </select>
                  <br><br><br>

                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix-sign">
                  <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn-sign">Cancel</button>
                  <button type="submit" class="signupbtn-sign">Sign Up</button>
                </div>
              </div>
            </form>
          </div>

        </div>

      </div>

      <div class="about" id="about">
        <h1>About</h1>

        <hr>

        <p>Education Management refers to the administration of the education system in which a group combines human and material resources <br> to supervise, plan, strategise, and implement structures to execute an education system. Education is the equipping of knowledge, skills, values, beliefs, habits, and attitudes with learning experiences.</p>
        <p>The main objective of this Online Education Management System is to develop an online information management system to store, <br> maintain, update and process data relating to the students, instructors and the courses. It will provide various informations <br>based on the user’s authority.</p>
        <p>GetEducated is a model which represents an Online learning Management System. It serves as a platform that allows instructors to <br>build online courses on topics of their choosing. Courses are offered across a breadth of categories, in technology.</p>
      </div>

      <div class="programs">
        <h1>Discover your perfect program in our schools</h1>
        <div class="column">
          <img src="images/artificial-1.jpg" alt="Artificial Intelligence">
          <img src="images/datascience-1.jpg" alt="Data Science">
          <img src="images/deeplearning-1.jpg" alt="Deep Learning">
          <img src="images/machine-1.png" alt="Machine Learning">
          <img src="images/programming-1.jpg" alt="Programing">
          <img src="images/blockchain-1.png" alt="blockchain">
          <img src="images/cyber-1.png" alt="Cyber Security">
          <img src="images/NLP-1.jpg" alt="Natural Language Processing">
        </div>
      </div>

      <div class="industry">
        <h1>Industry leading programs built and recongnized by top companies worldwide</h1>
        <div class="column">
          <img src="images/Google-2.png" alt="Google">
          <img src="images/IBM-2.png" alt="IBM">
          <img src="images/nvidia-2.png" alt="Nvidia">
          <img src="images/att-2.png" alt="ATT">
          <img src="images/aws-2.jpg" alt="AWS">
        </div>
      </div>


      <div class="instructors">
        <h1>Our Skilled Instructors</h1>
        <div class="column">
          <div class="card">
            <img src="images/t1-1.jpg" alt="John Purcell">
            <div class="inside">
              <h4> <b>John Purcell</b> </h4>
              <p>Professor</p>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="images/t2-1.jpg" alt="Darponia">
            <div class="inside">
              <h4> <b>Darponia</b> </h4>
              <p>Senior Lecturer</p>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="images/t5-1.jpg" alt="Rob Percival">
            <div class="inside">
              <h4> <b>Rob Percival</b> </h4>
              <p>Senior Lecturer</p>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="images/t6-1.jpg" alt="Austin">
            <div class="inside">
              <h4> <b>Austin</b> </h4>
              <p>Professor</p>
            </div>
          </div>
        </div>

      </div>


      <div class="objectives">
        <h1>Objectives</h1>
        <div class="inside">
          <ul>
            <li>Only Admin will have the complete authority to the information’s about all Instructors and Students, and also has the authority to remove anyone.</li>
            <li>System manages the records of every Instructor.</li>
            <li>System manages the records of every Student.</li>
            <li>It keeps the record of all the courses provided by the Instructor.</li>
            <li>Keeps record of the courses opted by the student.</li>
            <li>Allows the Instructor or the Student to update their personal informations.</li>
            <li>It also allows the Instructor and Student to delete their account permanently.</li>
          </ul>
        </div>
      </div>


      <div class="contact" id="contact">
        <h1>Contact us</h1>
        <div class="column">
          <div class="card">
            <img src="images/address-1.png" alt="Address">
            <div class="inside">
              <h2>Address</h2>
              <p>Allahabad, India</p>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="images/phone-1.png" alt="Phone">
            <div class="inside">
              <h2>Phone</h2>
              <p>(+91) 945 244 6637</p>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="images/mail-1.png" alt="Mail">
            <div class="inside">
              <h2>Mail</h2>
              <p>shubhodeepadak9@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
      <br>

      <div class="below-bar">
        <div class="inside">
          <h1>Online Learning Programs</h1>
          <div class="row">
            <h2>Top Online Courses</h2>
            <div class="column">
              <p>AI for everyone</p>
              <p>Introduction to TensorFlow</p>
              <p>Neural Networks and Deep Learning</p>
            </div>
            <div class="column">
              <p>Machine Learning with R</p>
              <p>Machine Learning with Python</p>
              <p>R Programing</p>
            </div>
            <div class="column">
              <p>Data Analysis with Python</p>
              <p>Google cloud Platform Fundamentals</p>
              <p>Speak English Professionally</p>
            </div>
          </div>

          <div class="row">
            <h2>Top Online Specialization</h2>
            <div class="column">
              <p>Deep Learning</p>
              <p>Python for Everybody</p>
              <p>Data Science</p>
            </div>
            <div class="column">
              <p>Applied Data Science with Python</p>
              <p>Bussiness Foundations</p>
              <p>Data Engineering on Google cloud Plateform</p>
            </div>
            <div class="column">
              <p>Advanced Machine Learning</p>
              <p>Mathematics for Machine Learning</p>
              <p>Digital Learning</p>
            </div>
          </div>

          <div class="row">
            <h2>Online Degree Programs</h2>
            <div class="column">
              <p>Master's in Data Science</p>
             <p>Bachelors degree in Computer Science</p>
            </div>
            <div class="column">
              <p>Master's in Machine Learning</p>
            </div>
            <div class="column">
              <p>Master's in Information Technology</p>
            </div>
          </div>
          <div class="row">
            <h3>Best Plateform to learn new courses</h3>
          </div>
        </div>
      </div>


      <div class="lastnav">
        <div class="inside">
          <p>&copy - 2019. All rights reserved | Designed by Shadow_Works. Developed by Shubhodeep Adak</p>
        </div>
      </div>

    </div>


  </body>
</html>
