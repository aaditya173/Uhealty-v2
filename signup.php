<?php 
session_start();

	include("connection.php");
	include("functions.php");

    $user_data = check_login($con);


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
        $fullName = $_POST['fullName'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];

		if(!empty($fullName) && !empty($username) && !empty($password) && !empty($confirm_password) && !is_numeric($username))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into patitent_data (user_id, fullName, username, password, confirm_password) values ('$user_id','$fullName','$username','$password','$confirm_password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">


   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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


    <!-- <h2 class="text-center text-warning">Patitent Login</h2> -->
    <div class="wrapper">
        <div class="title-text">
            <div class="title signup">Patitent Signup</div>
        </div>
        <div class="form-container">
            <div class="form-inner">
                
                <form method="post" class="signup">
                    <div class="field">
                        <!--input type="text" placeholder="Full Name" required-->
                        <input type="text" name="fullName" id="speechToText" placeholder="Full Name"">
                    </div>
                    <div class="field">
                        <input type="text" name="username" placeholder="Email Address" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="field">
                        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Signup">
                    </div>
                    <div class="signup-link">Already a member? <a href="login.php">Login Now</a></div>
                </form>
            </div>
        </div>
    </div>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>

   

</body>

</html>