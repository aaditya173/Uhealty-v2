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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
                <div class="btn-group" id="loginButton" <?php if ($user_data) { echo 'style="display:none;"' ; } ?>>
                    <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
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
                        <li><a class="dropdown-item" target="_blank" href="laboratory_login.php">Laboratory Login</a>
                        </li>
                    </ul>
                </div>
                <div class="btn btn-danger m-2" id="logoutButton" <?php if (!$user_data) { echo 'style="display:none;"'
                    ; } ?>>
                    <a href="user_profile.php" class="text-white" style="text-decoration:none">My Profile</a>
                </div>
                <div class="btn btn-danger" id="logoutButton" <?php if (!$user_data) { echo 'style="display:none;"' ; }
                    ?>>
                    <a href="logout.php" class="text-white" style="text-decoration:none">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- NavBar Section Ends -->


    <section class="health_section layout_padding">
        <div class="health_carousel-container">
            <h2 class="text-uppercase text-center">Medicines</h2>
            <div class="carousel-wrap layout_padding2">
                <div class="owl-carousel owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item active mx-auto" style="width: 420.673px; margin-right: 10px;">
                                <div class="item">
                                    <div class="box">
                                        <div class="btn_container">
                                            <a href="#">Buy Now</a>
                                        </div>
                                        <div class="img-box">
                                            <img src="img/montair-lc.jpg" alt="Montair-LC">
                                        </div>
                                        <div class="detail-box">
                                            <div class="text">
                                                <h6>Montair-LC</h6>
                                                <h6 class="price"><span>₹</span>299</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active mx-auto" style="width: 420.673px; margin-right: 10px;">
                                <div class="item">
                                    <div class="box">
                                        <div class="btn_container">
                                            <a href="#">Buy Now</a>
                                        </div>
                                        <div class="img-box">
                                            <img src="img/augmentin_625.jpg" alt="Augmentin 625">
                                        </div>
                                        <div class="detail-box">
                                            <div class="text">
                                                <h6>Augmentin 625</h6>
                                                <h6 class="price"><span>₹</span>199</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active mx-auto" style="width: 420.673px; margin-right: 10px;">
                                <div class="item">
                                    <div class="box">
                                        <div class="btn_container">
                                            <a href="#">Buy Now</a>
                                        </div>
                                        <div class="img-box">
                                            <img src="img/azithral_500_tablet.jpeg" alt="Azithral 500 Tablet">
                                        </div>
                                        <div class="detail-box">
                                            <div class="text">
                                                <h6>Azithral 500 Tablet</h6>
                                                <h6 class="price"><span>₹</span>105</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active mx-auto" style="width: 420.673px; margin-right: 10px;">
                                <div class="item">
                                    <div class="box">
                                        <div class="btn_container">
                                            <a href="#">Buy Now</a>
                                        </div>
                                        <div class="img-box">
                                            <img src="img/allegra_120mg_tablet.jpeg" alt="website template image">
                                        </div>
                                        <div class="detail-box">
                                            <div class="text">
                                                <h6>Allegra 120mg Tablet</h6>
                                                <h6 class="price"><span>₹</span>199</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active mx-auto" style="width: 420.673px; margin-right: 10px;">
                                <div class="item">
                                    <div class="box">
                                        <div class="btn_container">
                                            <a href="#">Buy Now</a>
                                        </div>
                                        <div class="img-box">
                                            <img src="img/avil_25_tablet.jpeg" alt="website template image">
                                        </div>
                                        <div class="detail-box">
                                            <div class="text">
                                                <h6>Avil 25 Tablet</h6>
                                                <h6 class="price"><span>₹</span>10</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active mx-auto" style="width: 420.673px; margin-right: 10px;">
                                <div class="item">
                                    <div class="box">
                                        <div class="btn_container">
                                            <a href="#">Buy Now</a>
                                        </div>
                                        <div class="img-box">
                                            <img src="img/azee_500_tablet.jpeg" alt="Azee 500 Tablet">
                                        </div>
                                        <div class="detail-box">
                                            <div class="text">
                                                <h6>Azee 500 Tablet</h6>
                                                <h6 class="price"><span>₹</span>99</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active mx-auto" style="width: 420.673px; margin-right: 10px;">
                                <div class="item">
                                    <div class="box">
                                        <div class="btn_container">
                                            <a href="#">Buy Now</a>
                                        </div>
                                        <div class="img-box">
                                            <img src="img/brufen_400_tablet.jpeg" alt="Brufen 400 Tablet">
                                        </div>
                                        <div class="detail-box">
                                            <div class="text">
                                                <h6>Brufen 400 Tablet</h6>
                                                <h6 class="price"><span>₹</span>15</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active mx-auto" style="width: 420.673px; margin-right: 10px;">
                                <div class="item">
                                    <div class="box">
                                        <div class="btn_container">
                                            <a href="#">Buy Now</a>
                                        </div>
                                        <div class="img-box">
                                            <img src="img/etoshine_90_tablet.jpeg" alt="Etoshine 90 Tablet">
                                        </div>
                                        <div class="detail-box">
                                            <div class="text">
                                                <h6>Etoshine 90 Tablet</h6>
                                                <h6 class="price"><span>₹</span>109</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active mx-auto" style="width: 420.673px; margin-right: 10px;">
                                <div class="item">
                                    <div class="box">
                                        <div class="btn_container">
                                            <a href="#">Buy Now</a>
                                        </div>
                                        <div class="img-box">
                                            <img src="img/inderal_10_tablet.jpg" alt="Inderal 10 Tablet">
                                        </div>
                                        <div class="detail-box">
                                            <div class="text">
                                                <h6>Inderal 10 Tablet</h6>
                                                <h6 class="price"><span>₹</span>15</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active mx-auto" style="width: 420.673px; margin-right: 10px;">
                                <div class="item">
                                    <div class="box">
                                        <div class="btn_container">
                                            <a href="#">Buy Now</a>
                                        </div>
                                        <div class="img-box">
                                            <img src="img/krimson_35_tablet.jpeg" alt="Krimson 35 Tablet">
                                        </div>
                                        <div class="detail-box">
                                            <div class="text">
                                                <h6>Krimson 35 Tablet</h6>
                                                <h6 class="price"><span>₹</span>389</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active mx-auto" style="width: 420.673px; margin-right: 10px;">
                                <div class="item">
                                    <div class="box">
                                        <div class="btn_container">
                                            <a href="#">Buy Now</a>
                                        </div>
                                        <div class="img-box">
                                            <img src="img/oxra_10mg_tablet.jpeg" alt="Oxra 10mg Tablet">
                                        </div>
                                        <div class="detail-box">
                                            <div class="text">
                                                <h6>Oxra 10mg Tablet</h6>
                                                <h6 class="price"><span>₹</span>129</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active mx-auto" style="width: 420.673px; margin-right: 10px;">
                                <div class="item">
                                    <div class="box">
                                        <div class="btn_container">
                                            <a href="#">Buy Now</a>
                                        </div>
                                        <div class="img-box">
                                            <img src="img/stugeron_tablet.jpeg" alt="Stugeron Tablet">
                                        </div>
                                        <div class="detail-box">
                                            <div class="text">
                                                <h6>Stugeron Tablet</h6>
                                                <h6 class="price"><span>₹</span>99</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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


    <!-- <script src="./Free CSS _ Free CSS Templates _ Demo of the HTML CSS Template Medion_files/jquery.min.js.download"></script>
    <script src="./Free CSS _ Free CSS Templates _ Demo of the HTML CSS Template Medion_files/bootstrap.js.download"></script>
    <script src="./Free CSS _ Free CSS Templates _ Demo of the HTML CSS Template Medion_files/owl.carousel.min.js.download"></script> -->

    <script type="text/javascript">
        var gaProperty = 'UA-120201777-1'; var disableStr = 'ga-disable-' + gaProperty; if (document.cookie.indexOf(disableStr + '=true') > -1) { window[disableStr] = true; }
        function gaOptout() { document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2045 23:59:59 UTC; path=/'; window[disableStr] = true; alert('Google Tracking has been deactivated'); }
        (function (i, s, o, g, r, a, m) { i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () { (i[r].q = i[r].q || []).push(arguments) }, i[r].l = 1 * new Date(); a = s.createElement(o), m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m) })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga'); ga('create', 'UA-120201777-1', 'auto'); ga('set', 'anonymizeIp', true); ga('send', 'pageview');
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>