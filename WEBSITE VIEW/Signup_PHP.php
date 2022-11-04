<?php

include 'Connect_database_PHP.php';

if (isset($_POST['sign_up'])) {
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
    $insertquery = "SELECT * FROM blogosphere.signup WHERE Email='$email'";
    $res = mysqli_query($connect_database, $insertquery);

    if (mysqli_num_rows($res) > 0) {
?>
        <script>
            alert("Email already exist");
            window.location.replace('Login_Signup_Page.html');
        </script>
        
<?php
    } else {
        $query = mysqli_query($connect_database, "insert into blogosphere.signup(Name,Email,Password) values('$name','$email','$password')");
        header('Location: HomePage.html');
    }
}
