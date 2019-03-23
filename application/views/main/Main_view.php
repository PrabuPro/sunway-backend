<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php if(isset($site_title)){echo $site_title;}else{ echo $site_title;} ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="<?php echo base_url();?>/assets/images/logo.jpg" alt="" class="navbar-logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item "><a href="<?php echo base_url(); ?>home" class="nav-link ">Home</a></li>
                    <li class="nav-item"><a href="<?php echo base_url(); ?>tailormade" class="nav-link">Tailor Made</a></li>
                    <li class="nav-item"><a href="<?php echo base_url(); ?>tour" class="nav-link">Tours</a></li>
                    <li class="nav-item"><a href="<?php echo base_url(); ?>experts-in" class="nav-link">Experts In</a></li>
                    <li class="nav-item"><a href="<?php echo base_url(); ?>sustainale-responsible" class="nav-link">Sustainable</a></li>
                    <li class="nav-item"><a href="<?php echo base_url(); ?>about-us" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="<?php echo base_url(); ?>blog" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="<?php echo base_url(); ?>contacts" class="nav-link">Contacts</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php $this->load->view($site_view); ?>
  
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Sunway Holidays</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the
                            blind texts.</p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Book Now</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Tour</a></li>
                            <li><a href="#" class="py-2 d-block">Accomadations</a></li>
                            <li><a href="#" class="py-2 d-block">Car Rent</a></li>
                            <li><a href="#" class="py-2 d-block">Beach &amp; Resorts</a></li>
                            <li><a href="#" class="py-2 d-block">Mountains</a></li>
                            <li><a href="#" class="py-2 d-block">Cruises</a></li>
                            <li><a href="#" class="py-2 d-block">MICE</a></li>
                            <li><a href="#" class="py-2 d-block">Tailor Made</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Top Deals</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Luxe Hotel</a></li>
                            <li><a href="#" class="py-2 d-block">Venice Tours</a></li>
                            <li><a href="#" class="py-2 d-block">Deluxe Hotels</a></li>
                            <li><a href="#" class="py-2 d-block">Boracay Beach &amp; Resorts</a></li>
                            <li><a href="#" class="py-2 d-block">Beach &amp; Resorts</a></li>
                            <li><a href="#" class="py-2 d-block">Fuente Villa</a></li>
                            <li><a href="#" class="py-2 d-block">Japan Tours</a></li>
                            <li><a href="#" class="py-2 d-block">Maldives Tours</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Contact Information</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Sunway House, No 25, Kimbulapitiya Road, Negombo.</a></li>
                            <li><a href="#" class="py-2 d-block">+94315 312 444</a></li>
                            <li><a href="#" class="py-2 d-block">info@yoursite.com</a></li>
                            <li><a href="#" class="py-2 d-block">email@email.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p> 
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/aos.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url();?>assets/js/google-map.js"></script>
  <script src="<?php echo base_url();?>assets/js/parallax.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/main.js"></script>
 

</body>

</html>