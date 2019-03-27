<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<style>
	body {
		background-color: #F5F5F5;
	}

	.ftco-navbar-light {
		background: #383C42 !important;
		top: 0px !important;
	}


	.panel.with-nav-tabs .panel-heading {
		padding: 5px 5px 0 5px;
	}

	.panel.with-nav-tabs .nav-tabs {
		border-bottom: none;
	}

	.panel.with-nav-tabs .nav-justified {
		margin-bottom: -1px;
	}

	.with-nav-tabs.panel-primary .nav-tabs>li>a,
	.with-nav-tabs.panel-primary .nav-tabs>li>a:hover,
	.with-nav-tabs.panel-primary .nav-tabs>li>a:focus {
		color: #fff;
	}

	.with-nav-tabs.panel-primary .nav-tabs>.open>a,
	.with-nav-tabs.panel-primary .nav-tabs>.open>a:hover,
	.with-nav-tabs.panel-primary .nav-tabs>.open>a:focus,
	.with-nav-tabs.panel-primary .nav-tabs>li>a:hover,
	.with-nav-tabs.panel-primary .nav-tabs>li>a:focus {
		color: #fff;
		background-color: #a6a6c1;
		border-color: transparent;
	}

	.with-nav-tabs.panel-primary .nav-tabs>li.active>a,
	.with-nav-tabs.panel-primary .nav-tabs>li.active>a:hover {
		color: #303040;
		background-color: #fff;
		border-color: #303040;
		border-bottom-color: transparent;
	}

	.with-nav-tabs.panel-primary .nav-tabs>li.dropdown .dropdown-menu {
		background-color: #303040;
		border-color: #303040;
	}

	.with-nav-tabs.panel-primary .nav-tabs>li.dropdown .dropdown-menu>li>a {
		color: #fff;
	}

	.with-nav-tabs.panel-primary .nav-tabs>li.dropdown .dropdown-menu>li>a:hover {
		background-color: #3071a9;
	}

	.with-nav-tabs.panel-primary .nav-tabs>li.dropdown .dropdown-menu>.active>a,
	.with-nav-tabs.panel-primary .nav-tabs>li.dropdown .dropdown-menu>.active>a:hover,
	.with-nav-tabs.panel-primary .nav-tabs>li.dropdown .dropdown-menu>.active>a:focus {
		background-color: #303040;
	}

	.panel-heading {
		background-color: #303040;
		border-radius: 5px;

	}

	.panel-primary {
		border: 1px solid #303040;
		border-color: #303040;
	}

	.panel {
		background-color: #303040;
		border-left: 1px solid transparent;
		border-right: 1px solid transparent;
		border-top: 1px solid transparent;
		border-radius: 4px;
		-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
		box-shadow: 0 1px 1px rgba(0, 0, 0, .05);

	}

	.panel-body {
		background-color: #ffffff;
		border-left: 2.5px solid #303040;
		border-right: 2.5px solid #303040;
		border-bottom: 2.5px solid #303040;
		border-radius: 5px;
		padding-top: 40px;
		padding-bottom: 40px;
		box-sizing: border-box;
	}

	input .name {
		height: 10px !important;
	}

	.send-btn:hover {
		color: #000000 !important;
		background-color: #ffffff !important;

	}

	.external-links {
		font-size: 16px;
		font-weight: 500;
	}

	.external-links:hover {
		/* color:red !important; */
		text-decoration: underline !important;
	}

	.intro-section {
		background-color: #ffffff;
		padding-top: 40px;
		padding-left: 30px;
		padding-right: 30px;
		padding-bottom: -60px !important;
		margin: 65px 0px 30px 0px;
		height: auto;
		width: 100%;
		border-radius: 5px;
		box-shadow: 0 2px 6px #777 !important;

	}

</style>



<div class="container" style="margin-top:150px;">
	<div class="row">
		<div class="col-lg-3">

			<div class="card"
				style="box-shadow: 0 2px 6px #777 !important; !important; margin-bottom: 20px; background-color:#67E6DC;">

				<div class="card-body">
					<h5 class="card-title external-links">

						<a href="">&#10219; Why travel with us</a>
					</h5>
					<h5 class="card-title external-links">
						<a href="">&#10219; How to book your tour</a>
					</h5>
					<h5 class="card-title external-links">
						<a href="">&#10219; FAQ</a>
					</h5>

				</div>
			</div>
			<div class="card"
				style="box-shadow: 0 2px 6px #777 !important; margin-bottom: 10px; background-color: #ffc600;">

				<div class="card-body">
					<h3 class="sub--para-itenary" style="color:#000000 !important;">
						Have a question
					</h3>
					<form action="mailcontroller/mail" method="post" class="inquiry_form  mail-form">
						<div class="row">
							<div class="col-md-12 form-group">
								<label for="name"
									style="font-size:14px; margin-bottom:0px; color:#000000; font-weight:600;">Name</label>
								<input id="name" name="name" type="text" class="form-control"
									value="<?php echo set_value('name');?>" placeholder=""
									style="height: 35px !important; font-size: 12px; border-radius: 5px;" required>
							</div>

						</div>
						<div class="row">
							<div class="col-md-12 form-group">
								<label for="email"
									style="font-size:14px; margin-bottom:0px; color:#000000; font-weight:600;">Email</label>
								<input id="email" name="email" type="email" class="form-control"
									value="<?php echo set_value('email');?>" placeholder=""
									style="height: 35px !important; font-size: 12px; border-radius: 5px;" required>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 form-group">
								<label for="message"
									style="font-size:14px; margin-bottom:0px; color:#000000; font-weight:600;">Message</label>
								<textarea id="message" name="message" cols="120" rows="7" class="form-control"
									placeholder=""
									style="height: 100px !important; font-size: 12px; border-radius: 5px;"
									required><?php echo set_value('name');?></textarea>
							</div>
						</div>

						<input type="hidden" value="<?php echo $results->tour_id;?>" name="tour_id" />
						<input type="hidden" value="<?php echo $results->tour_type;?>" name="tour_type-item" />




						<div class="row">
							<div class="col-md-12" style=" margin:auto; ">
								<div class="form-group">
									<input type="submit" value="Send" class="btn btn-primary py-2 px-4 send-btn"
										style="height: 50px !important; border-radius: 5px; margin-left: 60px; margin-top:20px; background-color: #ffc600; color: #343242; font-weight: 700; border: 2px solid transparant;">
								</div>
							</div>
						</div>
					</form>


				</div>
			</div>

		</div>


		<div class="col-lg-9">

			<h1 class="mb-3" style="font-size:50px; font-weigh:800 !important;">
				<?php echo ucwords($results->name); ?>
			</h1>

			<div class="tour_item-image"
				style="display:flex; justify-content:flex-end; align-items:flex-end; width:100%; margin-bottom:50px; height:30em; background-size:cover; background-image: url('<?php echo base_url().'assets/images/tours/'.$results->photo_id; ?>');">


				<div class="col-5" style="padding-bottom: 15px;">
					<div class="card tab-card"
						style="float:right !important; border: none; box-shadow: 0 2px 6px #000000 !important;">
						<div class="card-header tab-card-header" style="background-color:#ffc600;">
							<ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a style="font-weight:600 !important; text-transform: uppercase;"
										class="nav-link active show" id="one-tab" data-toggle="tab" href="#one"
										role="tab" aria-controls="One" aria-selected="true">3 Star</a>
								</li>
								<li class="nav-item">
									<a style="font-weight:600 !important; text-transform: uppercase;" class="nav-link"
										id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two"
										aria-selected="false">4 Star</a>
								</li>
								<li class="nav-item">
									<a style="font-weight:600 !important; text-transform: uppercase;" class="nav-link"
										id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three"
										aria-selected="false">5 Star</a>
								</li>
							</ul>
						</div>

						<div class="tab-content" id="myTabContent"
							style="border-bottom: 5px solid #ffc600; border-left: 5px solid #ffc600; border-right: 5px solid #ffc600; border-bottom-left-radius: 5px !important;border-bottom-right-radius: 5px !important;">
							<div class="tab-pane fade show active p-3" id="one" role="tabpanel"
								aria-labelledby="one-tab">
								<h5 class="card-title"
									style="text-align:center; font-family: 'Kaushan Script', cursive; font-size:28px;">
									Tour Price :
									<?php echo (isset($prices[0]->price) ? '$'.$prices[0]->price.'/-' : 'Unavailable');?>
								</h5>
								<p class="card-text"></p>

							</div>
							<div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
								<h5 class="card-title"
									style="text-align:center; font-family: 'Kaushan Script', cursive; font-size:28px;">
									Tour Price :
									<?php echo (isset($prices[1]->price) ? '$'.$prices[1]->price.'/-' : 'Unavailable');?>
								</h5>
								<p class="card-text"></p>

							</div>
							<div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
								<h5 class="card-title"
									style="text-align:center; font-family: 'Kaushan Script', cursive; font-size:28px;">
									Tour Price :
									<?php echo (isset($prices[2]->price) ? '$'.$prices[2]->price.'/-' : 'Unavailable');?>
								</h5>
								<p class="card-text"></p>

							</div>

						</div>
					</div>
				</div>

			</div>
			<div class="" style="margin-right:0 !important;">
				<div class="intro-section">
					<div class=" slider-text align-items-center">
						<div class=" ">
							<h1 class="mb-3">Introduction</h1>
						</div>
					</div>
					<h3 class="sub--para-itenary mb-5 ">
						<?php echo $results->introduction;?>
					</h3><br>
				</div>


				<div class="container">


				</div>
				<div class="panel with-nav-tabs panel-primary" style="box-shadow: 0 2px 6px #777 !important;">
					<div class="panel-heading">

						<ul class="nav nav-tabs tourTab" id="">
							<li class="nav-item active">
								<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
									aria-controls="home" aria-selected="true">Highlights</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab"
									aria-controls="profile" aria-selected="false">Tour</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
									aria-controls="contact" aria-selected="false">Services</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="inquiry-tab" data-toggle="tab" href="#inquire" role="tab"
									aria-controls="contact" aria-selected="false">Inquiry</a>
							</li>
						</ul>

					</div>
				</div>
				<div class="panel-body" style="box-shadow: 0 2px 6px #000000 !important;">
					<div class="tab-content">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"
								style="width:80%; margin:auto;">
								<div class="col-md-12 col-sm-12 ftco-animate">
									<h1 class="mb-3">Map</h1>
									<div class="tour_item-image"
										style="height:30em; background-size:cover; background-image: url('<?php echo base_url().'assets/images/tours/'.$results->map_id; ?>'); margin:auto;">
									</div>
								</div>

								<div class="row slider-text align-items-center" style="margin-top:20px;">
									<div class="col-md-12 col-sm-12 ftco-animate">
										<h1 class="mb-3">Highlights</h1>
										<ul class="tours-itinerary">

											<?php foreach($hightlights as $hightlights) : ?>

											<li class="tours-itinerary-item-details">
												<img src="<?php echo base_url(); ?>assets/images/checkmark.png"
													class="tours-itinerary-icon" alt="">
												<?php echo $hightlights->highlights; ?>
											</li>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>

							</div>
							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"
								style="width:80%; margin:auto;">

								<div class="row slider-text align-items-center" style="margin-top:20px;">
									<div class="col-md-12 col-sm-12 ftco-animate">
										<h1 class="mb-3">Things You Can Do</h1>
										<ul class="tours-itinerary">

											<?php foreach($itineraries as $itinerary) : ?>
											<li class="tours-itinerary-item"> <img
													src="<?php echo base_url(); ?>assets/images/checkmark.png"
													class="tours-itinerary-icon" alt="">Day
												<?php echo $itinerary->item_number; ?>
											</li>
											<li class="tours-itinerary-item-details" style="font-size:16px; margin-bottom:40px;">
												<?php echo htmlspecialchars_decode($itinerary->item_details); ?>
											</li>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>





							</div>
							<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"
								style="width:80%; margin:auto;">

								<div class="row slider-text align-items-center" style="margin-top:20px;">
									<div class="col-md-12 col-sm-12 ftco-animate">

										<?php if(!empty($includes)) : ?>
										<h1 class="mb-3">Includes</h1>

										<ul class="tours-itinerary" style="display:flex; flex-direction:row;">

											<?php foreach($includes as $include) : ?>

											<li class="tours-itinerary-item">
												<img src="<?php echo base_url(); ?>assets/images/checkmark.png"
													class="tours-itinerary-icon" alt="">
												
											</li>
											<li class="tours-itinerary-item-details" style="margin-left:0px; font-size:18px; margin-bottom:40px;">
												<?php echo $include->includes; ?>
											</li>
											<?php endforeach; ?>
										</ul>

										<?php endif; ?>


										<?php if(!empty($excludes)) : ?>
										<h1 class="mb-3">Excludes</h1>

										<ul class="tours-itinerary" style="display:flex; flex-direction:row;">

											<?php foreach($excludes as $exclude) : ?>

											<li class="tours-itinerary-item">
												<img src="<?php echo base_url(); ?>assets/images/checkmark.png"
													class="tours-itinerary-icon" alt="">
												
											</li>
											<li class="tours-itinerary-item-details" style="margin-left:0px; font-size:18px; margin-bottom:40px;">
												<?php echo $exclude->excludes; ?>
											</li>
											<?php endforeach; ?>
										</ul>

										<?php endif; ?>


										<?php if(!empty($options)) : ?>
										<h1 class="mb-3">Options</h1>

										<ul class="tours-itinerary" style="display:flex; flex-direction:row;">

											<?php foreach($options as $option) : ?>

											<li class="tours-itinerary-item" >
												<img src="<?php echo base_url(); ?>assets/images/checkmark.png"
													class="tours-itinerary-icon" alt="">
											</li>
											<li class="tours-itinerary-item-details" style="margin-left:0px; font-size:18px; margin-bottom:40px;">
												<?php echo $option->options; ?>
											</li>
											<?php endforeach; ?>
										</ul>

										<?php endif; ?>




									</div>


								</div>


							</div>
							<div class="tab-pane fade" id="inquire" role="tabpanel" aria-labelledby="contact-tab"
								style="width:80%; margin:auto;">

								<form action="<?php echo site_url('inquirycontroller/tourInquire');?>" method="post"
									class="tourInquiry_form ftco-animate">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="name"
												style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Name</label>
											<input id="name" name="name" type="text" class="form-control"
												value="<?php echo set_value('name');?>" placeholder="Your Name"
												required>
										</div>
										<div class="col-md-6 form-group">
											<label for="email"
												style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Email</label>
											<input id="email" name="email" type="email" class="form-control"
												value="<?php echo set_value('email');?>" placeholder="Your Email"
												required>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="phone"
												style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;"
												data-toggle="tooltip" data-placement="top"
												title="Please enter your whatsapp or viber number 🙂">Phone Number
												❕</label>
											<input id="phone" name="phone" type="text" class="form-control"
												value="<?php echo set_value('phone');?>"
												placeholder="Phone Number eg: +941123456789" required>
										</div>
										<div class="col-md-6 form-group">
											<label for="country"
												style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Country</label>
											<input name="country" type="text" class="form-control"
												value="<?php echo set_value('country');?>" placeholder="Your Country"
												required>
										</div>
									</div>
									<div class="row">
										<div class="select-wrap col-md-6 group mb-3">
											<label for="num-of-adults"
												style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Number
												of Adults</label>
											<select id="num-of-adults" name="num-of-adults" class="form-control"
												required>
												<option value="" class="form-control-option-white-top">Number of Adults
												</option>
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
											<label for="num-of-children"
												style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Number
												of Children(below 12yrs old)</label>
											<select id="num-of-children" name="num-of-children" class="form-control"
												required>
												<option value="" class="form-control-option-white-top">Number of
													Children</option>
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
											<label for="checkin_date"
												style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Arrival
												Date</label>
											<div class="check-in one-third mb-3"><input name="check-in-date" type="text"
													id="checkin_date" class="form-control"
													placeholder="Approx Arival Date" required></div>
										</div>
										<div class="col-md-6">
											<label for="number-of-days"
												style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Number
												of days planing to stay</label>
											<input id="number-of-days" name="number-of-days" type="text"
												class="form-control" value="<?php echo set_value('number-of-days');?>"
												placeholder="Number of days" required>
										</div>
									</div>
									<div class="row">
										<div class="select-wrap col-md-6 group mb-3">
											<label for="hotel_type"
												style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Hotel
												Type</label>
											<select id="hotel_type" name="hotel_type" class="form-control" required>
												<option value="" class="form-control-option-white">Hotel Type</option>
												<option value="standard" class="form-control-option-white">Standard
												</option>
												<option value="3 star" class="form-control-option-white">3 Star</option>
												<option value="4 star" class="form-control-option-white">4 Star</option>
												<option value="5 star" class="form-control-option-white">5 Star</option>
												<option value="bouteque hotels" class="form-control-option-white">
													Bouteque Hotels</option>
												<option value="villas" class="form-control-option-white">Villas</option>
												<option value="apartments" class="form-control-option-white">Apartments
												</option>
												<option value="rent a house" class="form-control-option-white">Rent a
													House</option>
											</select>
										</div>
									</div>


									<div class="row">
										<div class="col-md-12 form-group">
											<label for="message"
												style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Message</label>
											<textarea id="message" name="message" cols="120" rows="7"
												class="form-control"
												placeholder="Tell us more about what your need 🙂 (max 100 words)"
												required><?php echo set_value('name');?></textarea>
										</div>
									</div>

									<input type="hidden" value="<?php echo $results->tour_id;?>" name="tour_id" />
									<input type="hidden" value="<?php echo $results->tour_type;?>"
										name="tour_type-item" />

									<div class="g-recaptcha" style="margin-bottom: 20px;"
										data-sitekey="6Le8HJEUAAAAAHg1eHa0e7U5Fw3O9djmgn9agkvc"></div>
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
					</div>
				</div>
			</div>

		</div>

	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-12 mb-5">
			<div class="row slider-text align-items-center">
				<div class="col-md-12 col-sm-12 ftco-animate">
					<h1 class="mb-3 mt-5">Tours You may also like</h1>
				</div>
			</div>

			<div class="row ">

				<?php foreach($suggestions as $suggestion) : ?>
				<div class="col-md-4 col-lg-4 mb-4 ftco-animate">
					<a href="<?php echo site_url('tours/'.$suggestion->tour_id);?>" class="block-5"
						style="background-image: url('<?php echo base_url().'assets/images/tours/'.$suggestion->photo_id; ?>');">
						<div class="text">
							<span class="price">$
								<?php echo $suggestion->price; ?></span>
							<h3 class="heading">
								<?php echo $suggestion->name; ?>
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



<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo base_url();?>assets/js/tourInquiry.js"></script>

<script>
	$(document).on('click', '.panel-heading ul li', function () {
		$(this).addClass('active').siblings().removeClass('active');
	});

</script>

<!-- <script async defer src="https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452&key=YOUR_API_KEY">
</script> -->

