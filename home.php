<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/home_style.css">
  <link rel="stylesheet" href="css/main_style.css">


  <title>U Healthly</title>
</head>

<body>
  <!-- NavBar Section Starts -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <nav class="navbar navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="home.php">
            <img src="img/logo.jpeg" alt="" width="30" height="24" class="d-inline-block align-text-top">
            <span class="text-warning">U Healthly</span>
          </a>
        </div>
      </nav>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="about_us.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contact_us.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="hospital.php">Hospital</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="blood_bank.php">Blood Bank</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="map.php">Map</a>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Medicine
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="emergency_ambulance.php">Emergency Ambulance</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="buy_medicines.php">Buy Medicine's</a></li>
            </ul>
          </li>
        </ul>
        <div class="btn-group" id="loginButton" <?php if ($user_data) { echo 'style="display:none;"'; } ?>>
          <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Login / Sign Up
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" target="_blank" href="login.php">Patient Login</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" target="_blank" href="doctor_login.php">Doctor Login</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" target="_blank" href="laboratory_login.php">Laboratory Login</a></li>
          </ul>
        </div>
        <div class="btn btn-danger m-2" id="logoutButton" <?php if (!$user_data) { echo 'style="display:none;"'; } ?>>
          <a href="user_profile.php" class="text-white" style="text-decoration:none">My Profile</a>          
        </div>
        <div class="btn btn-danger" id="logoutButton" <?php if (!$user_data) { echo 'style="display:none;"'; } ?>>
          <a href="logout.php" class="text-white" style="text-decoration:none">Logout</a>          
        </div>
      </div>
    </div>
  </nav>
  <!-- NavBar Section Ends -->


  <!-- Carousel Section Starts -->
  <div id="carouselExampleCaptions" class="carousel slide m-3" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" 
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/0.png" class="d-block w-100" alt="...">
        <!-- <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Lorem ipsum dolor sit amet.</p>
        </div> -->
      </div>
      <div class="carousel-item">
        <img src="img/1.jpg" class="d-block w-100" alt="...">
        <!-- <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet.</p>
        </div> -->
      </div>
      <div class="carousel-item">
        <img src="img/2.jpg" class="d-block w-100" alt="...">
        <!-- <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Lorem ipsum dolor sit amet.</p>
        </div> -->
      </div>
      <div class="carousel-item">
        <img src="img/3.jpg" class="d-block w-100" alt="...">
        <!-- <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Lorem ipsum dolor sit amet.</p>
        </div> -->
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Carousel Section Ends -->


  <!-- Service Section Starts -->
  <section id="services" class="text-center bg-light p-3 m-3">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="intro">
            <h6>Our Features</h6>
            <h1>What We Do?</h1>
            <p class="mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, ad soluta repellendus
              reiciendis cum ipsum totam pariatur quasi quos voluptatem repellat quo iusto saepe placeat aspernatur
              aperiam vero modi odit.</p>
          </div>
        </div>
      </div>
      <div class="row g-2">
        <div class="col-lg-5 col-md-6 border border-dark mx-auto m-3">
          <div class="service m-2 p-3">
            <img src="img/laboratory-test-icon.png" alt="">
            <h5>Laboratory Tests</h5>
            <p>Allow you to book the specified test you need that is prescribe by doctor and have your sample collected
              from the comfort for your home in just a small procedure.</p>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 border border-dark mx-auto m-3">
          <div class="service m-2 p-3">
            <img src="img/doctor_cons.jpg" alt="">
            <h5>Doctor Consultation</h5>
            <p>Talk to best general physician and experience adept doctor advice on board in short waiting periods it is
              affordable and easy to use we give you free consultation in 10 days (if needed).</p>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 border border-dark mx-auto m-3">
          <div class="service m-2 p-3">
            <img src="img/buy_med.jpg" alt="">
            <h5>Buy Medicines</h5>
            <p>Find your needed medicine easily. We also provide fast delivery. Once you purchase your medicine it will
              delivered medicine in maximum 48 hours we resource our products only from licensed retail pharmacies.</p>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 border border-dark mx-auto m-3">
          <div class="service m-2 p-3">
            <img src="img/ambulance_serv.jpg" alt="">
            <h5>Ambulance Services</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta exercitationem dolores amet aut ipsam
              dolorem a ratione eum sequi. Illo illum sit quidem dignissimos ipsam. Molestias eveniet cumque maxime
              dolor.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Service Section Ends -->


  <!-- Specialist Area Starts -->
  <section class="specialist-area section-padding bg-secondary text-white p-2 m-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-top text-center">
            <h2>Our specialish</h2>
            <p>Green above he cattle god saw day multiply under fill in the cattle fowl a all, living, tree word link
              available in the service for subdue fruit.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6 border border-primary mx-auto">
          <div class="single-doctor mb-4 mb-lg-0">
            <div class="doctor-img">
              <img src="img/doctor1.jpeg" alt="" class="img-fluid p-4">
            </div>
            <div class="content-area">
              <div class="doctor-name text-center">
                <h3>Dr. Gunjun</h3>
                <h6>Fileds</h6>
              </div>
              <div class="doctor-text text-center">
                <p>If you are looking at blank cassettes on the web, you may be very confused at the.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 border border-primary mx-auto">
          <div class="single-doctor mb-4 mb-lg-0">
            <div class="doctor-img">
              <img src="img/doctor2.jpeg" alt="" class="img-fluid p-4">
            </div>
            <div class="content-area">
              <div class="doctor-name text-center">
                <h3>Dr. Radha</h3>
                <h6>Fileds</h6>
              </div>
              <div class="doctor-text text-center">
                <p>If you are looking at blank cassettes on the web, you may be very confused at the.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 border border-primary mx-auto">
          <div class="single-doctor mb-4 mb-sm-0">
            <div class="doctor-img">
              <img src="img/doctor3.jpeg" alt="" class="img-fluid p-4">
            </div>
            <div class="content-area">
              <div class="doctor-name text-center">
                <h3>Dr. Ravi</h3>
                <h6>Fileds</h6>
              </div>
              <div class="doctor-text text-center">
                <p>If you are looking at blank cassettes on the web, you may be very confused at the.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Specialist Area Ends -->


  <!-- Footer Area Starts -->
  <footer class=" bg-black text-warning p-3">
    <div class="footer-top text-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h4 class="h4"><strong>U Healthly</strong><span class="dot">.</span></h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate, iusto.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom text-center">
      <p class="mb-0">Copyright © 2023. All rights Reserved</p>
    </div>
  </footer>
  <!-- Footer Area Ends -->








  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>

</body>

</html>