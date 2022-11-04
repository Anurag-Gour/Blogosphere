<?php

include 'C:\Users\DEEP KHOKHAR\Desktop\GitHub\Blogosphere\BACKENED\connectDatabase.php';

if (isset($_POST['blog_submit'])) {

    $title = $_POST['blog_title'];
    $content = $_POST['blog_content'];
    $addblog = "SELECT * FROM recent WHERE Title='$title'";
    $res = mysqli_query($connect_database, $addblog);
    $query = mysqli_query($connect_database, "insert into blogosphere.recent(Title,Content) values('$title','$content')");

    if ($query) {
        header('Location: UserHome.html');
    }
}
