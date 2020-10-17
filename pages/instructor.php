<?php
include('../action.php')
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GetEducated - Anytime, Anywhere</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="../style/instructor.css">
    <link rel="stylesheet" href="../style/Instructorlogin.css">
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
          <p><a href="../index.php">Home</a></p>
        </div>
      </div>


      <div class="bgimage">
          <div class="text">
            <div class="inside">
              <h1>Make a Global Impact</h1>
              <p>Create an online coure and earn money by teaching <br>people around the world</p>
            </div>

            <button class="btn1" onclick="document.getElementById('id02').style.display='block'">Log In</button>
            <div id="id02" class="modal">
              <form class="modal-content animate" action="" method="post">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <img src="../images/img_avatar.png" alt="Avatar" class="avatar">
                </div>
                <div class="containerlog">
                  <label for="uname"><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="uname" required>
                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>
                  <button class="logbtn" type="submit" name="instlog">Login</button>
                  </div>
                <div class="containerlog" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                  <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
              </form>
            </div>


            <button class="btn2" onclick="document.getElementById('id03').style.display='block'">Sing up</button>
            <div id="id03" class="modal-sign">
              <span onclick="document.getElementById('id03').style.display='none'" class="close-sign" title="Close Modal">&times;</span>
              <form class="modal-content-sign" action="" method="post">
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

                  <label for="desc"><b>Description<b></label>
                    <input type="text" name="desc" placeholder="describe about yourself" required>

                  <label for="country"><b>Country<b></label>
                    <input type="text" name="country" placeholder="Enter your Country name" required>

                  <label for="gender"><b>Gender<b></label>
                    <select class="gender" name="gender">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="others">Others</option>
                    </select>
                    <br><br><br>

                  <label for="email"><b>Email</b></label>
                  <input type="text" placeholder="Enter Email" name="email" required>

                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>

                  <label for="psw-repeat"><b>Repeat Password</b></label>
                  <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                  <p>By creating an account you agree to our <a href="terms.php"  target="_blank" style="color:dodgerblue">Terms of Service and Honor Code</a> and you acknowledge that GetEducated and each Member process your personal data in accordance with the <a href="privacy.php" target="_blank" style="color:dodgerblue">Privacy Policy</a>.</p>

                  <div class="clearfix-sign">
                    <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn-sign">Cancel</button>
                    <button type="submit" class="signupbtn-sign" name="instsign">Sign Up</button>
                  </div>
                </div>
              </form>
            </div>

          </div>
      </div>


      <div class="text-card1">
        <h1>Discover your Potential</h1>
        <hr>
      </div>


      <div class="card-container1">
        <nav class="nav1">
          <h1>Inspire Students</h1>
          <p>Help people learn new skills, advance their</p>
          <p>careers, and explore their hobbies by sharing</p>
          <p>your knowledge.</p>
        </nav>
        <article class="article1">
          <h1>Join our community</h1>
          <p>Take advantage of our active community of</p>
          <p>instructors to help your through your </p>
          <p>course creation process.</p>
        </article>
      </div>


      <div class="text-card2">
        <h1>Envision your success</h1>
        <hr>
      </div>

      <div class="card-container2">
        <nav class="nav2">
          <h1>Plan your course</h1>
          <h3 class="gaps">Get Organized</h3>
          <p class="gaps">You start with your passion and knowledge. Then choose a <br>topic and plan your lectures in Google Docs, Microsoft <br>Excel, or your favorite notebook.</p>
          <p class="gaps">You get to teach the way you want — even create courses in <br>multiple languages and inspire more students.</p>
          <h3 class="gaps">How we help you</h3>
          <p class="gaps">GetEducated offers free courses on how to build your own <br>course, complete with worksheets and real-world examples.<br>Plus, our instructor dashboard and curriculum pages help <br>keep you on track.</p>
        </nav>
        <article class="article2">
          <img src="../images/background_image4-1.jpg" alt="">
        </article>
      </div>

      <hr class="hr">
      <div class="card-container3">
        <nav class="nav3">
          <h1>Record your video</h1>
          <h3 class="gaps">Lights, camera, action</h3>
          <p class="gaps">Got a smartphone or a DSLR? Add a microphone and you’re <br> ready to film your first course from your home or wherever <br> you happen to be.</p>
          <p class="gaps">Camera shy? No Worries. Use screencasting software, like <br>Camtasia, to screencast demos.</p>
          <h3 class="gaps">How we help you</h3>
          <p class="gaps">Our support team is available to help and offers free review <br> of your videos. And our online instructor community is here <br>to offer advice and inspiration.</p>
        </nav>
        <article class="article3">
          <img src="../images/rec-1.jpg" alt="">
        </article>
      </div>


      <hr class="hr">
      <div class="card-container4">
        <nav class="nav4">
          <h1>Build your community</h1>
          <h3 class="gaps">Reach out</h3>
          <p class="gaps">Create quizzes, exercises, and assignments to build <br>interactivity. Write welcome messages for your students <br>and answer their questions. Because GetEducated students don’t <br>just watch, they do.</p>
          <h3 class="gaps">How we help you</h3>
          <p class="gaps">We provide all the tools for messaging, Q&As, course <br> announcements, and quizzes, all in one one place.</p>
        </nav>
        <article class="article4">
          <img src="../images/background_image19-1.jpg" alt="">
        </article>
      </div>


      <div class="text-card3">
        <h1>Expand your Reach</h1>
        <hr>
        <h2>We've changed lives by connecting instructors with students around the world</h2>
      </div>


      <div class="instructors">
        <div class="column">
          <div class="card">
            <img src="../images/jose-1.jpg" alt="">
          </div>
          <div class="inside" id="in1">
            <h2><b>Jose Portilla</b></h2>
            <h4>Data Scientist</h4>
            <p>GetEducated has given me the opportunity to reach a global audience for my classes that wouldn’t have been possible otherwise.</p>
            <br><br><br>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="../images/t2-1.jpg" alt="">
          </div>
          <div class="inside" id="in2">
            <h2><b>Darponia</b></h2>
            <h4>Senior Lecturer</h4>
            <p>Launching my first course on GetEducated allowed me to quit my full-time job and start my own company. I went from working 60+ hour weeks to setting my own hours and schedule.</p>
            <br>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="../images/t5-1.jpg" alt="">
          </div>
          <div class="inside" id="in3">
            <h2><b>Rob Percival</b></h2>
            <h4>Machine Learning Engineer</h4>
            <p>There's no greater success on the GetEducated marketplace than hearing that you've helped a student achieve their goals. Teaching on GetEducated has brought me new relationships from wonderful and insatiably curious students.</p>
          </div>
        </div>
      </div>


      <div class="gap">

      </div>
      <div class="lowerbgimage">
        <div class="lowertext">
          <h1>We're here to help</h1>
          <hr>
          <p>Our Instructor Support Team is here for you 24/7 to help you through your</p>
          <p>course creation needs. Use our Teaching Center, a resource center to help you</p>
          <p>through the process. Join Studio U and get peer-to-peer support from our</p>
          <p>engaged instructor community. This community group is always on, always</p>
          <p>there, and always helpful.</p>
        </div>
      </div>


      <div class="lasttext">
        <h1>Become an Instructor today</h1>
        <h3>Join the world's largest online learning Marketplace</h3>
        <hr>
      </div>


      <div class="below-bar">
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
        <br><br><br><br><br><br><br>
      </div>
      <hr>

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
