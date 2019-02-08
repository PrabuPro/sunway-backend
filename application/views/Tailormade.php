<section class="home-slider owl-carousel">
	<div class="slider-item" style="background-image: url('<?php echo base_url();?>assets/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text align-items-center">
				<div class="col-md-7 col-sm-12 ftco-animate">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
					<h1 class="mb-3">Tailor Made</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END slider -->

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-5">
			<div class="col-md-7 text-center heading-section ftco-animate">
				<h2>Tailor Made Process</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 tailorMadePage ftco-animate">
				<div class="tailorMadePage__circle">
					<h1 class="tailorMadePage__circle--number">1</h1>
				</div>
				<div class="tailorMadePage__box">
					<svg class="tailorMadePage__box--icon">
						<use xlink:href="<?php echo base_url(); ?>assets/images/sprite.svg#icon-paper-plane"></use>
					</svg>
					<div class="tailorMadePage__box--text">Send us a Inquiry</div>
				</div>
			</div>
			<div class="col-md-3 tailorMadePage ftco-animate">
				<div class="tailorMadePage__circle">
					<h1 class="tailorMadePage__circle--number">2</h1>
				</div>
				<div class="tailorMadePage__box">
					<svg class="tailorMadePage__box--icon">
						<use xlink:href="<?php echo base_url(); ?>assets/images/sprite.svg#icon-phone"></use>
					</svg>
					<div class="tailorMadePage__box--text">We call you back</div>
				</div>
			</div>
			<div class="col-md-3 tailorMadePage ftco-animate">
				<div class="tailorMadePage__circle">
					<h1 class="tailorMadePage__circle--number">3</h1>
				</div>
				<div class="tailorMadePage__box">
					<svg class="tailorMadePage__box--icon">
						<use xlink:href="<?php echo base_url(); ?>assets/images/sprite.svg#icon-document-checked"></use>
					</svg>
					<div class="tailorMadePage__box--text">Confrim tour</div>
				</div>
			</div>
			<div class="col-md-3 tailorMadePage ftco-animate">
				<div class="tailorMadePage__circle">
					<h1 class="tailorMadePage__circle--number">4</h1>
				</div>
				<div class="tailorMadePage__box">
					<svg class="tailorMadePage__box--icon">
						<use xlink:href="<?php echo base_url(); ?>assets/images/sprite.svg#icon-airplane"></use>
					</svg>
					<div class="tailorMadePage__box--text">Begin Travel</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row" style="margin-top:6em; margin-bottom: 2em;">

			<div class="col-md-6">
				<div class="row slider-text align-items-center">
					<div class="col-md-12 col-sm-12 ftco-animate">
						<h1 class="mb-3 ">Why we are good at Tailor Made</h1>
					</div>
				</div>
				<h4 class="tailorMadePage__para">
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quas ipsam molestias, earum amet distinctio
					repellendus libero laboriosam, officia omnis, temporibus repudiandae veniam? Consequuntur doloremque tenetur non
					quia beatae, voluptas voluptatem sint ad, numquam at corrupti dolorum ab, repellendus molestias reiciendis
					voluptatibus? Consectetur quaerat, iure deleniti incidunt, error ipsam temporibus illo neque totam iste,
					perspiciatis cupiditate quo atque ad nam. Quibusdam, perferendis tempore nesciunt maxime, sapiente illo neque sed
					maiores suscipit eaque minus recusandae voluptas.
				</h4>

			</div>
			<div class="col-md-6 tailorMadePage__image">

			</div>

		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="col-lg-12">
			<div class="row slider-text align-items-center">
				<div class="col-md-7 col-sm-12 ftco-animate">
					<h1 class="mb-3 mt-5">Inquire Us</h1>
				</div>
			</div>
            <?php if($this->session->flashdata('errors')) : ?>
				
            <?php echo $this->session->flashdata('errors'); ?>
			
            <?php endif; ?>

			<form action="<?php echo site_url('inquirycontroller/inquire');?>"  method="post" class="inquiry_form" >
				<div class="row">
					<div class="col-md-6 form-group">
						<input name="name" type="text" class="form-control" value="<?php echo set_value('name');?>" placeholder="Your Name">
					</div>
					<div class="col-md-6 form-group">
						<input name="email" type="email" class="form-control" value="<?php echo set_value('email');?>" placeholder="Your Email">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 form-group">
						<input name="phone" type="text" class="form-control" value="<?php echo set_value('phone');?>" placeholder="Phone Number eg: +941123456789">
					</div>
					<div class="col-md-6 form-group">
						<input name="country" type="text" class="form-control" value="<?php echo set_value('country');?>" placeholder="Your Country">
					</div>
				</div>
				<div class="row">
					<div class="select-wrap col-md-6 group mb-3">
						<select name="num-of-adults" class="form-control">
							<option value="" class="form-control-option-white-top">Number of Adults</option>
							<option value="1" class="form-control-option-white">1</option>
							<option value="2" class="form-control-option-white">2</option>
							<option value="3" class="form-control-option-white">3</option>
							<option value="4" class="form-control-option-white">4</option>
							<option value="5" class="form-control-option-white">5</option>
							<option value="6" class="form-control-option-white">6</option>
							<option value="7" class="form-control-option-white">7</option>
							<option value="8" class="form-control-option-white">8</option>
						</select>
					</div>
					<div class="select-wrap col-md-6 group mb-3">
						<select name="num-of-children" class="form-control">
							<option value="" class="form-control-option-white-top">Number of Children</option>
							<option value="0" class="form-control-option-white">None</option>
							<option value="1" class="form-control-option-white">1</option>
							<option value="2" class="form-control-option-white">2</option>
							<option value="3" class="form-control-option-white">3</option>
							<option value="4" class="form-control-option-white">4</option>
							<option value="5" class="form-control-option-white">5</option>
							<option value="6" class="form-control-option-white">6</option>
							<option value="7" class="form-control-option-white">7</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="check-in one-third mb-3"><input name="check-in-date" type="text" id="checkin_date" class="form-control" placeholder="Approx Arival Date"></div>
					</div>
					<div class="col-md-6">
						<div class="check-out one-third mb-3"><input name="check-out-date" type="text" id="checkout_date" class="form-control" placeholder="Depature Date"></div>
					</div>
				</div>
				<div class="row">
					<div class="select-wrap col-md-6 group mb-3">
						<select name="hotel_type" class="form-control">
							<option value="" class="form-control-option-white">Hotel Type</option>
							<option value="standard" class="form-control-option-white">Standard</option>
                            <option value="3 star" class="form-control-option-white"  >3 Star</option>
                            <option value="4 star" class="form-control-option-white"  >4 Star</option>
                            <option value="5 star" class="form-control-option-white"  >5 Star</option>
                            <option value="bouteque hotels" class="form-control-option-white"  >Bouteque Hotels</option>
                            <option value="villas" class="form-control-option-white"  >Villas</option>
                            <option value="apartments" class="form-control-option-white"  >Apartments</option>
                            <option value="rent a house" class="form-control-option-white"  >Rent a House</option>
						</select>
					</div>
                    <div class="select-wrap col-md-6 group mb-3">
						<select name="tour_type" class="form-control">
							<option value="" class="form-control-option-white">Tour Type</option>
	                        <option value="common" class="form-control-option-white"  >Common</option>
                            <option value="beach" class="form-control-option-white"  >Beach</option>
                            <option value="echo" class="form-control-option-white"  >Eco</option>
                            <option value="nature" class="form-control-option-white"  >Nature</option>
                            <option value="wild life" class="form-control-option-white" >Wild Life</option>
                            <option value="advanture" class="form-control-option-white" >Adventure</option>
                            <option value="action" class="form-control-option-white"  >Action</option>
                            <option value="ayurweda" class="form-control-option-white"  >Ayurweda</option>
						</select>
					</div>
					
				</div>
				<div class="row">
					<div class="select-wrap col-md-6 group mb-3">
						<select name="tranportation_type" class="form-control">
							<option value="" class="form-control-option-white-top">Transportation Type</option>
							<option value="car" class="form-control-option-white">Car</option>
							<option value="van" class="form-control-option-white">Van</option>
							<option value="bus" class="form-control-option-white">Bus</option>

						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 form-group">
						<textarea name="message" cols="120" rows="7" class="form-control" placeholder="Message"><?php echo set_value('name');?></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10">
						<div class="form-group">
							<input type="submit" value="Send" class="btn btn-primary py-3 px-5">
						</div>
					</div>
				</div>
			</form>

		</div>
	</div>
</section>


<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/inquiry.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>

  $(document).ready(function () {
  	$('.inquiry_form').on('submit', function (e) {
  		e.preventDefault();

  		$.ajax({
  			type: 'POST',
  			url: 'inquirycontroller/inquire',
  			data: $('.inquiry_form').serialize(),
  			datatype: "html",
  			success: function (data) {
                  console.log(data);

                  if(data === "Successfull"){
                      swal({
                          title: "Mail Sent Successfully",
                          text: "check your inbox",
                          icon: "success",
                          button: "ok",
                      });
                      
                  } else if(data === "Data insertion faild") {
                    swal({
                          title: "Internal Error.",
                          text: "Please try again",
                          icon: "success",
                          button: "ok",
                      });

                  }
                  
                  else {
                    swal({
                        title: "We found some errors! Please check below",
                        text: (data).replace(/(<([^>]+)>)/ig,""),
                        icon: "error",
                        button: "ok",
                    });
                  }
                    
                    
  			}
  		});
  	});
  });

</script>
