<?php

	$name = $_POST["firstname"];
  $adress = $_POST["address"];
  $day = $_POST["day"];
  $hour = $_POST["minutes"];
  $region = $_POST["region"];
  $cartype = $_POST["car-type"];
  $number = $_POST["mobile"];

  $destination = $_POST["destination"]; 
  $allinformation = "From: ". '  ' . $name . "\r\n"
                    ."ADRESS: ". '  '. $adress . "\r\n"
                    ."NUMBER: ". '  '. $number . "\r\n"
                    ."TIME: " . '  '. $hour ."\r\n"
                    ."DAY: ". '  '. $day ."\r\n"
                    ."Region:". '  ' . $region . "\r\n"
                    ."CARTYPE: ". ' ' . $cartype . "\r\n"
                    ."DESTINATION: ". '  ' . $destination ;      
  if(isset($_POST['submit'])){

    $to = "ddcode.ge@gmail.com";
    $subject="New Order". $Body;
    $Body = $allinformation;
    
    $headers = "From: ".$name. "\r\n" ;
    
    mail($to,$headers,$Body);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Limmat Taxi - Taxiunternehmen und Limousinenservice </title>
    <meta name="Description" content="Limmat Taxi - Taxiunternehmen und Limousinenservice in Ihrer Region, Dietikon, Urdorf und Schlieren ">
    <meta name="Keywords" content="taxi ,taxi in switzerland , taxi service,taxi service in zürich ,Limmat-taxi Taxi ,company and limousine servicein Dietikon, Limmattal and Zurich,tandem taxi ,promobile , taxifare ,">
    <meta name="author" content="dima demetrashvili">	
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/6de6aa5275.js" crossorigin="anonymous"></script> 
    <!-- Reset CSS -->
    <link rel="stylesheet" type="text/css" href="../../css/reset.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="../../img/CARDS/global.png" type="image/gif" />
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    
</head>
<body>
    <!-- HEADER -->
    <header id="header">
      <div class="container">
        <div class="language-menu">
          <ul class="language-bar">
            <li><a href="https://limmat-taxi.at/ger/booking">GER</a></li>
            <li><a class="active" href="https://limmat-taxi.at/eng/booking">ENG</a></li>
            <li><a href="https://limmat-taxi.at/rus/booking">RUS</a></li>
           </ul>
        </div>
          <nav>
                  <a class="logo" href="https://limmat-taxi.at/eng/">Limmat-Taxi</a>
              <ul class="nav-links">
                  <li><a href="https://limmat-taxi.at/eng/">Home</a></li>
                  <li>
                    <div class="dropdown">
                      <button class="dropbtn">service</button>
                      <div class="dropdown-content">
                        <a href="https://limmat-taxi.at/eng/taxifare"> Taxi fare </a>
                        <a href="https://limmat-taxi.at/eng/taxiserice">Taxi services</a>
                        <a href="https://limmat-taxi.at/eng/promobile">promoblie</a>
                        <a href="https://limmat-taxi.at/eng/curier">Express courier</a>
                        <a href="https://limmat-taxi.at/eng/bussiness">business</a>
                        <a href="https://limmat-taxi.at/eng/tandemtaxi">Tandem taxi</a>
                      </div>
                    </div>
                  </li>
                  <li><a href="https://limmat-taxi.at/eng/booking">Booking</a></li>
                  <li><a href="https://limmat-taxi.at/eng/contactus">Contact Us</a></li>
              </ul>
              <div class="navbar">
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fas fa-bars burgerbar"></i></button>

              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                  <h5 id="offcanvasRightLabel"></h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <li><a href="https://limmat-taxi.at/eng/">Home</a></li>
                  <li><a href="https://limmat-taxi.at/eng/booking">Booking</a></li>
                  <li><a href="https://limmat-taxi.at/eng/contactus">Contact Us</a></li>
                </div>
              </div>
              </div>
          </nav>
      </div>
    </header>
    <!-- TAXI FARE -->
    <section id="thanks" >
        <div class="container">
          <i class="fas fa-check check"></i>
          <h1>Thanks you</h1>
          <h2>Your order is submit</h2>
          <p>Our driver will contact you</p>
        </div>
    </section>
    <!-- FOOTER -->
    <footer id="footer">
      <div class="section_footer ">
        <div class="container"> 
            <div class="footer_section_2">
              <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <h2 class="account_text">Address</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10800.87004762184!2d8.3950742!3d47.4076984!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7398ae77891b250a!2sGLOBAL%20TAXI!5e0!3m2!1sen!2sge!4v1634218541117!5m2!1sen!2sge"  width="100%" height="100" style="border:0; margin-bottom:20px ;" allowfullscreen="" loading="lazy"></iframe>
                    <p class="ipsum_text"> <i class="fas fa-map-marked-alt"></i><a href="https://goo.gl/maps/4T52n3y4raGKZWBM9"> Kreuzstrasse 7, 8953 Dietikon, Switzerland</a> </p>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <h2 class="account_text">Links</h2>
                    <div class="image-icon"><img src="../../img/bulit-icon.png"><span class="fb_text"><a href="https://limmat-taxi.at/eng/">Home</span></a></div>
                    <div class="image-icon"><img src="../../img/bulit-icon.png"><span class="fb_text"><a href="https://limmat-taxi.at/eng/booking">Booking</span></a></div>
                    <div class="image-icon"><img src="../../img/bulit-icon.png"><span class="fb_text"><a href="https://limmat-taxi.at/eng/contactus">Contact Us</span></a></div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <h2 class="account_text">Follow Us</h2>
                    <div class="image-icon"><img src="../../img/fb-icon.png"><span class="fb_text"><a href="#">Facebook</a></span></div>
                    <div class="image-icon"><img src="../../img/twitter-icon.png"><span class="fb_text"><a href="#">Twitter</a></span></div> 
                    <div class="image-icon"><img src="../../img/instagram-icon.png"><span class="fb_text"><a href="#">Instagram</a></span></div>
                  </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
              <h2 class="adderess_text">Contact Now</h2>
              <div class="address-col">
                <ul>
                  <li><a href="tel:044 742 3131"><i class="fas fa-phone-alt"></i>044 742 3131</a></li>
                  <li><a href='https://wa.me/0447411111' target='_blank'><i class="fab fa-whatsapp-square"></i></i> 044 742 3131</a></li>
                  <li><a href="mailto:Office@limmat-taxi.ch"> <i class="fas fa-envelope"></i>Office@limmat-taxi.ch</a></li>
                </ul>
              </div>
            </div>
            </div>
            </div>
            </div>
        </div>
      </div>

    </footer>


    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG2QOK9TZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>
</html>