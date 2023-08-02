<!-- <?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?> -->

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/main_style.css">
  <link rel="stylesheet" href="css/plugins.css">



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

  <div class="container col-12 text-center bg-light" style="margin-top: 100px;">
    <div class="intro">
      <h1>AB-</h1>
    </div>
    <table class="table m-3 table-dark">
        <thead>
          <tr>
            <th scope="col">Sr. No.</th>
            <th scope="col">Hospital Name</th>
            <th scope="col">Quantity(In Unit)</th>
          </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Distt. H.M.G. Hospital Haridwar</td>
            <td>0</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Swami Bhumanand Blood centre Haridwar</td>
            <td>0</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Sainik School Roorkee</td>
            <td>0</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Blood Bank District Hospital Almora</td>
            <td>0</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Govind Singh Mahara Blood Bank Ranikhet</td>
            <td>0</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>SPS Blood Bank Rishikesh</td>
            <td>1</td>
          </tr>
        </tbody>
      </table>
  </div>


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













  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>

</body>

</html>