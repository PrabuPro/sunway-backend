<section class="home-slider owl-carousel">
	<div class="slider-item" style="background-image: url('<?php echo base_url();?>assets/images/bg_3.jpg');"
	 data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text align-items-center">
				<div class="col-md-7 col-sm-12 ftco-animate">
					<h1 class="mb-3">Tailor Made</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END slider -->



<section class="ftco-section" style='padding-top:0 !important;'>
	<div class="container">
		<div class="row" style="margin-top:6em; margin-bottom: 2em;">

			<div class="col-md-12 col-lg-6">
				<div class="row slider-text align-items-center">
					<div class="col-md-12 col-sm-12 ftco-animate">
						<h1 class="mb-3 ">Tailor Made Tours</h1>
					</div>
				</div>
				<h4 class="tailorMadePage__para" style='padding-right:2em;'>
					“Ayubowan!” Greeting you from our traditional way wishing you a long life. The Therapy for happiness flows with
					the style of travel with your consciousness, your heart and your memories. Find your chance to add some excitement
					into your holiday to the promised island of Sri Lanka and embrace flexibility with us. Experience the island
					renowned real adventure, rich cultural heritage along with sun kissed golden beaches and amazing hospitality
					exclusively in Sri Lanka </h4>

			</div>
			<div class="col-md-6 tailorMadePage__image">

			</div>

		</div>
	</div>
</section>

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
		<div class="row">
			<div class="col-lg-9 col-md-12">
				<div class="row slider-text align-items-center">
					<div class="col-md-7 col-sm-12 ftco-animate">
						<h1 class="mb-3 mt-5">Inquire Us</h1>
					</div>
				</div>
				<button type="button" class="btn btn-info payments" data-toggle="tooltip" data-placement="top" title="More about payment methodes">Payments</button>
				<button type="button" class="btn btn-info">Info</button>
				<button type="button" class="btn btn-info">Info</button>
				<button type="button" class="btn btn-info">Info</button>

				<form action="<?php echo site_url('inquirycontroller/inquire');?>" method="post" class="inquiry_form">
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="name" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Name</label>
							<input id="name" name="name" type="text" class="form-control" value="<?php echo set_value('name');?>"
							 placeholder="Your Name" required>
						</div>
						<div class="col-md-6 form-group">
							<label for="email" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Email</label>
							<input id="email" name="email" type="email" class="form-control" value="<?php echo set_value('email');?>"
							 placeholder="Your Email" required>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="phone" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;" data-toggle="tooltip"
							 data-placement="top" title="Please enter your whatsapp or viber number 🙂">Phone Number ❕</label>
							<input id="phone" name="phone" type="text" class="form-control" value="<?php echo set_value('phone');?>"
							 placeholder="Phone Number eg: +941123456789" required>
						</div>
						<div class="col-md-6 form-group">
							<label for="country" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Country</label>
							<input name="country" type="text" class="form-control" value="<?php echo set_value('country');?>" placeholder="Your Country"
							 required>
						</div>
					</div>
					<div class="row">
						<div class="select-wrap col-md-6 group mb-3">
							<label for="num-of-adults" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Number of
								Adults</label>
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
							<label for="num-of-children" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Number
								of Children(below 12yrs old)</label>
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
							<label for="checkin_date" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Arrival
								Date</label>
							<div class="check-in one-third mb-3"><input name="check-in-date" type="text" id="checkin_date" class="form-control"
								 placeholder="Approx Arival Date" required></div>
						</div>
						<div class="col-md-6">
							<label for="number-of-days" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Number of
								days planing to stay</label>
							<input id="number-of-days" name="number-of-days" type="text" class="form-control" value="<?php echo set_value('number-of-days');?>"
							 placeholder="Number of days" required>
						</div>
					</div>
					<div class="row">
						<div class="select-wrap col-md-6 group mb-3">
							<label for="hotel_type" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Hotel Type</label>
							<select id="hotel_type" name="hotel_type" class="form-control" required>
								<option value="" class="form-control-option-white">Hotel Type</option>
								<option value="standard" class="form-control-option-white">Standard</option>
								<option value="3 star" class="form-control-option-white">3 Star</option>
								<option value="4 star" class="form-control-option-white">4 Star</option>
								<option value="5 star" class="form-control-option-white">5 Star</option>
								<option value="bouteque hotels" class="form-control-option-white">Bouteque Hotels</option>
								<option value="villas" class="form-control-option-white">Villas</option>
								<option value="apartments" class="form-control-option-white">Apartments</option>
								<option value="rent a house" class="form-control-option-white">Rent a House</option>
							</select>
						</div>


					</div>
					<div class="row">

						<div class="select-wrap col-md-8 group mb-3">
							<label for="tour_type" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Tour Type</label>
							<div class="field">
								<div class="control" class="inquiry_form-checkbox">
									<input class="inquiry_form-input" id="culture" name="tour_type[]" type="checkbox" value="culture"><label for="culture"
									 id="tour_type" class="inquiry_form-label">Culture</label>
									<input class="inquiry_form-input" id="eco" name="tour_type[]" type="checkbox" value="eco"><label for="eco"
									 class="inquiry_form-label">Eco</label>
									<input class="inquiry_form-input" id="active" name="tour_type[]" type="checkbox" value="active"><label for="active"
									 class="inquiry_form-label">Active</label>
									<input class="inquiry_form-input" id="adventure" name="tour_type[]" type="checkbox" value="adventure"><label
									 for="adventure" class="inquiry_form-label">Adventure</label>
								</div>
							</div>
							<div class="field">
								<div class="control" class="inquiry_form-checkbox">
									<input class="inquiry_form-input" id="romantic" name="tour_type[]" type="checkbox" value="romantic"><label for="romantic"
									 class="inquiry_form-label">Romantic</label>
									<input class="inquiry_form-input" id="family" name="tour_type[]" type="checkbox" value="family"><label for="family"
									 class="inquiry_form-label">Family</label>
									<input class="inquiry_form-input" id="relaxing" name="tour_type[]" type="checkbox" value="relaxing holiday"><label
									 for="relaxing" class="inquiry_form-label">Relaxing holiday</label>
									<input class="inquiry_form-input" id="mice" name="tour_type[]" type="checkbox" value="mice"><label for="mice"
									 class="inquiry_form-label">MICE</label>
								</div>
							</div>
						</div>

					</div>

					<div class="row">
						<div class="col-md-12 form-group">
							<label for="message" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Message</label>
							<textarea id="message" name="message" cols="120" rows="7" class="form-control" placeholder="Tell us more about what your need 🙂 (max 100 words)"
							 required><?php echo set_value('name');?></textarea>
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
			<div class="col-lg-3 ftco-animate bg-blue">
				<h2 class="mt-4 mb-2 p-2 pb-3 ftco-animate">Recommended Tours</h2>

				<?php foreach($suggestions as $suggestion) : ?>

				<a href="<?php echo site_url('tours/'.$suggestion->tour_id);?>" class="block-5 mb-3" style="background-image: url('<?php echo base_url().'assets/images/tours/'.$suggestion->photo_id; ?>');">
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

				<?php endforeach; ?>

			</div>
		</div>

	</div>
</section>


<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo base_url();?>assets/js/inquiry.js"></script>
