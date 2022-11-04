if ($res) {
    if()
    ?>
    <script>
      alert("Successfully Sign Up");
    </script>
  <?php
  } else {
  ?>
    <script>
      alert("Sign Up Failed");
    </script>
<?php
  }
}
}
?>







<?php

include 'C:\Users\DEEP KHOKHAR\Desktop\GitHub\Blogosphere\BACKENED\connectDatabase.php';

if (isset($_POST['sign_up'])) {
  $name = $_POST['user_name'];
  $email = $_POST['user_email'];
  $password = $_POST['user_password'];

  $insertquery = "insert into blogosphere.signup_user(Name,Email,Password) values('$name','$email','$password')";

 try {
   $res = mysqli_query($connect_database, $insertquery);
 } 
 catch (Exception $e) {
  ?>
      <script>
        alert("Email already exist");
      </script>
  <?php
 }
}

  ?>





<?php
    
include 'C:\xampp\htdocs\Blogosphere\Backened_Database\connectDatabase.php';
 
if(isset($_POST['signin'])) {
    $sql = mysqli_query($connect_database,
    "SELECT * FROM signup_user WHERE Email='"
    . $_POST["login_email"] . "' AND
    Password='" . $_POST["login_password"] . "'    ");
   
    $num = mysqli_num_rows($sql);
   
    if($num > 0) {
        $row = mysqli_fetch_array($sql);
        header("check.php");
        exit();
    }
    else {
?>
<hr>
<font color="red"><b>
        <h3>Sorry Invalid Username and Password<br>
            Please Enter Correct Credentials</br></h3>
    </b>
</font>
<hr>
 
<?php
      }
}
?>