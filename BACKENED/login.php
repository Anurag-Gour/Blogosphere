<?php
    
include 'C:\Users\DEEP KHOKHAR\Desktop\GitHub\Blogosphere\BACKENED\connectDatabase.php';
if(isset($_POST['signin'])) {
    $sql = mysqli_query($connect_database,
    "SELECT * FROM signup WHERE Email='"
    . $_POST["login_email"] . "' AND
    Password='" . $_POST["login_password"] . "'    ");
    
    $num = mysqli_num_rows($sql);
    
    if($num > 0) {
        $row = mysqli_fetch_array($sql);
        header('Location: UserHome.html');
        ?>
        
<?php         exit();
    }
    else {
?>
<hr>
<font color="red"><b>
<script>
        
        alert("Username and Id not match. Try again..!! ");
    </script>
    </b>
</font>
<hr>
 
<?php
}
}
?>