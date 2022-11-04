<?php

include 'C:\Users\DEEP KHOKHAR\Desktop\GitHub\Blogosphere\BACKENED\connectDatabase.php';

$sql = "SELECT Title, Content FROM recent ORDER BY id DESC LIMIT 6";
$result = $connect_database->query($sql);
?>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User-Homepage</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Our main CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- css for animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
  <nav>
    <div class="row">
      <div class="col-1"><img src="BLOGOSPHERE .png" height="62" width="62">
      </div>

      <div class="col-11">
        <div class="navbar navbar-expand-lg bg-light ">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav  mb-3 mb-lg-0" style="font-size: 20px;">
                <li class="nav-item mx-2">
                  <a class="nav-link active" aria-current="page" href="UserHome.html">Home</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="contact.html">Contact-Us</a>
                </li>
                <li class="nav-item1 dropdown">
                  <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categories
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="show_recent.php">Recent Blogs</a></li>
                    <li><a class="dropdown-item" href="#">Nature</a></li>
                    <li><a class="dropdown-item" href="#">Fashion</a></li>
                    <li><a class="dropdown-item" href="#">Travel</a></li>
                    <li><a class="dropdown-item" href="#">Business</a></li>
                    <li><a class="dropdown-item" href="#">Lifestyle</a></li>
                    <li><a class="dropdown-item" href="#">Technology</a></li>
                    <li><a class="dropdown-item" href="#">Health</a></li>
                    <li>

                  </ul>
                </li>
              </ul>
            </div>
            <form class="d-flex mx-4" role="search">
              <button type="submit"> <a class="nav-link" href="AddBlog.html">
                  Add-Blog</a></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </nav>
</body>

</html>
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "";
    // Started Changing Huge Changes
?>
    <!-- BLOGOSPHERE -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>User-Homepage</title>
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Our main CSS -->
      <link rel="stylesheet" href="style.css">
      <!-- css for animation -->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

      <style>
        .col {
          width: 100%;
          font-family: cursive;
          font-size: 24px;
        }
      </style>
    </head>

    <body>


      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm mx-0 my-1">
              <img src="BS.png" alt="img" width="100%" height="225">
              <!-- <svg class="bd-placeholder-img card-img-top " width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

              <div class="card-body">
                <p class="card-text">
                <details >
                  <summary style="font-weight: bold;">

                    <?php echo $row["Title"]; ?>

                  </summary><br> <?php echo  $row["Content"]; ?>
                </details>
                <div class="d-flex justify-content-between align-items-center">

                </div>
              </div>
            </div>



          </div>
        </div>


        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://use.fontawesome.com/0206006232.js"></script>
        <script src="like.js"></script>
    </body>

    </html>
<?php
  }
} else {
  echo "Unable to fetch data from database ....   Try Again ....";
}
?>