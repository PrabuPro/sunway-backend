<section class="home-slider owl-carousel">
	<div class="slider-item" style="background-image: url('<?php echo base_url();?>assets/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text align-items-center">
				<div class="col-md-7 col-sm-12 ftco-animate">
					<h1 class="mb-3">Inquiry</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END slider -->



<section class="ftco-section">
	<div class="container">
		<div class="col-lg-12">
			<div class="row slider-text align-items-center">
				<div class="col-md-7 col-sm-12 ftco-animate">
					<h1 class="mb-3 mt-5">Inquire Us</h1>
				</div>
			</div>
			<button type="button" class="btn btn-info payments" data-toggle="tooltip" data-placement="top" title="More about payment methodes">Payments</button>
			<button type="button" class="btn btn-info">Info</button>
			<button type="button" class="btn btn-info">Info</button>
			<button type="button" class="btn btn-info">Info</button>
            <?php if($this->session->flashdata('errors')) : ?>
				
            <?php echo $this->session->flashdata('errors'); ?>
			
            <?php endif; ?>

			<form action="<?php echo site_url('inquirycontroller/inquire');?>"  method="post" class="inquiry_form" >
				<div class="row">
					<div class="col-md-6 form-group">
						<label for="name" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Name</label>
						<input id="name" name="name" type="text" class="form-control" value="<?php echo set_value('name');?>" placeholder="Your Name" required>
					</div>
					<div class="col-md-6 form-group">
						<label for="email" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Email</label>
						<input id="email" name="email" type="email" class="form-control" value="<?php echo set_value('email');?>" placeholder="Your Email" required>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 form-group">
						<label for="phone" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;" data-toggle="tooltip" data-placement="top" title="Please enter your whatsapp or viber number ;)">Phone Number ❕</label>
						<input id="phone" name="phone" type="text" class="form-control" value="<?php echo set_value('phone');?>" placeholder="Phone Number eg: +941123456789" required> 
					</div>
					<div class="col-md-6 form-group">
						<label for="country" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Country</label>
						<input name="country" type="text" class="form-control" value="<?php echo set_value('country');?>" placeholder="Your Country" required>
					</div>
				</div>
				<div class="row">
					<div class="select-wrap col-md-6 group mb-3">
						<label for="num-of-adults" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Number of Adults</label>
						<select id="num-of-adults" name="num-of-adults" class="form-control" required>
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
						<label  for="num-of-children" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Number of Children(below 12yrs old)</label>
						<select id="num-of-children" name="num-of-children" class="form-control" required>
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
						<label  for="checkin_date" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Arrival Date</label>
						<div class="check-in one-third mb-3"><input  name="check-in-date" type="text" id="checkin_date" class="form-control" placeholder="Approx Arival Date" required></div>
					</div>
					<div class="col-md-6">
						<label  for="checkout_date" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Depature Date</label>
						<div class="check-out one-third mb-3"><input name="check-out-date" type="text" id="checkout_date" class="form-control" placeholder="Depature Date" required></div>
					</div>
				</div>
				<div class="row">
					<div class="select-wrap col-md-6 group mb-3">
						<label  for="hotel_type" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Hotel Type</label>
						<select id="hotel_type" name="hotel_type" class="form-control" required>
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
						<label  for="tour_type" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Tour Type</label>
						<select id="tour_type" name="tour_type" class="form-control" required>
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
						<label  for="transportation_type" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Transportation Type</label>
						<select id="transportation_type" name="tranportation_type" class="form-control" required>
							<option value="" class="form-control-option-white-top">Transportation Type</option>
							<option value="car" class="form-control-option-white">Car</option>
							<option value="van" class="form-control-option-white">Van</option>
							<option value="bus" class="form-control-option-white">Bus</option>

						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 form-group">
						<label  for="message" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Message</label>
						<textarea id="message" name="message" cols="120" rows="7" class="form-control" placeholder="Tell us more about what your need 🙂" required><?php echo set_value('name');?></textarea>
					</div>
				</div>
				<div class="g-recaptcha" style="margin-bottom: 20px;" data-sitekey="6Le8HJEUAAAAAHg1eHa0e7U5Fw3O9djmgn9agkvc"></div>
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
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo base_url();?>assets/js/inquiry.js"></script>

