<?php

include 'Connect_Database_PHP.php';
if (isset($_POST['signin'])) {
    $sql = mysqli_query(
        $connect_database,
        "SELECT * FROM signup WHERE Email='"
            . $_POST["login_email"] . "' AND
    Password='" . $_POST["login_password"] . "'    "
    );

    $num = mysqli_num_rows($sql);

    if ($num > 0) {
        $row = mysqli_fetch_array($sql);
        header('Location: HomePage.html');
?>

    <?php exit();
    } else {
    ?>

        <font color="red"><b>
                <script>
                    alert("Username and Id not match. Try again..!! ");
                    window.location.replace('Login_Signup_Page.html');
                </script>
            </b>
        </font>
<?php
    }
}
?>