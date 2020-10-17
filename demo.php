if(isset($_POST['student_data'])) {
  $query = "SELECT * FROM Students";
  $run = mysqli_query($con,$query);
  $row = mysqli_fetch_array($run);
  $fname = $row['fname'];
  $lname = $row['lname'];
  $uname = $row['username'];
  $pno = $row['pno'];
  $gender = $row['gender'];
  $email = $row['email'];
  $pass = $row['pass'];
  echo" <h1>Update information</h1>
  <h3>Please update your personal information here</h3>
  <hr>
  <h3>You cannot change your registered email and Country</h3>
  <form class='update-form' action='' method='post'>
    <label for='Fname'><b><b>First Name<b></label>
    <input type='text' name='Fname' class='fname' value='$fname'>

    <label for='Lname'><b>Last Name<b></label>
    <input type='text' name='Lname' class='lname' value='$lname'>

    <label for='uname'><b>Username<b></label>
    <input type='text' name='uname' class='uname' value='$uname'>

    <label for='pnum'><b>Phone Number<b></label>
    <input type='text' name='pnum' class='pno' value='$pno'>

    <label for='gender'><b>Gender<b></label>
      <select class='gender' name='gender' value='$gender'>
        <option value='Male'>Male</option>
        <option value='Female'>Female</option>
        <option value='others'>Others</option>
      </select>
      <br><br>

    <label for='psw'><b>Password</b></label>
    <input type='password' name='psw' class='psw' value='$pass'>

    <div class='btn'>
      <button type='button' class='cancelbtn' name='cancelbtn'>Cancel</button>
      <button type='submit' class='updatebtn' name='updatebtn'>Update</button>
    </div>
  </form>";
}
