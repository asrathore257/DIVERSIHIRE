<?php 
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	$seekid = $_SESSION['SEEK_ID'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/price_rangs.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/handsfree@8.5.1/build/lib/assets/handsfree.css" />
    <script src="https://unpkg.com/handsfree@8.5.1/build/lib/handsfree.js"></script>
    <style>
.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>

<body>

<header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="header-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-1 col-md-1">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt="" width="50"></a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu ml-180">
                                    <nav class="d-none d-lg-block ml-20">
                                        <ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="findjobs.php">Find a Jobs </a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                            <div class="header-btn d-none f-right d-lg-block ml-130">
                                <div class="dropdown ">
                                 <button class="btn head-btn1 f-right d-lg-block">Profile</button>
                                  <div class="dropdown-content">
                                   <?php  echo'<a href="seeker.dashboard.php" onClick="MyWindow=window.open('."'seeker.dashboard.php?id=".$seekid."', '_window');".'return false;"> DashBoard</a>';?>
                                   <?php echo	'<a href="seeker.editprofile.php" onClick="MyWindow=window.open	('."'seeker.editprofile.php?id=".$seekid."', '_window');".'return false;">Edit Profile</a>';?>
                                   <a href="logout.php">logout</a>
                                   </div>
                                </div>
                                </div>
                                <div class="dropdown ml-3">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Disability
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#" onclick="return magnify();">Low Vision</a>
                                        <a class="dropdown-item" href="#"
                                            onclick="return responsiveVoice.clickEvent();">Dyslexia</a>
                                        <a class="dropdown-item" href="#"
                                            onclick="return responsiveVoice.clickEvent();">Hard Hearing</a>
                                        <a class="dropdown-item" href="#" onclick="return handsfree.start();">Motor
                                            Disabilities</a>
                                        <a class="dropdown-item" href="#" onclick="colorblind()">Color Blindness</a>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   

    </header>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=95SUIrBf"></script>
    <script>
        function colorblind() {
            document.body.classList.toggle('dark');
        };
        const handsfree = new Handsfree({
    weboji: true
})
handsfree.enablePlugins('browser')
    </script>



</body>


<!--
    <div class="dropdown ">
    <button class="btn head-btn1 f-right d-lg-block">Profile</button>
    <div class="dropdown-content">
      <a href="logout.php">logout</a>
 </div>
</div>
<header>
       
        <div class="header-area header-transparrent">
            <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                           
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt="" width="50"></a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="menu-wrapper">
                                
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="findjobs.php">Find Jobs</a></li>
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="contact.php">Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            

                                </div>
                            </div>
                        </div>


     
    </header>
</body>
-->

</html>
