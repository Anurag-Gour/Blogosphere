<?php

include 'Connect_database_PHP.php';

if (isset($_POST['blog_submit'])) {

    $title = $_POST['blog_title'];
    $content = $_POST['blog_content'];
    $addblog = "SELECT * FROM recent WHERE Title='$title'";
    $res = mysqli_query($connect_database, $addblog);
    $query = mysqli_query($connect_database, "insert into blogosphere.recent(Title,Content) values('$title','$content')");

    if ($query) {
        header('Location: HomePage.html');
    }
}
