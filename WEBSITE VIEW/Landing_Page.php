<!-- BLOGOSPHERE -->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BLOGOSPHRE</title>
<!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<!-- CSS for animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- Out main CSS -->
  <link rel="stylesheet" href="HomePage_CSS.css">
<!-- CSS for Slider -->
  <link rel="stylesheet" href="Slider_CSS.css">



</head>

<body>
<!-- This is a navigation bar of our website -->
  <nav>
    <div class="row">
      <div class="col-1"><img src="BLOGOSPHERE _LOGO.png" height="62" width="62">
      </div>

      <div class="col-11">
        <div class="navbar navbar-expand-lg bg-light ">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav  mb-3 mb-lg-0" style="font-size: 20px;">
                <li class="nav-item mx-2">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="Login_Signup_Page.html">About</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="Login_Signup_Page.html">Contact-Us</a>
                </li>
                <li class="nav-item1 dropdown">
                  <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categories
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Food</a></li>
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
              <button type="submit"> <a class="nav-link" href="Login_Signup_Page.html" target="_self">
                  Log-in/Sign-up</a></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </nav>

 <!-- This is Slider og our website -->
    <div class="Bologo-slider">
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slide 1 -->
          <div class="swiper-slide">
            <div class="swiper-image">
              <div class="image"><img src="SLIDER_IMG_1.jpg" alt="" style=" width: 100%;
                height: 85%;" 
                ></div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="swiper-slide">
            <div class="swiper-image">
              <div class="image"><img src="SLIDER_IMG_2.jpg" alt="" style=" width: 100%;
                height: 85%;"></div>
            </div>
          </div>
          <!-- Slide 3 -->
          <div class="swiper-slide">
            <div class="swiper-image">
              <div class="image"><img src="SLIDER_IMG_3.jpg" alt="" style=" width: 100%;
                height: 85%;"></div>
            </div>
          </div>
        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>


  


<!-- This is main content -->
  <div class="content">
    <div class="row mb-2 mx-4 my-5">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Food</strong>
            <h3 class="mb-0">Featured post</h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
              lead-in to
              additional content.</p>
            <a href="Login_Signup_Page.html" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="https://source.unsplash.com/random/?food" class="bd-placeholder-img" width="200" height="250"
              class="img-fluid" alt="">
           
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Nature</strong>
            <h3 class="mb-0">Post title</h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
              additional content.</p>
            <a href="Login_Signup_Page.html" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="https://source.unsplash.com/random/?nature" class="bd-placeholder-img" width="200" height="250"
              class="img-fluid" alt="">

           

          </div>
        </div>
      </div>
    </div>
    <div class="row mb-2 mx-4 my-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Travel</strong>
            <h3 class="mb-0">Featured post</h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
              lead-in to
              additional content.</p>
            <a href="Login_Signup_Page.html" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="https://source.unsplash.com/random/?travel" class="bd-placeholder-img" width="200" height="250"
              class="img-fluid" alt="">

            

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Fashion</strong>
            <h3 class="mb-0">Post title</h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
              additional content.</p>
            <a href="Login_Signup_Page.html" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="https://source.unsplash.com/random/?fashion" class="bd-placeholder-img" width="200" height="250"
              class="img-fluid" alt="">

          
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-2 mx-4 my-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Business</strong>
            <h3 class="mb-0">Featured post</h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
              lead-in to
              additional content.</p>
            <a href="Login_Signup_Page.html" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="https://source.unsplash.com/random/?business" class="bd-placeholder-img" width="200" height="250"
              class="img-fluid" alt="">

          
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Lifestyle</strong>
            <h3 class="mb-0">Post title</h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
              additional content.</p>
            <a href="Login_Signup_Page.html" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="https://source.unsplash.com/random/?lifestyle" class="bd-placeholder-img" width="200" height="250"
              class="img-fluid" alt="">

          </div>
        </div>
      </div>
    </div>


    <div class="row mb-2 mx-4 my-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Technology</strong>
            <h3 class="mb-0">Featured post</h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
              lead-in to
              additional content.</p>
            <a href="Login_Signup_Page.html" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="https://source.unsplash.com/random/?technology" class="bd-placeholder-img" width="200"
              height="250" class="img-fluid" alt="">

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Health</strong>
            <h3 class="mb-0">Post title</h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
              additional content.</p>
            <a href="Login_Signup_Page.html" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="https://source.unsplash.com/random/?health" class="bd-placeholder-img" width="200" height="250"
              class="img-fluid" alt="">

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <footer>
    <div class="content">
        <div class="top">
            <div class="logo-details">
                <span class="logo_name"> <img src="BLOGOSPHERE .png" height="75px"> BLOGOSPHERE </span>
            </div>

        </div>
        <div class="link-boxes">
            <ul class="box">
                <li class="link_name" id="foot1">Links</li>
                <li><a href="Landing_Page.html">Home</a></li>
                <li><a href="Login_Signup_Page.html">About Us</a></li>
                <li><a href="Login_Signup_Page.html">Contact Us</a></li>

            </ul>
            <ul class="box">
                <li class="link_name" id="foot2">Categories</li>
                <li><a href="#">Food</a></li>
                <li><a href="#">Travel</a></li>
                <li><a href="#">Health</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Lifestyle</a></li>


            </ul>
            <ul class="box">
                <li class="link_name" id="foot3">Legal Info</li>
                <li><a href="#">Licence</a></li>
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="#">Privacy Policies</a></li>

            </ul>
            <ul class="box">
                <li class="link_name" id="foot4">Contact</li>
                <li><a target="on_blank" href="tel:+919079680135">+91 9876543210</a></li>
                <li><a target="on_blank" href="mailto:'connectpicoindia@gmail.com'">
                        put_our_email_here@gmail.com</a></li>
            </ul>
        </div>
    </div>

    <hr style="border-color: white ;">
    <div id="copyright">
        <h1 id="copyright1"><p>
          Created with <i class="fa fa-heart"></i> by BLOGOSPHERE
          - Click to know about us
          <a target="_blank" href="">here</a>.
        </p></h1>
    </div>
</footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="Slider_JS.js"></script>
</body>

</html>