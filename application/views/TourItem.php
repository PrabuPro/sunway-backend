<section class="home-slider owl-carousel">
	<div class="slider-item" style="background-image: url('<?php echo base_url().'assets/images/tours/'.$results->photo_id; ?>');"
	 data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text align-items-center">
				<div class="col-md-7 col-sm-12 ftco-animate">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Tour</span></p>
					<h1 class="mb-3">
						<?php echo $results->name; ?>
					</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END slider -->

<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row slider-text align-items-center">
					<div class="col-md-7 col-sm-12 ftco-animate">
						<h1 class="mb-3">Introduction</h1>
					</div>
				</div>
			</div>
			<h3 class="col-md-7 col-sm-12 sub--para-itenary mb-5 ftco-animate">
				<?php echo $results->introduction; ?>
			</h3><br>

			<div class="col-lg-6">
				<div class="row slider-text align-items-center">
					<div class="col-md-12 col-sm-12 ftco-animate">
						<h1 class="mb-3">Things You Can Do</h1>
						<ul class="tours-itinerary">

							<?php foreach($itineraries as $itinerary) : ?>
							<li class="tours-itinerary-item"> <img src="<?php echo base_url(); ?>assets/images/checkmark.png" class="tours-itinerary-icon"
								 alt="">Day
								<?php echo $itinerary->item_number; ?>
							</li>
							<li class="tours-itinerary-item-details">
								<?php echo $itinerary->item_details; ?>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div id="map"></div>
				<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31659.998183437292!2d80.57900303960295!3d7.297608838410905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae366266498acd3%3A0x411a3818a1e03c35!2sKandy!5e0!3m2!1sen!2slk!4v1548053966566"
                        width="550" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
			</div>



			
			<section class="ftco-section">
				<div class="container">
					<div class="col-lg-12 col-md-12">
				<div class="row slider-text align-items-center">
					<div class="col-md-7 col-sm-12 ftco-animate">
						<h1 class="mb-3 mt-5">Inquire Us</h1>
					</div>
				</div>
				<button type="button" class="btn btn-info payments" data-toggle="tooltip" data-placement="top" title="More about payment methodes">Payments</button>
				<button type="button" class="btn btn-info">Info</button>
				<button type="button" class="btn btn-info">Info</button>
				<button type="button" class="btn btn-info">Info</button>
				
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
							<label for="phone" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;" data-toggle="tooltip" data-placement="top" title="Please enter your whatsapp or viber number 🙂">Phone Number ❕</label>
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
								<option value="" class="form-control-option-white-top" >Number of Adults</option>
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
							<label  for="number-of-days" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Number of days planing to stay</label>
							<input id="number-of-days" name="number-of-days" type="text" class="form-control" value="<?php echo set_value('number-of-days');?>" placeholder="Number of days" required>
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
								<option value="bouteque hotels" class="form-control-option-white">Bouteque Hotels</option>
								<option value="villas" class="form-control-option-white"  >Villas</option>
								<option value="apartments" class="form-control-option-white"  >Apartments</option>
								<option value="rent a house" class="form-control-option-white"  >Rent a House</option>
							</select>
						</div>
						
						
					</div>
					<div class="row">
					
						<div class="select-wrap col-md-8 group mb-3">
							<label  for="tour_type" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Tour Type</label>
							<div class="field">
									<div class="control" class="inquiry_form-checkbox">
										<input class="inquiry_form-input" id="culture" name="tour_type[]" type="checkbox" value="culture"><label for="culture" id="tour_type" class="inquiry_form-label">Culture</label> 
										<input class="inquiry_form-input" id="eco" name="tour_type[]" type="checkbox" value="eco"><label for="eco" class="inquiry_form-label">Eco</label>  
										<input class="inquiry_form-input" id="active" name="tour_type[]" type="checkbox" value="active"><label for="active" class="inquiry_form-label">Active</label> 
										<input class="inquiry_form-input" id="adventure" name="tour_type[]" type="checkbox" value="adventure"><label for="adventure" class="inquiry_form-label">Adventure</label>  
									</div>
								</div>
							<div class="field">
									<div class="control" class="inquiry_form-checkbox">
										<input class="inquiry_form-input" id="romantic" name="tour_type[]" type="checkbox" value="romantic"><label for="romantic" class="inquiry_form-label">Romantic</label> 
										<input class="inquiry_form-input" id="family" name="tour_type[]" type="checkbox" value="family"><label for="family" class="inquiry_form-label">Family</label>  
										<input class="inquiry_form-input" id="relaxing" name="tour_type[]" type="checkbox" value="relaxing holiday"><label for="relaxing" class="inquiry_form-label">Relaxing holiday</label> 
										<input class="inquiry_form-input" id="mice" name="tour_type[]" type="checkbox" value="mice"><label for="mice" class="inquiry_form-label">MICE</label>  
									</div>
								</div>
						</div>
						
					</div>
	
					<div class="row">
						<div class="col-md-12 form-group">
							<label  for="message" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Message</label>
							<textarea id="message" name="message" cols="120" rows="7" class="form-control" placeholder="Tell us more about what your need 🙂 (max 100 words)" required><?php echo set_value('name');?></textarea>
						</div>
					</div>
					<div class="g-recaptcha" style="margin-bottom: 20px;" data-sitekey="6Le8HJEUAAAAAHg1eHa0e7U5Fw3O9djmgn9agkvc"></div>
					<div class="row">
						<div class="col-md-10">
							<div class="form-group">
								<input type="submit" value="Submit" class="btn btn-primary py-3 px-5">
							</div>
						</div>
					</div>
				</form>
	
			</div>
				</div>
			</section>

			<div class="col-lg-12">
				<div class="row slider-text align-items-center">
					<div class="col-md-7 col-sm-12 ftco-animate">
						<h1 class="mb-3 mt-5">Tours You may also like</h1>
					</div>
				</div>

				<div class="row ">

					<?php foreach($suggestions as $suggestion) : ?>
					<div class="col-md-4 col-lg-4 mb-4 ftco-animate">
						<a href="<?php echo site_url('tours/'.$suggestion->tour_id);?>" class="block-5" style="background-image: url('<?php echo base_url().'assets/images/tours/'.$suggestion->photo_id; ?>');">
							<div class="text">
								<span class="price">$
									<?php echo $suggestion->price; ?></span>
								<h3 class="heading">Tour in
									<?php echo $suggestion->location; ?>
								</h3>
								<div class="post-meta">
									<span>
										<?php echo $suggestion->description; ?></span>
								</div>
							</div>
						</a>
					</div>
					<?php endforeach; ?>


				</div>	

				

			</div>
			


		</div>
	</div>
</section>

 <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="<?php echo base_url();?>assets/js/inquiry.js"></script>

<script>
	function initMap() {
		// The location of Uluru
		var uluru = {
			lat: -25.344,
			lng: 131.036
		};
		// The map, centered at Uluru
		var map = new google.maps.Map(
			document.getElementById('map'), {
				zoom: 4,
				center: uluru
			});
		// The marker, positioned at Uluru
		var marker = new google.maps.Marker({
			position: uluru,
			map: map
		});
	}

</script>

<script async defer src="https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452&key=YOUR_API_KEY">
</script>
