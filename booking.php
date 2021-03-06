<?php

if(isset($_POST['submit']))
{
    $to_email = "sharmavinay.ca@gmail.com";
    $subject = "Contact Form";
    $body = "Name:".$_POST['first'] ." " . $_POST['last']."
    Email:".$_POST['email']."
    Phone no:".$_POST['phone']."
    Time of meeting:".$_POST['time']."
    Purpose:".$_POST['purpose']."
    Message:".$_POST['message'];
    $headers = "From: sender\'s email";
    mail($to_email,$subject,$body,$headers);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Prakash Saboo and Co.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="Free-Template.co" />

  <link rel="shortcut icon" href="logo.png">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/jumpanime.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target bg-white" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

          <div class="col-lg-4 text-center">
              <div class="site-logo">
                <a href="about.html">Prakash Saboo and Co.</a>
              </div>


              <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-primary"></span></a></div>
            </div>
            <div class="col-lg-4">
              <nav class="site-navigation text-right ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="about.html" class="nav-link">About</a></li>
                  <li><a href="services.html" class="nav-link">Services</a></li>
                  <li class="active"><a href="booking.php" class="nav-link">Book Us</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-4">
              <nav class="site-navigation text-left mr-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="blog.html" class="nav-link">Team</a></li>
                  <li ><a href="contact.html" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>


          </div>
        </div>

      </header>




    <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1" style="background-attachment: fixed; background-image: url('images/contactus.jpeg');">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-12 text-center">
                   <div class="box-92819">
                    <h1 class="text-uppercase text-black mb-3" style="font-weight: bold;">Book Us</h1>
                    <div class="underline"></div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>


    <div class="site-section">
      <div class="container">

        <div class="row">
          <div class="col-lg-7 mb-5" >
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name" name="first">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Last name" name="last">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Email address" name="email">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Contact number" name="phone">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Time of meeting" name="time">
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="purpose" id="" class="form-control" placeholder="Purpose of meeting" cols="30" rows="3"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="message" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" name="submit" class="btn btn-block btn-primary text-white py-3 px-5 rounded-0" value="Send Message">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-5 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="heading-39291">Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black small text-uppercase font-weight-bold">Address:</span>
                  <span> <span class="font-weight-bold"> Head Office: </span> 205, 2nd Floor, V-Mall, Near Saidham Temple, W.E. Highway, Kandivali (East) Mumbai???400101.</span></li>
                  <span> <span class="font-weight-bold"> Branch Office: </span> FF-27, Cross Road Mall, Central Spine, Vidhyadhar Nagar, Jaipur ??? 302039.</span></li>
                  <br><br>
                  <li class="d-block mb-3">
                    <span class="d-block text-black small text-uppercase font-weight-bold">Phone:</span>
                    <span class="font-weight-bold"> Head Office: </span><span>9820513340</span></li>
                    <span class="font-weight-bold"> Branch Office: </span> <span>8233770144/9783888312</span></li>
                  <br>
                  <li class="d-block mb-3"><span class="d-block text-black small text-uppercase font-weight-bold">Email:</span><span>prakashsaboo@yahoo.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>





    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-7">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Our firm???s mission is to provide holistic support to clients, integrity of performance and constant innovation in tackling matters related to accounting</p>
              </div>

            </div>
          </div>
          <div class="col-md-6 ml-auto">

            <div class="mb-5">
              <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
              <form action="#" method="post" class="footer-suscribe-form">
                <div class="input-group mb-3">
                  <input type="text" class="form-control rounded-0 border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                  </div>
                </div>
            </div>


            <h2 class="footer-heading mb-4">Follow Us</h2>
            <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </form>
          </div>
        </div>

      </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>


  </body>

</html>
