<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

     <style>
      nav {
  background-color: #333;
  color: #fff;
  height: 50px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.nav-menu {
  display: flex;
  justify-content : space-around;
  margin: 0;
  padding: 0;
  list-style: none;
}
.nav-menu-inner {
  margin-top: 10px;
  display: flex;
}
.nav-menu li {
  margin: 0 10px;
}

.nav-menu li a {
  color: #fff;
  text-decoration: none;
}

.dropdown {
  position: relative;
}

.dropdown-menu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #f9f9f9;
  z-index: 1;
  padding: 0;
  margin: 0;
}

.dropdown:hover .dropdown-menu {
  display: block;
}

.dropdown-menu li {
  margin: 0;
}

.dropdown-menu li a {
  color: #333;
  text-decoration: none;
  display: block;
  padding: 10px;
}

.dropdown-menu li:hover {
  background-color: #ddd;
}

        
@media (min-width: 1024px) {
  .dropdown-submenu:hover > .dropdown-menu {
    display: block;
  }
}

 .dropdown-toggle::after {
  display: none;
}

@media (min-width: 1024px) {
  .hover-dropdown > .dropdown:hover > .dropdown-menu {
    display: block;
    margin-top: 0px;
  }
}

.header2 .btn-dark {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-dark:hover {
  color: #fff;
  background-color: #23272b;
  border-color: #1d2124;
}


.dropdown-submenu > .dropdown-menu {
  top: 0;
  left: 100%;
  margin-left: 0;
  border-radius: 0.25rem;
  display: none;
}
        </style>
</head>

<body>

    <header>
    
    <nav>
  <ul class="nav-menu " >
  <div class="nav-menu-inner ">
    <li><a href="index.php">Home</a></li>
    <li><a href="findjobs.php">Jobs </a></li>
    <li class="dropdown">
      <a href="#">Disability &#9662;</a>
      <ul class="dropdown-menu">
        <li><a href="#" onclick="return responsiveVoice.clickEvent();">Dyslexia</a></li>
        <li><a  href="#" onclick="return magnify();">Low Vision</a></li>
        <li><a  href="#" onclick="colorG()">Deuteranopia</a></li>
       <li><a  href="#" onclick="colorR()">Protanopia</a></li>
      <li><a  href="#"onclick="colorB()">Tritanopia</a></li>
      <li><a  href="#" onclick="colorA()">Monochromacy</a></li>
      </ul>
    </li>
    <li><a href="contact.php">Contact</a></li>
    </div>
    <div class="nav-menu-inner ">
    <li>DiverSiHire</li>
    </div>
    <div class="nav-menu-inner " >
    <li> <a href="employer_login.php">Employeer</a> </li>
    <li> <a href="seeker.login.php">Job Seeker</a> </li>
    </div>
  </ul>
</nav>


    </header>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=95SUIrBf"></script>
    <script>
        function colorblind() {
            document.getElementById('colors').style.display= "block";
        };
        function colorG() {
            document.body.classList.toggle('nogreen');
            
        };
        function colorB() {
            document.body.classList.toggle('noblue');
        
        };
        function colorR() {
            document.body.classList.toggle('nored');
          
        };
        function colorA() {
            document.body.classList.toggle('dark');
            
        };

        const handsfree = new Handsfree({
    weboji: true
})
handsfree.enablePlugins('browser')
    </script>
    <!-- Start of ChatBot (www.chatbot.com) code -->
<script type="text/javascript">
    window.__be = window.__be || {};
    window.__be.id = "6372050d44eb4900077c6d7f";
    (function() {
        var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
        be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
    })();
</script>
<!-- End of ChatBot code -->
<script>
    $(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});

// make it as accordion for smaller screens
if ($(window).width() < 992) {
  $('.dropdown-menu a').click(function(e){
    e.preventDefault();
      if($(this).next('.submenu').length){
        $(this).next('.submenu').toggle();
      }
      $('.dropdown').on('hide.bs.dropdown', function () {
     $(this).find('.submenu').hide();
  })
  });
}
    </script>

</body>

</html>