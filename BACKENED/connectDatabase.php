<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'blogosphere';

$connect_database = mysqli_connect($server, $username, $password, $db);

if ($connect_database) {
    //echo "Connection Successful";

?>
<?php
} else {
    die("Unable to connect" . mysqli_connect_error());
}
?>