    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('<?php echo base_url(); ?>assets/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
              <h1 class="mb-3">Contact</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row">
          <h2 class="h4">Contact Information - Location</h2><br>
        </div>
        <div class="row">
          <div class="col-md-4 contacts">
            <svg class="contacts--icon">  
              <use xlink:href="<?php echo base_url();?>assets/images/sprite.svg#icon-home"></use>
            </svg>
            <h4 class="contacts--text mb-2">Visit Us</h4>
              <h4 class="contacts--text-para">Sunway House</h4>
              <h4 class="contacts--text-para">No 25,</h4>
              <h4 class="contacts--text-para">Kimbulapitiya Road,</h4>
              <h4 class="contacts--text-para">Negombo</h4>
          </div>
          <div class="col-md-4">
            <svg class="contacts--icon">
              <use xlink:href="<?php echo base_url();?>assets/images/sprite.svg#icon-phone"></use>
            </svg>
            <h4 class="contacts--text mb-2">Call Us</h4>
            <h4 class="contacts--text-para">+94 777 262824</h4>
          </div>
          <div class="col-md-4">
            <svg class="contacts--icon">
              <use xlink:href="<?php echo base_url();?>assets/images/sprite.svg#icon-paper-plane"></use>
            </svg>
            <h4 class="contacts--text mb-2">Mail Us</h4>
            <h4 class="contacts--text-para">info@sunwayholidays.lk</h4>
          </div>
          
      
        </div>
        
            <section class="ftco-section mt-5" style="background-color: #DAE0E2 !important;">
	<div class="container-fluid"  >
		<div class="row">
			<div class="col-lg-12 col-md-12">
				  <div class="row justify-content-center mb-2">
          <div class="col-md-7 text-center heading-section ">
            <h2>Tailor Made Tours</h2>
          </div>
        </div>
		<div class="col-sm-4 group mb-3 justify-content-center" style="margin:auto;">
						<input type="button" class="search-submit btn btn-primary inquiry-button" value="Click Here!" style="width:100%; font-size:1.5em;"
						 onclick="window.location='<?php echo base_url(); ?>inquiry'">
					</div>

			</div>
		</div>
	</div>
</section>
    
       

        <div class="row" style="margin-top:6em; margin-bottom: 2em;" >
          
          <div class="col-md-6">
              <div class="row slider-text align-items-center">
                <div class="col-md-7 col-sm-12 ftco-animate">
                    <h1 class="mb-3 ">Send Us a Mail</h1>
                </div>
              </div>
            <form action="mailController/mail" method="post" class="mail-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" name="name" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email" name="email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" name="subject" required>
              </div>
              <div class="form-group">
                <textarea cols="30" rows="7" class="form-control" placeholder="Message" name="message" required></textarea>
              </div>
              <div class="g-recaptcha" style="margin-bottom: 20px;" data-sitekey="6LemjJwUAAAAAPc8tk1lLITLs2K6iMcdpJXUISw6"></div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
          <div class="col-md-6 contacts--image">
          
          </div>
       
        </div>

      </div>
    </section>
    


    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/mail.js"></script>
