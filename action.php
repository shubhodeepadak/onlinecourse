<?php
$con=mysqli_connect("localhost","root","",'education');

session_start();
//Admin----------

//instructor-signup
if (isset($_POST['instsign'])) {
  $fname=$_POST['Fname'];
  $lname=$_POST['Lname'];
  $uname=$_POST['uname'];
  $pnum=$_POST['pnum'];
  $desc=$_POST['desc'];
  $country=$_POST['country'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $psw=$_POST['psw'];
  $psw_rep=$_POST['psw-repeat'];
  $query="SELECT * FROM instructors WHERE username='$uname' AND email='$email'";
  $run=mysqli_query($con,$query);
  if(mysqli_num_rows($run) > 0){
      echo "username/email already exist";
  } else{
    if ($psw==$psw_rep) {
    $query="INSERT INTO `instructors` (`id`, `fname`, `lname`, `username`, `pno`, `description`, `country`, `gender`, `email`, `pass`)
    VALUES (NULL, '$fname', '$lname', '$uname', '$pnum', '$desc', '$country', '$gender', '$email', '$psw')";
    $run=mysqli_query($con,$query);
    $_SESSION['sid']=mysqli_insert_id($con);
    $_SESSION['fname']=$uname;
    header('location:instructorhome.php');
  }else {
    echo "Passwords does not match";
  }
 }
}



//instructor-login
if (isset($_POST['instlog'])) {
  $uname=$_POST['uname'];
  $psw=$_POST['psw'];
  $query="SELECT * FROM instructors WHERE username='$uname'AND pass='$psw'";
  $run=mysqli_query($con,$query);
  if (mysqli_num_rows($run)==1) {
      $row=mysqli_fetch_array($run);
      $_SESSION['sid']=$row['id'];
      $_SESSION['uname']=$row['username'];
      $_SESSION['fname']=$row['fname'];
    header('location:instructorhome.php');
  }
}


//Admin-display form
if (isset($_POST['admin_data'])) {
  $query="SELECT * FROM admin";
  $run=mysqli_query($con,$query);
  $row=mysqli_fetch_array($run);
  $fname=$row['fname'];
  $lname=$row['lname'];
  $uname=$row['username'];
  $pno=$row['pno'];
  $email=$row['email'];
  $psw=$row['password'];
  echo"<span onclick='document.getElementById('admin_data').style.display='none'' class='close-sign' title='Close Modal'><a href='adminhome.php'>&times;</a></span>
            <form class='modal-content-sign' action='' method='post'>
              <div class='container-sign'>
                <h1>Personal Details</h1>
                <hr>
                <label for='Fname'><b><b>First Name<b></label>
                <input type='text' name='Fname' class='fname' value='$fname'>

                <label for='Lname'><b>Last Name<b></label>
                <input type='text' name='Lname' class='lname' value='$lname'>

                <label for='uname'><b>Username<b></label>
                <input type='text' name='uname' class='uname' value='$uname'>

                <label for='pnum'><b>Phone Number<b></label>
                <input type='text' name='pno' class='pno' value='$pno'>

                <label for='email'><b>Email</b></label>
                <input type='email' name='email' class='email' value='$email'>

                <label for='psw'><b>Password</b></label>
                <input type='password' name='psw' class='psw' value='$psw'>

                <div class='clearfix-sign'>
                  <button type='button' class='update' name='button'>Update</button>
                </div>
              </div>
            </form>
          </div>";

}

//Admin-update information
if (isset($_POST['update'])) {
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $uname=$_POST['uname'];
  $pno=$_POST['pno'];
  $email=$_POST['email'];
  $psw=$_POST['psw'];
  $query="UPDATE admin SET fname='$fname',lname='$lname',username='$uname',pno='$pno',email='$email',password='$psw'";
  $run=mysqli_query($con,$query);
  if($run){
    echo " Update success";
  }
}



//students-display details
if (isset($_POST['student'])) {
  $query="SELECT * FROM students";
  $run=mysqli_query($con,$query);
  while ($row=mysqli_fetch_array($run)) {
    $fname=$row['fname'];
    $id=$row['id'];
    $lname=$row['lname'];
    $pno=$row['pno'];
    $email=$row['email'];
    $country=$row['country'];
    echo "<div class='card-container'>
                <nav class='nav'>
                  <img src='../images/student-2.png' alt=''>
                </nav>
                <article>
                  <h1>Name of a Student: $fname $lname</h1>
                  <p>Student id: $id</p>
                  <p>Phone Number: $pno</p>
                  <p>Email: $email</p>
                  <p>Country: $country</p>
                </article>
              </div>";
  }
}


//instructor-display details
if(isset($_POST['instructor'])){
  $query = "SELECT * FROM instructors";
  $run = mysqli_query($con,$query);
  while ($row=mysqli_fetch_array($run)) {
    $fname=$row['fname'];
    $id=$row['id'];
    $lname=$row['lname'];
    $pno=$row['pno'];
    $email=$row['email'];
    $desc=$row['description'];
    $country=$row['country'];
    echo "<div class='card-container'>
          <nav class='nav'>
            <img src='../images/instructor-1.jpg' alt=''>
          </nav>
          <article>
            <h1>Name of a Instructor : $fname $lname</h1>
            <p>Instructor id: $id</p>
            <p>Phone Number : $pno</p>
            <p>Email : $email</p>
            <p>Description : $desc</p>
            <p>Country : $country</p>
          </article>
        </div>";
      }
}

//Student-----------

//student-signup
if (isset($_POST['signup'])) {
  $fname=$_POST['Fname'];
  $lname=$_POST['Lname'];
  $uname=$_POST['uname'];
  $pnum=$_POST['pnum'];
  $country=$_POST['country'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $psw=$_POST['psw'];
  $psw_rep=$_POST['psw-repeat'];
  $query="SELECT * FROM students WHERE username='$uname' AND email='$email'";
  $run=mysqli_query($con,$query);
  if(mysqli_num_rows($run) > 0){
      echo "username/email already exist";
  } else{
    if ($psw==$psw_rep) {
    $query="INSERT INTO `students` (`id`, `fname`, `lname`, `username`, `pno`, `country`, `gender`, `email`, `pass`)
    VALUES (NULL, '$fname', '$lname', '$uname', '$pnum', '$country','$gender', '$email', '$psw')";
    $run=mysqli_query($con,$query);
    $_SESSION['id']=mysqli_insert_id($con);
    $_SESSION['fname']=$uname;
    header('location:pages/studenthome.php');
  }else {
    echo "Passwords does not match";
  }
 }
}



//student-login
if (isset($_POST['login'])) {
  $uname=$_POST['uname'];
  $psw=$_POST['psw'];
  $query="SELECT * FROM students WHERE username='$uname'AND pass='$psw'";
  $run=mysqli_query($con,$query);
  if (mysqli_num_rows($run)==1) {
      $row=mysqli_fetch_array($run);
      $_SESSION['id']=$row['id'];
      $_SESSION['uname']=$row['username'];
      $_SESSION['fname']=$row['fname'];
    header('location:pages/studenthome.php');
  }
}


//Student-Display form
if(isset($_POST['student_data'])){
  $id = $_SESSION['id'];
  $query="SELECT * FROM students WHERE id = $id";
  $run=mysqli_query($con,$query);
  $row=mysqli_fetch_array($run);
  $fname=$row['fname'];
  $lname=$row['lname'];
  $uname=$row['username'];
  $pno=$row['pno'];
  $country=$row['country'];
  $gender=$row['gender'];
  $email=$row['email'];
  $psw=$row['pass'];
  echo "<div class='form'>
    <h1>Update information</h1>
    <h3>Please update your personal information here</h3>
    <hr>
    <form class='update-form' action='' method='post'>
      <label for='Fname'><b><b>First Name<b></label>
      <input type='text' name='fname' class='fname' value='$fname'>

      <label for='Lname'><b>Last Name<b></label>
      <input type='text' name='lname' class='lname' value='$lname'>

      <label for='uname'><b>Username<b></label>
      <input type='text' name='uname' class='uname' value='$uname'>

      <label for='pnum'><b>Phone Number<b></label>
      <input type='text' name='pno' class='pno' value='$pno'>

      <label for='country'><b>Country<b></label>
      <input type='text' name='country' class='country' value='$country'>

      <label for='gender'><b>Gender<b></label>
        <select class='gender' name='gender'>
          <option value='$gender'>$gender</option>
          <option value='Male'>Male</option>
          <option value='Female'>Female</option>
          <option value='others'>Others</option>
        </select>
        <br><br>

      <label for='email'><b>Email<b></label>
      <input type='email' name='email' class='email' value='$email'>

      <label for='psw'><b>Password</b></label>
      <input type='password' name='psw' class='psw' value='$psw'>

      <div class='btn'>
        <button type='submit' class='updatebtn' name='updatebtn'>Update</button>
      </div>
    </form>
  </div>";
}


//provided course display
if(isset($_POST['displaycourses'])){
  $id=$_SESSION['sid'];
  $query = "SELECT * FROM courses WHERE inst_id = '$id'";
  $run = mysqli_query($con,$query);
  while($row=mysqli_fetch_array($run)){
    $cid = $row['cid'];
    $name=$row['name'];
    $cat=$row['categ'];
    $date=$row['date'];
    $mod1=$row['module1'];
    $mod2=$row['module2'];
    $mod3=$row['module3'];
    $mod4=$row['module4'];
    $mod5=$row['module5'];
    echo"<form class='update-form' action=''>
    <label for='name'>Name of a course : </label>
    <input id='name' type='text' name='name' class='name-$cid' value='$name'>

    <label for='category'>Category : </label>
    <select class='category-$cid' name='cat'>
      <option value='$cat'>$cat</option>
      <option value='Artificial'>Artificial Intelligence</option>
      <option value='datascience'>Data Science</option>
      <option value='DL'>Deep Learning</option>
      <option value='ML'>Machine Learning</option>
      <option value='NLP'>Natural Language Processing</option>
      <option value='cyber'>CyberSecurity</option>
      <option value='blockchain'>Blockchain</option>
      <option value='C'>Programing in C/C++</option>
      <option value='Java'>Programing in Java</option>
      <option value='javascript'>Programing in JavaScript</option>
      <option value='python'>Programing in Python</option>
      <option value='R'>Programing in R</option>
      <option value='webdev'>Web Development</option>
      <option value='app'>App Development</option>
      <option value='programing'>Introduction to programing</option>
      <option value='database'>Database management system</option>
    </select>
    <br><br>


    <label for='mod1'>Module 1 : </label>
    <input id='mod1' type='text' name='mod1' class='mod1-$cid' value='$mod1'>

    <label for='mod2'>Module 2 : </label>
    <input id='mod2' type='text' name='mod2' class='mod2-$cid' value='$mod2'>

    <label for='mod3'>Module 3 : </label>
    <input id='mod3' type='text' name='mod3' class='mod3-$cid' value='$mod3'>

    <label for='mod4'>Module 4 : </label>
    <input id='mod4' type='text' name='mod4' class='mod4-$cid' value='$mod4'>

    <label for='mod5'>Module 5 : </label>
    <input id='mod5' type='text' name='mod5' class='mod5-$cid' value='$mod5'>

    <div class='btn'>
      <button type='submit' class='updatebtn' id='courseupdate' cid='$cid' name='courseupdatebtn'>Update</button>
      <button type='button' class='delbtn1' id='coudel' cid='$cid' >Delete Course</button>
    </div>
    <div class='gap'>
    <hr>
    </div>
  </form>";
  }
}


//instructor offered courses- update
if (isset($_POST['courseupdate'])) {
    $cid=$_POST['cid'];
    $cname=$_POST['cname'];
    $cat=$_POST['cat'];
    // $date=$_POST['date'];
    $mod1=$_POST['mod1'];
    $mod2=$_POST['mod2'];
    $mod3=$_POST['mod3'];
    $mod4=$_POST['mod4'];
    $mod5=$_POST['mod5'];
    $id=$_SESSION['sid'];
    $sql="UPDATE courses SET name='$cname',categ='$cat',module1='$mod1',module2='$mod2',module3='$mod3',module4='$mod4',module5='$mod5'WHERE inst_id='$id'AND cid='$cid'";
    $run=mysqli_query($con,$sql);
    if ($run) {

      echo "Your course is updated";
    }

}


//instructor offered courses-delete
if (isset($_POST['coudel'])) {
  $cid=$_POST['cid'];
  $id=$_SESSION['sid'];
  $sql="DELETE FROM courses WHERE inst_id='$id'AND cid='$cid'";
  $run=mysqli_query($con,$sql);
  if ($run) {
    $sql="DELETE FROM enroll WHERE instid='$id'AND courseid='$cid'";
    $run=mysqli_query($con,$sql);
    if ($run) {
       echo "Your course has been deleted";
    }
  }
}


//instructor complete information display
if (isset($_POST['instsearch'])) {
  $sid=$_POST['instid'];
  $query = "SELECT * FROM instructors WHERE id='$sid'";
  $run = mysqli_query($con,$query);
  $row=mysqli_fetch_array($run);
    $fname=$row['fname'];
    $id=$row['id'];
    $lname=$row['lname'];
    $pno=$row['pno'];
    $email=$row['email'];
    $desc=$row['description'];
    $country=$row['country'];
    $fulname=$fname." ".$lname;
    echo "  <div class='card-container'>
                 <nav class='nav'>
                    <img src='../images/instructor-1.jpg' >
                  </nav>
                    <article>
                      <h1>Name of a Instructor: $fulname </h1>
                    <p>Phone Number: $pno </p>
                    <p>Email: $email </p>
                    <p>Description: $desc </p>
                    <p>Country: $country </p>
                  </article>
                </div>
                <h2>Courses Offered</h2>
                <hr>";
  $query1 = "SELECT * FROM courses WHERE inst_id = '$sid'";
  $run1 = mysqli_query($con,$query1);
  while($row=mysqli_fetch_array($run1)){
    $cid = $row['cid'];
    $name=$row['name'];
    $cat=$row['categ'];
    $date=$row['date'];
    $mod1=$row['module1'];
    $mod2=$row['module2'];
    $mod3=$row['module3'];
    $mod4=$row['module4'];
    $mod5=$row['module5'];
    $modules=$mod1.", ".$mod2.", ".$mod3.", ".$mod4.", ".$mod5;
    echo "<div class='card-container'>
                  <nav class='nav'>
                    <img src='../images/background_image13-1.jpg'>
                  </nav>
                    <article>
                      <h1>Course Topic:   $name</h1>
                    <p>Category: $cat</p>
                    <p>Start date: $date</p>
                    <p>Modules: $modules </p>
                  </article>
                  <div class='gap'><hr></div>
                </div>";
  }

}
 

//student complete information display 
if (isset($_POST['stdsearch'])) {
  $sid=$_POST['instid']; 
  $query="SELECT * FROM students WHERE id='$sid' ";
  $run=mysqli_query($con,$query);
  $row=mysqli_fetch_array($run);
    $fname=$row['fname'];
    $id=$row['id'];
    $lname=$row['lname'];
    $pno=$row['pno'];
    $email=$row['email'];
     $fulname=$fname." ".$lname;
    $country=$row['country'];
    echo "  <div class='card-container'>
              <nav class='nav'>
                    <img src='../images/student-1.png'>
                  </nav>
                    <article>
                      <h1>Name of a Student: $fulname </h1>
                    <p>Phone Number: $pno </p>
                    <p>Email: $email </p>
                    <p>Country: $country </p>
                  </article>
                </div>
                <h2>Courses Enrolled</h2>
                <hr>";
  $sql="SELECT * FROM enroll WHERE stdid='$sid'";
  $run=mysqli_query($con,$sql);
  while ($rows=mysqli_fetch_array($run)) {
     $instid=$rows['instid'];
     $cid=$rows['courseid'];
     $query1 = "SELECT * FROM instructors WHERE id='$instid'";
     $run1 = mysqli_query($con,$query1);
     $row=mysqli_fetch_array($run1);
       $fname=$row['fname'];
       $lname=$row['lname'];
       $fulname=$fname." ".$lname;
  $query2 = "SELECT * FROM courses WHERE cid = '$cid'";
  $run2 = mysqli_query($con,$query2);
  $row=mysqli_fetch_array($run2);
    $name=$row['name'];
    $date=$row['date'];
    $mod1=$row['module1'];
    $mod2=$row['module2'];
    $mod3=$row['module3'];
    $mod4=$row['module4'];
    $mod5=$row['module5'];
    $modules=$mod1.", ".$mod2.", ".$mod3.", ".$mod4.", ".$mod5;
    echo "<div class='card-container'>
              <nav class='nav'>
                    <img src='../images/background_image13-1.jpg'>
                  </nav>
                    <article>
                      <h1>Course Topic: $name </h1>
                    <p>Instructor name: $fulname </p>
                    <p>Start date: $date </p>
                    <p>Modules: $modules </p>
                  </article>
                  <div class='gap'><hr></div>
                </div>";
  
  }
 } 

//Instructors-display details
if(isset($_POST['instructor_data'])){
  $id=$_SESSION['sid'];
  $query="SELECT * FROM instructors WHERE id = $id";
  $run=mysqli_query($con,$query);
  $row=mysqli_fetch_array($run);
  $fname=$row['fname'];
  $lname=$row['lname'];
  $uname=$row['username'];
  $pno=$row['pno'];
  $country=$row['country'];
  $gender=$row['gender'];
  $email=$row['email'];
  $desc=$row['description'];
  $psw=$row['pass'];
  echo "<div class='form' id='update'>
          <h1>Update information</h1>
          <h3>Please update your personal information here</h3>
          <hr>
          <form class='update-form' action='' method='post'>
            <label for='fname'><b><b>First Name<b></label>
            <input type='text' name='fname' class='fname' value='$fname'>

            <label for='lname'><b>Last Name<b></label>
            <input type='text' name='lname' class='lname' value='$lname'>

            <label for='uname'><b>Username<b></label>
            <input type='text' name='uname' class='uname' value='$uname'>

            <label for='pnum'><b>Phone Number<b></label>
            <input type='text' name='pno' class='pno' value='$pno'>

            <label for='country'><b>Country<b></label>
            <input type='text' name='country' class='country' value='$country'>

            <label for='gender'><b>Gender<b></label>
              <select class='gender' name='gender'>
                <option value='$gender'>$gender</option>
                <option value='Male'>Male</option>
                <option value='Female'>Female</option>
                <option value='others'>Others</option>
              </select>
              <br><br><br>

            <label for='email'><b>Email<b></label>
            <input type='email' name='email' class='email' value='$email'>

            <label for='desc'><b>Description<b></label>
            <input type='text' name='desc' class='desc' value='$desc'>

            <label for='psw'><b>Password</b></label>
            <input type='password' name='psw' class='psw' value='$psw'>

            <div class='btn'>
              <button type='submit' class='updatebtn' name='instupdatebtn'>Update</button>
            </div>
          </form>
        </div>";
}

//Instructor-update form
if(isset($_POST['instupdatebtn'])){
  $id = $_SESSION['sid'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $uname = $_POST['uname'];
  $pno = $_POST['pno'];
  $country = $_POST['country'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $desc=$_POST['desc'];
  $psw = $_POST['psw'];
  $query = "UPDATE instructors SET fname='$fname', lname='$lname',username='$uname', country='$country', email='$email',description='$desc',pno='$pno',gender='$gender',pass='$psw' WHERE id=$id";
  $run = mysqli_query($con,$query);
  if($run){
    echo "Update successfull";
  }
}


//Student-update form
if(isset($_POST['updatebtn'])){
  $id = $_SESSION['id'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $uname = $_POST['uname'];
  $pno = $_POST['pno'];
  $country = $_POST['country'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $psw = $_POST['psw'];
  $query = "UPDATE students SET fname='$fname', lname='$lname',username='$uname',pno='$pno', country='$country', gender='$gender', email='$email',pass='$psw' WHERE id=$id";
  $run = mysqli_query($con,$query);
  if($run){
    echo "update success";
  }
}

//Delete student account
if (isset($_POST['delbtn'])) {
  $sid=$_SESSION['id'];
  $sql="DELETE FROM students WHERE id='$sid' ";
  $run=mysqli_query($con,$sql);
     unset($_SESSION['id']);
     unset($_SESSION['uname']);
     header('location:../index.php');
}

//Delete instructor account
if(isset($_POST['delbtn'])){
  $sid=$_SESSION['sid'];
  $sql="DELETE FROM instructors WHERE id='$sid' ";
  $run=mysqli_query($con,$sql);
     unset($_SESSION['sid']);
     unset($_SESSION['fname']);
     header('location:../index.php');
}

//Courses-enrolled
if(isset($_POST['ENROLLED'])){
  $id = $_SESSION['id'];
  $query = "SELECT DISTINCT c.cid, c.name, c.date, c.module1, c.module2, c.module3, c.module4, c.module5, i.fname, i.lname FROM courses c, instructors i, students s, enroll e  WHERE e.stdid = $id and e.instid = i.id and e.courseid = c.cid";
  $run = mysqli_query($con,$query);
  while ($row = mysqli_fetch_array($run)) {
    $id=$row['cid'];
    $name = $row['name'];
    $date = $row['date'];
    $mod1 = $row['module1'];
    $mod2 = $row['module2'];
    $mod3 = $row['module3'];
    $mod4 = $row['module4'];
    $mod5 = $row['module5'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    echo "<div class='card-container'>
      <nav class='nav'>
        <img src='../images/background_image4-2.jpg' alt='Course'>
      </nav>
      <article>
        <h1>Course Topic : $name</h1>
        <p>Instructor : $fname $lname</p>
        <p>Start Date : $date</p>
        <p>Modules : $mod1, $mod2, $mod3, $mod4, $mod5</p>
        <button type='button' class='delcourse' cid='$id' name='button'>Delete course</button>
      </article>
    </div>";
  }
}

//Enrolled students details
if(isset($_POST['enrolledstudentsdetails'])){
  $id = $_SESSION['id'];
  $query = "SELECT DISTINCT c.name, s.fname, s.lname, s.pno, s.country, s.email FROM courses c, instructors i, students s, enroll e WHERE e.instid = '$id' and e.stdid = s.id and e.courseid = c.cid";
  $run = mysqli_query($con, $query);
  while ($row = mysqli_fetch_array($run)){
    $name = $row['name'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $pno = $row['pno'];
    $country = $row['country'];
    $email = $row['email'];
    echo "<div class='card-container'>
          <nav class='nav'>
            <img src='../images/student-1.png' alt=''>
          </nav>
          <article>
            <h1>Name of a student : $fname $lname</h1>
            <p>Course : $name</p>
            <p>Phone Number : $pno</p>
            <p>Email : $email</p>
            <p>Country : $country</p>
          </article>
        </div>";
  }
}



//delete enrolled course
if (isset($_POST['delcor'])) {
  $sid=$_SESSION['id'];
  $cid=$_POST['cid'];
  $sql="DELETE FROM enroll WHERE stdid='$sid'AND courseid='$cid'";
  $run=mysqli_query($con,$sql);
  if ($run) {
     echo "your course has been deleted ";
  }
}


//insert enrolled course
if (isset($_POST['enroll'])) {
  $sid=$_SESSION['id'];
  $iid=$_POST['iid'];
  $cid=$_POST['cid'];
  $sql="SELECT * FROM enroll WHERE stdid='$sid'AND instid='$iid'AND courseid='$cid'";
  $run=mysqli_query($con,$sql);
  if (mysqli_num_rows($run)>0) {
     echo "You have already enrolled this course before";
  }else{
    $sql="INSERT INTO `enroll` (`id`, `stdid`, `instid`, `courseid`) VALUES (NULL, '$sid', '$iid', '$cid')";
    $run=mysqli_query($con,$sql);
    if ($run) {
      echo "Course enrolled ";
    }
  }
}

///
if (isset($_POST['conbtn'])) {
  $sid=$_SESSION['sid'];
  $cname=$_POST['name'];
  $cat=$_POST['cat'];
  $date=$_POST['date'];
  $mod1=$_POST['mod1'];
  $mod2=$_POST['mod2'];
  $mod3=$_POST['mod3'];
  $mod4=$_POST['mod4'];
  $mod5=$_POST['mod5'];
  $sql="INSERT INTO `courses` (`cid`, `inst_id`, `name`, `categ`, `date`, `module1`, `module2`, `module3`, `module4`, `module5`) VALUES (NULL, '$sid', '$cname', '$cat', '$date', '$mod1', '$mod2', '$mod3', '$mod4', '$mod5')";
  $run=mysqli_query($con,$sql);
  if($run){
    echo "Course has been created";
  }
}


// display provided courses





//Courses display
//AI
if(isset($_POST['AI'])){
  $query = "SELECT i.id, c.cid, c.name, c.date, c.module1, c.module2, c.module3, c.module4, c.module5, i.fname, i.lname FROM courses c, instructors i  WHERE categ = 'Artificial' and i.id = c.inst_id";
  $run = mysqli_query($con,$query);
  while ($row = mysqli_fetch_array($run)) {
    $iid=$row['id'];
    $cid=$row['cid'];
    $name = $row['name'];
    $date = $row['date'];
    $mod1 = $row['module1'];
    $mod2 = $row['module2'];
    $mod3 = $row['module3'];
    $mod4 = $row['module4'];
    $mod5 = $row['module5'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    echo " <div class='card-container'>
      <nav class='nav'>
        <img src='../images/ai-2.jpg' alt='Artificial Intelligence'>
      </nav>
      <article>
        <h1>Course Topic : $name</h1>
        <p>Instructor : $fname $lname<p>
        <p>Start Date : $date</p>
        <p>Modules : $mod1, $mod2, $mod3, $mod4, $mod5</p>
        <button type='button' class='enroll' iid='$iid' cid='$cid' name='button'>Enroll now</button>
      </article>
      <hr>
    </div>";
  }
}

//android
if(isset($_POST['ANDROID'])){
  $query = "SELECT i.id, c.cid,c.name, c.date, c.module1, c.module2, c.module3, c.module4, c.module5, i.fname, i.lname FROM courses c, instructors i  WHERE categ = 'app' and i.id = c.inst_id";
  $run = mysqli_query($con,$query);
  while ($row = mysqli_fetch_array($run)) {
    $iid=$row['id'];
    $cid=$row['cid'];
    $name = $row['name'];
    $date = $row['date'];
    $mod1 = $row['module1'];
    $mod2 = $row['module2'];
    $mod3 = $row['module3'];
    $mod4 = $row['module4'];
    $mod5 = $row['module5'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    echo "<div class='card-container'>
      <nav class='nav'>
        <img src='../images/and-2.jpg' alt='Android Development'>
      </nav>
      <article>
        <h1>Course Topic : $name</h1>
        <p>Instructor : $fname $lname</p>
        <p>Start Date : $date</p>
        <p>Modules : $mod1, $mod2, $mod3, $mod4, $mod5</p>
        <button type='button' class='enroll' iid='$iid' cid='$cid' name='button'>Enroll now</button>
      </article>
      <hr>
    </div>";
  }
}

//Blockchain
if(isset($_POST['BLOCKCHAIN'])){
  $query = "SELECT i.id, c.cid,c.name, c.date, c.module1, c.module2, c.module3, c.module4, c.module5, i.fname, i.lname FROM courses c, instructors i  WHERE categ = 'blockchain' and i.id = c.inst_id";
  $run = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($run)){
    $iid=$row['id'];
    $cid=$row['cid'];
    $name = $row['name'];
    $date = $row['date'];
    $mod1 = $row['module1'];
    $mod2 = $row['module2'];
    $mod3 = $row['module3'];
    $mod4 = $row['module4'];
    $mod5 = $row['module5'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    echo "<div class='card-container'>
      <nav class='nav'>
        <img src='../images/blockchaindev-2.jpg' alt='Blockchain'>
      </nav>
      <article>
        <h1>Course Topic : $name</h1>
        <p>Instructor : $fname $lname</p>
        <p>Start Date : $date</p>
        <p>Modules : $mod1, $mod2, $mod3, $mod4, $mod5</p>
        <button type='button' class='enroll' iid='$iid' cid='$cid' name='button'>Enroll now</button>
      </article>
      <hr>
    </div>";
  }
}

//C/C++
if(isset($_POST['CPROGRAM'])){
  $query = "SELECT i.id, c.cid,c.name, c.date, c.module1, c.module2, c.module3, c.module4, c.module5, i.fname, i.lname FROM courses c, instructors i  WHERE categ = 'C' and i.id = c.inst_id";
  $run = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($run)){
    $iid=$row['id'];
    $cid=$row['cid'];
    $name = $row['name'];
    $date = $row['date'];
    $mod1 = $row['module1'];
    $mod2 = $row['module2'];
    $mod3 = $row['module3'];
    $mod4 = $row['module4'];
    $mod5 = $row['module5'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    echo "<div class='card-container'>
      <nav class='nav'>
        <img src='../images/CC-2.jpg' alt='C/C++''>
      </nav>
      <article>
        <h1>Course Topic : $name</h1>
        <p>Instructor : $fname $lname</p>
        <p>Start Date : $date</p>
        <p>Modules : $mod1, $mod2, $mod3, $mod4, $mod5</p>
        <button type='button' class='enroll' iid='$iid' cid='$cid' name='button'>Enroll now</button>
      </article>
      <hr>
    </div>";
  }
}

//Cyber
if(isset($_POST['CYBER'])){
  $query = "SELECT i.id, c.cid,c.name, c.date, c.module1, c.module2, c.module3, c.module4, c.module5, i.fname, i.lname FROM courses c, instructors i  WHERE categ = 'cyber' and i.id = c.inst_id";
  $run = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($run)){
    $iid=$row['id'];
    $cid=$row['cid'];
    $name = $row['name'];
    $date = $row['date'];
    $mod1 = $row['module1'];
    $mod2 = $row['module2'];
    $mod3 = $row['module3'];
    $mod4 = $row['module4'];
    $mod5 = $row['module5'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    echo "<div class='card-container'>
      <nav class='nav'>
        <img src='../images/cybers-2.jpg' alt='Cyber Security'>
      </nav>
      <article>
        <h1>Course Topic : $name</h1>
        <p>Instructor : $fname $lname</p>
        <p>Start Date : $date</p>
        <p>Modules : $mod1, $mod2, $mod3, $mod4, $mod5</p>
        <button type='button' class='enroll' iid='$iid' cid='$cid' name='button'>Enroll now</button>
      </article>
      <hr>
    </div>";
  }
}

//Database
if(isset($_POST['DATA'])){
  $query = "SELECT i.id, c.cid, c.name, c.date, c.module1, c.module2, c.module3, c.module4, c.module5, i.fname, i.lname FROM courses c, instructors i  WHERE categ = 'database' and i.id = c.inst_id";
  $run = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($run)){
    $iid=$row['id'];
    $cid=$row['cid'];
    $name = $row['name'];
    $date = $row['date'];
    $mod1 = $row['module1'];
    $mod2 = $row['module2'];
    $mod3 = $row['module3'];
    $mod4 = $row['module4'];
    $mod5 = $row['module5'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    echo "<div class='card-container'>
      <nav class='nav'>
        <img src='../images/data-2.jpg' alt='DBMS'>
      </nav>
      <article>
        <h1>Course Topic : $name</h1>
        <p>Instructor : $fname $lname</p>
        <p>Start Date : $date</p>
        <p>Modules : $mod1, $mod2, $mod3, $mod4, $mod5</p>
        <button type='button' class='enroll' iid='$iid' cid='$cid' name='button'>Enroll now</button>
      </article>
      <hr>
    </div>";
  }
}

//DataScience
if(isset($_POST['DATASCIENCE'])){
  $query = "SELECT i.id, c.cid, c.name, c.date, c.module1, c.module2, c.module3, c.module4, c.module5, i.fname, i.lname FROM courses c, instructors i  WHERE categ = 'datascience' and i.id = c.inst_id";
  $run = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($run)){
    $iid=$row['id'];
    $cid=$row['cid'];
    $name = $row['name'];
    $date = $row['date'];
    $mod1 = $row['module1'];
    $mod2 = $row['module2'];
    $mod3 = $row['module3'];
    $mod4 = $row['module4'];
    $mod5 = $row['module5'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    echo "<div class='card-container'>
      <nav class='nav'>
        <img src='../images/datasci-2.jpg' alt='Data Science'>
      </nav>
      <article>
        <h1>Course Topic : $name</h1>
        <p>Instructor : $fname $lname</p>
        <p>Start Date : $date</p>
        <p>Modules : $mod1, $mod2, $mod3, $mod4, $mod5</p>
        <button type='button' class='enroll' iid='$iid' cid='$cid' name='button'>Enroll now</button>
      </article>
      <hr>
    </div>";
  }
}

//DeepLearning
if(isset($_POST['DEEPLEARNING'])){
  $query = "SELECT i.id, c.cid, c.name, c.date, c.module1, c.module2, c.module3, c.module4, c.module5, i.fname, i.lname FROM courses c, instructors i  WHERE categ = 'DL' and i.id = c.inst_id";
  $run = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($run)){
    $iid=$row['id'];
    $cid=$row['cid'];
    $name = $row['name'];
    $date = $row['date'];
    $mod1 = $row['module1'];
    $mod2 = $row['module2'];
    $mod3 = $row['module3'];
    $mod4 = $row['module4'];
    $mod5 = $row['module5'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    echo "<div class='card-container'>
      <nav class='nav'>
        <img src='../images/deep-2.jpg' alt='Deep Learning'>
      </nav>
      <article>
        <h1>Course Topic : $name</h1>
        <p>Instructor : $fname $lname</p>
        <p>Start Date : $date</p>
        <p>Modules : $mod1, $mod2, $mod3, $mod4, $mod5</p>
        <button type='button' class='enroll' iid='$iid' cid='$cid' name='button'>Enroll now</button>
      </article>
      <hr>
    </div>";
  }
}

//JAVA
if(isset($_POST['JAVA'])){
  $query = "SELECT i.id, c.cid, c.name, c.date, c.module1, c.module2, c.module3, c.module4, c.module5, i.fname, i.lname FROM courses c, instructors i  WHERE categ = 'Java' and i.id = c.inst_id";
  $run = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($run)){
    $iid=$row['id'];
    $cid=$row['cid'];
    $name = $row['name'];
    $date = $row['date'];
    $mod1 = $row['module1'];
    $mod2 = $row['module2'];
    $mod3 = $row['module3'];
    $mod4 = $row['module4'];
    $mod5 = $row['module5'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    echo "<div class='card-container'>
      <nav class='nav'>
        <img src='../images/javain-2.jpg' alt='Java'>
      </nav>
      <article>
        <h1>Course Topic : $name</h1>
        <p>Instructor : $fname $lname</p>
        <p>Start Date : $date</p>
        <p>Modules : $mod1, $mod2, $mod3, $mod4, $mod5</p>
        <button type='button' class='enroll' iid='$iid' cid='$cid' name='button'>Enroll now</button>
      </article>
      <hr>
    </div>";
  }
}

//JavaScript
if(isset($_POST['JAVASCRIPT'])){
  $query = "SELECT i.id, c.cid, c.name, c.date, c.module1, c.module2, c.module3, c.module4, c.module5, i.fname, i.lname FROM courses c, instructors i  WHERE categ = 'javascript' and i.id = c.inst_id";
  $run = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($run)){
    $iid=$row['id'];
    $cid=$row['cid'];
    $name = $row['name'];
    $date = $row['date'];
    $mod1 = $row['module1'];
    $mod2 = $row['module2'];
    $mod3 = $row['module3'];
    $mod4 = $row['module4'];
    $mod5 = $row['module5'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    echo "<div class='card-container'>
      <nav class='nav'>
        <img src='../images/js-2.jpg' alt='JavaScript'>
      </nav>
      <article>
        <h1>Course Topic : $name</h1>
        <p>Instructor : $fname $lname</p>
        <p>Start Date : $date</p>
        <p>Modules : $mod1, $mod2, $mod3, $mod4, $mod5</p>
        <button type='button' class='enroll' iid='$iid' cid='$cid' name='button'>Enroll now</button>
      </article>
      <hr>
    </div>";
  }
}

//MachineLearning
if(isset($_POST['ML'])){
  $query = "SELECT i.id, c.cid, c.name, c.date, c.module1, c.module2, c.module3, c.module4, c.module5, i.fname, i.lname FROM courses c, instructors i  WHERE categ = 'ML' and i.id = c.inst_id";
  $run = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($run)){
    $iid=$row['id'];
    $cid=$row['cid'];
    $name = $row['name'];
    $date = $row['date'];
    $mod1 = $row['module1'];
    $mod2 = $row['module2'];
    $mod3 = $row['module3'];
    $mod4 = $row['module4'];
    $mod5 = $row['module5'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    echo "<div class='card-container'>
      <nav class='nav'>
        <img src='../images/ml-2.jpg' alt='Machine Learning'>
      </nav>
      <article>
        <h1>Course Topic : $name</h1>
        <p>Instructor : $fname $lname</p>
        <p>Start Date : $date</p>
        <p>Modules : $mod1, $mod2, $mod3, $mod4, $mod5</p>
        <button type='button' class='enroll' iid='$iid' cid='$cid' name='button'>Enroll now</button>
      </article>
      <hr>
    </div>";
  }
}

//Natural-Language-Processing
if(isset($_POST['NATURALLP'])){
  $query = "SELECT i.id, c.cid, c.name, c.date, c.module1, c.module2, c.module3, c.module4, c.module5, i.fname, i.lname FROM courses c, instructors i  WHERE categ = 'NLP' and i.id = c.inst_id";
  $run = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($run)){
    $iid=$row['id'];
    $cid=$row['cid'];
    $name = $row['name'];
    $date = $row['date'];
    $mod1 = $row['module1'];
    $mod2 = $row['module2'];
    $mod3 = $row['module3'];
    $mod4 = $row['module4'];
    $mod5 = $row['module5'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    echo "<div class='card-container'>
      <nav class='nav'>
        <img src='../images/nlpp-2.jpg' alt='NLP'>
      </nav>
      <article>
        <h1>Course Topic : $name</h1>
        <p>Instructor : $fname $lname</p>
        <p>Start Date : $date</p>
        <p>Modules : $mod1, $mod2, $mod3, $mod4, $mod5</p>
        <button type='button' class='enroll' iid='$iid' cid='$cid' name='button'>Enroll now</button>
      </article>
      <hr>
    </div>";
  }
}

//Programing
if(isset($_POST['PROGRAMING'])){
  $query = "SELECT i.id, c.cid, c.name, c.date, c.module1, c.module2, c.module3, c.module4, c.module5, i.fname, i.lname FROM courses c, instructors i  WHERE categ = 'PROGRAMING' and i.id = c.inst_id";
  $run = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($run)){
    $iid=$row['id'];
    $cid=$row['cid'];
    $name = $row['name'];
    $date = $row['date'];
    $mod1 = $row['module1'];
    $mod2 = $row['module2'];
    $mod3 = $row['module3'];
    $mod4 = $row['module4'];
    $mod5 = $row['module5'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    echo "<div class='card-container'>
      <nav class='nav'>
        <img src='../images/prog-2.jpg' alt='Programing'>
      </nav>
      <article>
        <h1>Course Topic : $name</h1>
        <p>Instructor : $fname $lname</p>
        <p>Start Date : $date</p>
        <p>Modules : $mod1, $mod2, $mod3, $mod4, $mod5</p>
        <button type='button' class='enroll' iid='$iid' cid='$cid' name='button'>Enroll now</button>
      </article>
      <hr>
    </div>";
  }
}

//Python
if(isset($_POST['PYTHON'])){
  $query = "SELECT i.id, c.cid, c.name, c.date, c.module1, c.module2, c.module3, c.module4, c.module5, i.fname, i.lname FROM courses c, instructors i  WHERE categ = 'python' and i.id = c.inst_id";
  $run = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($run)){
    $iid=$row['id'];
    $cid=$row['cid'];
    $name = $row['name'];
    $date = $row['date'];
    $mod1 = $row['module1'];
    $mod2 = $row['module2'];
    $mod3 = $row['module3'];
    $mod4 = $row['module4'];
    $mod5 = $row['module5'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    echo "<div class='card-container'>
      <nav class='nav'>
        <img src='../images/py-2.jpg' alt='Python'>
      </nav>
      <article>
        <h1>Course Topic : $name</h1>
        <p>Instructor : $fname $lname</p>
        <p>Start Date : $date</p>
        <p>Modules : $mod1, $mod2, $mod3, $mod4, $mod5</p>
        <button type='button' class='enroll' iid='$iid' cid='$cid' name='button'>Enroll now</button>
      </article>
      <hr>
    </div>";
  }
}

//R
if(isset($_POST['RPROGRAM'])){
  $query = "SELECT i.id, c.cid, c.name, c.date, c.module1, c.module2, c.module3, c.module4, c.module5, i.fname, i.lname FROM courses c, instructors i  WHERE categ = 'R' and i.id = c.inst_id";
  $run = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($run)){
    $iid=$row['id'];
    $cid=$row['cid'];
    $name = $row['name'];
    $date = $row['date'];
    $mod1 = $row['module1'];
    $mod2 = $row['module2'];
    $mod3 = $row['module3'];
    $mod4 = $row['module4'];
    $mod5 = $row['module5'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    echo "<div class='card-container'>
      <nav class='nav'>
        <img src='../images/ri-2.jpg' alt='R'>
      </nav>
      <article>
        <h1>Course Topic : $name</h1>
        <p>Instructor : $fname $lname</p>
        <p>Start Date : $date</p>
        <p>Modules: $mod1, $mod2, $mod3, $mod4, $mod5</p>
        <button type='button' class='enroll' iid='$iid' cid='$cid' name='button'>Enroll now</button>
      </article>
      <hr>
    </div>";
  }
}

//Web-Development
if(isset($_POST['WEB'])){
  $query = "SELECT i.id, c.cid, c.name, c.date, c.module1, c.module2, c.module3, c.module4, c.module5, i.fname, i.lname FROM courses c, instructors i  WHERE categ = 'webdev' and i.id = c.inst_id";
  $run = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($run)){
    $iid=$row['id'];
    $cid=$row['cid'];
    $name = $row['name'];
    $date = $row['date'];
    $mod1 = $row['module1'];
    $mod2 = $row['module2'];
    $mod3 = $row['module3'];
    $mod4 = $row['module4'];
    $mod5 = $row['module5'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    echo "<div class='card-container'>
      <nav class='nav'>
        <img src='../images/webi-2.jpg' alt='Web Development'>
      </nav>
      <article>
        <h1>Course Topic : $name</h1>
        <p>Instructor : $fname $lname</p>
        <p>Start Date : $date</p>
        <p>Modules : $mod1, $mod2, $mod3, $mod4, $mod5</p>
        <button type='button' class='enroll' iid='$iid' cid='$cid' name='button'>Enroll now</button>
      </article>
      <hr>
    </div>";
  }
}

 ?>
