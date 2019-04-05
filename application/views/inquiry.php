<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>Sunway Holidays - Inquiry</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<!-- CSS Files -->
	<link href="<?php echo base_url();?>assets2/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets2/css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
	<link href="<?php echo base_url();?>https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url();?>assets2/css/themify-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>assets2/css/intlTelInput.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets2/css/demo1.css">

</head>

<body style="background-color:#e3e3e3;">

	<style>

		@import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css");

		html{
			scroll-behavior: smooth;
		}

		body{
			margin:0;
			padding:0;
		}

		label{
			font-size:15px;
		}

		.star {
			height: 12px !important;
			width: 12px !important;
			background-size: cover;
		}

		.maldives-icon{
			height: 25px !important;
			width: 25px !important;
			background-size: cover;
		}

		.intl-tel-input {
			display: table-cell;
		}

		.intl-tel-input .selected-flag {
			z-index: 4;
		}

		.intl-tel-input .country-list {
			z-index: 5;
		}

		.input-group .intl-tel-input .form-control {
			border-top-left-radius: 4px;
			border-top-right-radius: 0;
			border-bottom-left-radius: 4px;
			border-bottom-right-radius: 0;
		}

		.box{
			margin:40px;
			width:80%;
			height: auto;
			background-color: #ffffff;
			margin-top:100px;
			border-radius: 5px;
		}

		.radio-box{
			width: 147.5px;
			height: 189px;
			background-color:#F2F2ED;
			padding: 10px 0;
			border-radius: 5px;
			display:flex;
			flex-direction:column;
			transition: transform 0.2s, box-shadow .2s;
			margin-bottom:10px;
			
		}
		.radio-box-2{
			width: 100px;
			height: 120px;
			background-color:#F2F2ED;
			padding: 10px 0;
			border-radius: 5px;
			display:flex;
			flex-direction:column;
			transition: transform 0.2s, box-shadow .2s;
			margin-bottom:10px;
			
		}

		.radio-box:hover {
			transform: translateY(-10px);
			box-shadow: 0px 12px 17px -7px rgba(0, 0, 0, 0.3);
			cursor: pointer;

		}

		.radio-box-2:hover {
			transform: translateY(-10px);
			box-shadow: 0px 12px 17px -7px rgba(0, 0, 0, 0.3);
			cursor: pointer;

		}

		.radio-btn{
			display:none;
		}

		.radio-btn:checked + .radio-box {
			background-color:#7E9C9D !important;
		}

		.radio-box--image{
			width:140px;
			height:100px;
			margin:0 auto;
			background-image: url('assets/images/hotel-1.jpg');
			background-size:cover;
			background-repeat:no-repeat;
		}
		.radio-box--image-2{
			width:60px;
			height:60px;
			margin:0 auto;
			background-image: url('assets/images/hotel-1.jpg');
			background-size:cover;
			background-repeat:no-repeat;
		}
		.hotel-box--image-2{
			/* width:16px !important;
			height:16px !important; */
			width:45px;
			height: 20px;
			margin:0 auto;
			background-image: url('assets2/img/3.png');
			background-size:cover;
		
		}

		

		.radio-box--text{
			align-self:center;
			font-size:15px;
			font-weight:800;
			text-transform:uppercase;
			margin-top:130px;
			margin-left:auto;
			margin-right:auto;
			text-align:center;
			color:#A9A9A5;
		}
	
		.radio-box--text-2{
			align-self:center;
			font-size:15px;
			font-weight:800;
			text-transform:uppercase;
			margin-top:80px;
			margin-left:auto;
			margin-right:auto;
			text-align:center;
			color:#A9A9A5;
		}
		.radio-box--text-3{
			align-self:center;
			font-size:15px;
			font-weight:800;
			text-transform:uppercase;
			margin-top:40px;
			margin-left:auto;
			margin-right:auto;
			text-align:center;
			color:#A9A9A5;
		}
		.radio-box--text-4{
			align-self:center;
			font-size:15px;
			font-weight:800;
			text-transform:uppercase;
			margin-top:20px;
			margin-left:auto;
			margin-right:auto;
			text-align:center;
			color:#A9A9A5;
		}
	
	</style>


	<div class="jumbotron jumbotron-fluid" style="height: 400px; background-image: linear-gradient(to right bottom, rgba(77, 79, 84, 0.3), rgba(41, 41, 41, 0.3)),url('<?php echo base_url();?>assets/images/maldives.jpeg'); background-position:middle; background-size:cover; background-repeat: no-repeat;">
		<div class="container">
			<a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url();?>/assets/images/logo.jpg" alt="" style="height:100px; width:200px;"></a>
			<h1 class="display-4" style="color:#ffffff;">Tailor Made Inquiry</h1>
			<p class="lead" style="color:#ffffff;">This is a modified jumbotron that occupies the entire horizontal space of its
				parent.</p>
		</div>
	</div>

	<!--   Big container   -->
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<!--      Wizard container        -->
				<div class="wizard-container" style="margin-bottom: 100px;">
					<div class="card wizard-card" data-color="azure" id="wizard">
						<form action="inquirycontroller/inquire" method="post" class="inquiry_form">
							<!--        You can switch " data-color="azure" "  with one of the next bright colors: "blue", "green", "orange", "red"           -->

							<div class="wizard-header" id="top-section">
								<h3 class="wizard-title">Tailor Made Form</h3>
								<p class="category"></p>
							</div>

							<div class="wizard-navigation">
								<div class="progress-with-circle">
									<div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
								</div>
								<ul>
									<li>
										<a href="#details" data-toggle="tab">
											<div class="icon-circle">
												<i class="ti-list"></i>
											</div>
											Details
										</a>
									</li>
									<li>
										<a href="#captain" data-toggle="tab">
											<div class="icon-circle">
												<i class="ti-briefcase"></i>
											</div>
											Time
										</a>
									</li>
									<li>
										<a href="#description" data-toggle="tab">
											<div class="icon-circle">
												<i class="ti-user"></i>
											</div>
											Your Info
										</a>
									</li>
								</ul>
							</div>
							<div class="tab-content">
								<div class="tab-pane" id="details">
									<div class="row">
										<div class="col-sm-12">
											<h5 class="info-text">To have your free tailor made tour plan emailed, let us know your holiday preferences
												here.</h5>
										</div>

										<div class="form-group">
											<label class="col-sm-12 col-sm-offset-1" style="margin-bottom:10px;">1) Which experiences would you like
												most? (Select all that is applicable)</label>
										</div>
										<div class="form-group">
											<div class="col-lg-12 col-md-12" style="margin-bottom:50px;">

												<div class="col-lg-3 col-md-3 col-sm-offset-1">
													<label for="culture" class="culture-label" id="culture-label">
														<div class="radio-box" id="checkbox-box-1">
															<div class="radio-box--image" style="background-image: url('<?php echo base_url()?>assets/images/culture-inquiry.jpg')">
																<h2 class="radio-box--text" id="radio-box--text">culture & heritage</h2>
															</div>
														</div>
													</label>
													<input type="checkbox" id="culture" value="culture & heritage" name="experience[]" class="radio-btn"
													 onclick="checkboxColorChange_1();">
												</div>

												<div class="col-lg-3 col-md-3">
													<label for="tea" class="tea-label">
														<div class="radio-box" id="checkbox-box-2">
															<div class="radio-box--image" style="background-image: url('<?php echo base_url()?>assets/images/tea.jpg')">
																<h2 class="radio-box--text" id="radio-box--text">tea country & landscape</h2>
															</div>
														</div>
													</label>
													<input type="checkbox" id="tea" value="tea country & landscape" name="experience[]" class="radio-btn"
													 onclick="checkboxColorChange_2();">
												</div>

												<div class="col-lg-3 col-md-3">
													<label for="animals" class="animal-label">
														<div class="radio-box" id="checkbox-box-3">
															<div class="radio-box--image" style="background-image: url('<?php echo base_url()?>assets/images/wild-life.jpg')">
																<h2 class="radio-box--text" id="radio-box--text">animals & wildlife</h2>
															</div>
														</div>
													</label>
													<input type="checkbox" id="animals" value="animals & wildlife" name="experience[]" class="radio-btn"
													 onclick="checkboxColorChange_3();">
												</div>
												<div class="col-lg-3 col-md-3 col-sm-offset-1">
													<label for="beach" class="beach-label" id="beach-label">
														<div class="radio-box" id="checkbox-box-4">
															<div class="radio-box--image" style="background-image: url('<?php echo base_url()?>assets/images/trinco.jpg')">
																<h2 class="radio-box--text" id="radio-box--text">beach leasure time</h2>
															</div>
														</div>
													</label>
													<input type="checkbox" id="beach" value="beach leasure time" name="experience[]" class="radio-btn" onclick="checkboxColorChange_4();">
												</div>

												<div class="col-lg-3 col-md-3">
													<label for="colombo" class="pace-label">
														<div class="radio-box" id="checkbox-box-5">
															<div class="radio-box--image" style="background-image: url('<?php echo base_url()?>assets/images/colombo.jpg')">
																<h2 class="radio-box--text" id="radio-box--text">colombo & shopping</h2>
															</div>
														</div>
													</label>
													<input type="checkbox" id="colombo" value="colombo & shopping" name="experience[]" class="radio-btn"
													 onclick="checkboxColorChange_5();">
												</div>

												<div class="col-lg-3 col-md-3">
													<label for="local" class="local-label">
														<div class="radio-box" id="checkbox-box-6">
															<div class="radio-box--image" style="background-image: url('<?php echo base_url()?>assets/images/local.jpg')">
																<h2 class="radio-box--text" id="radio-box--text">local experience</h2>
															</div>
														</div>
													</label>
													<input type="checkbox" id="local" value="local experience" name="experience[]" class="radio-btn" onclick="checkboxColorChange_6();">
												</div>

											</div>
										</div>

										<div class="form-group" style="margin-top:50px !important;">
											<label class="col-sm-8 col-sm-offset-1" style="margin-bottom:10px;">2) Which pace would suit you best?</label>
										</div>

										<div class="form-group">
											<div class="col-lg-12 col-md-12" style="margin-bottom:50px;">
												<div class="col-lg-3 col-md-3 col-sm-offset-1">
													<label for="active" class="pace-label">
														<div class="radio-box" id="pace-box-1">
															<div class="radio-box--image" style="background-image: url('<?php echo base_url()?>assets/images/active-i.jpg')">
																<h2 class="radio-box--text" id="radio-box--text-1">Active</h2>
															</div>
														</div>
													</label>
													<input type="radio" id="active" value="active" name="pace" class="radio-btn" onclick="colorChangeFirst();">
												</div>
												<div class="col-lg-3 col-md-3">
													<label for="soft" class="pace-label">
														<div class="radio-box" id="pace-box-2">
															<div class="radio-box--image" style="background-image: url('<?php echo base_url()?>assets/images/soft-active.jpg')">
																<h2 class="radio-box--text" id="radio-box--text-2">soft adventure</h2>
															</div>
														</div>
													</label>
													<input type="radio" id="soft" value="soft adventure" name="pace" class="radio-btn" onclick="colorChangeSecound();">
												</div>
												<div class="col-lg-3 col-md-3">
													<label for="relaxing" class="pace-label">
														<div class="radio-box" id="pace-box-3">
															<div class="radio-box--image" style="background-image: url('<?php echo base_url()?>assets/images/relax.jpg')">
																<h2 class="radio-box--text" id="radio-box--text-3">relaxing</h2>
															</div>
														</div>
													</label>
													<input type="radio" id="relaxing" value="relaxing" name="pace" class="radio-btn" onclick="colorChangeThird();">
												</div>
											</div>
										</div>

										<div class="form-group" style="margin-top:50px !important;">
											<label class="col-sm-8 col-sm-offset-1" style="margin-bottom:10px;">3) How many people will travel together
												in your private tour?</label>
										</div>
										<div class="form-group">
											<div class="col-lg-12 col-md-12" style="margin-bottom:50px;">
												<div class="col-lg-2 col-md-2 col-sm-offset-1" style="padding-right:5px;">
													<label for="solo" class="pace-label solo">
														<div class="radio-box-2" id="people-box-1">
															<div class="radio-box--image-2" style="background-image: url('<?php echo base_url();?>assets2/img/standing-up-man-.svg')">
																<h2 class="radio-box--text-2" id="people-box--text-1">solo</h2>
															</div>
														</div>
													</label>
													<input type="radio" id="solo" value="solo" name="people" class="radio-btn" onclick="colorChangePeople_1();">
												</div>
												<div class="col-lg-2 col-md-2" style="padding-right:5px;">
													<label for="couple" class="pace-label couple">
														<div class="radio-box-2" id="people-box-2">
															<div class="radio-box--image-2" style="background-image: url('<?php echo base_url();?>assets2/img/female-and-male-shapes-silhouettes.svg')">
																<h2 class="radio-box--text-2" id="people-box--text-2">couple</h2>
															</div>
														</div>
													</label>
													<input type="radio" id="couple" value="couple" name="people" class="radio-btn" onclick="colorChangePeople_2();">
												</div>
												<div class="col-lg-2 col-md-2" style="padding-right:5px;">
													<label for="family" class="pace-label family">
														<div class="radio-box-2" id="people-box-3">
															<div class="radio-box--image-2" style="background-image: url('<?php echo base_url();?>assets2/img/family-of-three.svg')">
																<h2 class="radio-box--text-2" id="people-box--text-3">family</h2>
															</div>
														</div>
													</label>
													<input type="radio" id="family" value="family" name="people" class="radio-btn" onclick="colorChangePeople_3();">
													<div id="form-family"></div>
												</div>
												<div class="col-lg-2 col-md-2" style="padding-right:5px;">
													<label for="group" class="pace-label group">
														<div class="radio-box-2" id="people-box-4">
															<div class="radio-box--image-2" style="background-image: url('<?php echo base_url();?>assets2/img/group-of-men.svg')">
																<h2 class="radio-box--text-2" id="people-box--text-4">group</h2>
															</div>
														</div>
													</label>
													<input type="radio" id="group" value="group" name="people" class="radio-btn" onclick="colorChangePeople_4();">
													<div id="form-group"></div>
												</div>
											</div>
										</div>
										<div class="form-group" style="margin-top:50px !important;">
											<label class="col-sm-8 col-sm-offset-1" style="margin-bottom:10px;">4) Preferred accommodation type</label>
										</div>
										<div class="form-group">
											<div class="col-lg-12 col-md-12">
												<div class="col-lg-2 col-md-2 col-sm-offset-1" style="padding-right:5px;">
													<label for="3 star" class="pace-label">
														<div class="radio-box-2" id="hotel-box-1">
															<div class="hotel-box--image-container">
																<div class="hotel-box--image-2" style="background-image: url('<?php echo base_url();?>assets2/img/3.png');">

																</div>
																<h2 class="radio-box--text-3" id="hotel-box--text-1">3 star hotel</h2>
															</div>
														</div>
													</label>
													<input type="radio" id="3 star" value="3 star" name="accomadation" class="radio-btn" onclick="colorChangeHotel_1();">
												</div>
												<div class="col-lg-2 col-md-2" style="padding-right:5px;">
													<label for="4 star" class="pace-label">
														<div class="radio-box-2" id="hotel-box-2">
															<div class="hotel-box--image-container">
																<div class="hotel-box--image-2" style="background-image: url('<?php echo base_url();?>assets2/img/4.png'); width:60px !important;">
																</div>
																<h2 class="radio-box--text-3" id="hotel-box--text-2">4 star hotel</h2>
															</div>
														</div>
													</label>
													<input type="radio" id="4 star" value="4 star" name="accomadation" class="radio-btn" onclick="colorChangeHotel_2();">
												</div>
												<div class="col-lg-2 col-md-2" style="padding-right:5px;">
													<label for="5 star" class="pace-label">
														<div class="radio-box-2" id="hotel-box-3">
															<div class="hotel-box--image-container">
																<div class="hotel-box--image-2" style="background-image: url('<?php echo base_url();?>assets2/img/5.png'); width:75px !important;">
																</div>
																<h2 class="radio-box--text-3" id="hotel-box--text-3">5 star hotel</h2>
															</div>
														</div>
													</label>
													<input type="radio" id="5 star" value="5 star" name="accomadation" class="radio-btn" onclick="colorChangeHotel_3();">
												</div>
											</div>
											<div class="form-group col-sm-offset-1" style="margin-bottom:50px !important; margin-right: 11%;">
												<label>Remarks on preferred accommodation type:</label>
												<textarea type="text" class="form-control" name="accomadation_remarks" id="exampleInputEmail1" placeholder=""></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="captain">
									<h5 class="info-text">Tell us more about your holiday expectations</h5>
									<div class="row">

										<div class="col-sm-5 col-sm-offset-1 mt-4">
											<div class="form-group ">
												<label>5) Tour start date</label>
												<div class="form-group">
													<div class='input-group date' id='datetimepicker1'>
														<input type='text' class="form-control" name="start_date" required />
														<span class="input-group-addon">
															<span class="glyphicon glyphicon-calendar"></span>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-sm-offset-1 mt-4" style="margin-bottom: 20px;">
											<div class="form-group ">
												<label><input type="radio" name="tour_status" value="option-1" style="width: 15px; height:15px; margin-right:5px; "
													 class="active" checked>I have already booked my flights / I am certain of the dates</label>
												<label><input type="radio" name="tour_status" value="option-2" style="width: 15px; height:15px; margin-right:5px; ">Dates
													are approximate in the selected month</label><br>
												<label><input type="radio" name="tour_status" value="option-3" style="width: 15px; height:15px; margin-right:5px; ">I
													am not sure yet</label><br>

											</div>
										</div>
										<div class="col-sm-5 col-sm-offset-1" style="margin-bottom: 20px;">
											<div class="form-group">
												<label>6) Duration</label>
												<input type="text" class="form-control" name="duration" id="exampleInputEmail1" name="duration" placeholder=""
												 required>
											</div>
										</div>

										<div class="col-sm-10 col-sm-offset-1">
											<div class="form-group">
												<label>7) Would you like to add a few days beach in Maldives at the end of the tour?</label>
											</div>
										</div><br>
										<div class="col-sm-3 col-sm-offset-1" style="margin-bottom: 20px;">
												<label for="yes" class="pace-label maldives-yes">
													<div class="radio-box-2" id="maldives-box-1">
														<div class="hotel-box--image-container">
															<div class="radio-box--image-2" style="background-image: url('<?php echo base_url();?>assets2/img/correct.svg');">
															</div>
															<h2 class="radio-box--text-4" id="maldives-box-text-1">Yes</h2>
														</div>
													</div>
												</label>
												<input type="radio" id="yes" value="1" name="maldives" class="radio-btn" onclick="colorChangeMaldives_1();">
											<div id="maldives-section"></div>
										</div>
										<div class="col-sm-3 col-sm-offset-1" style="margin-bottom: 20px;">
											<label for="no" class="pace-label maldives-nop">
													<div class="radio-box-2" id="maldives-box-2">
														<div class="hotel-box--image-container">
															<div class="radio-box--image-2" style="background-image: url('<?php echo base_url();?>assets2/img/forbidden-mark.svg');">
															</div>
															<h2 class="radio-box--text-4" id="maldives-box-text-2">No</h2>
														</div>
													</div>
												</label>
												<input type="radio" id="no" value="0" name="maldives" class="radio-btn" onclick="colorChangeMaldives_2();">
										</div>

										<div class="col-sm-8 col-sm-offset-1" style="margin-bottom: 20px;">
											<div class="form-group">
												<label>8) Budget per person for this trip (Excluding flights) </label>
												<select class="form-control" name="budget" required id="budget">
													<option disabled="" selected="">- choose a space -</option>
													<option value="800-1100">800 – 1100 USD</option>
													<option value="1100-1500">1100 – 1500 USD onwards</option>
													<option value="1500-2000">1500-2000 USD onwards</option>
													<option value="2000-3000">2000-3000 USD onwards</option>
													<option value="5000+">5000 USD onwards </option>
												</select>
											</div>
										</div>
										<div class="col-sm-11 col-sm-offset-1" style="margin-bottom: 20px;">
											<div class="form-group " style="margin-bottom:50px !important; margin-right: 11%;">
												<label>9) Additional Information on your holiday plans</label>
												<textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="message" name="message"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="description">
									<div class="row">

										<h5 class="info-text">Complete the following information and receive a FREE non-binding tailor made tour</h5>
										<div class="col-sm-5 col-sm-offset-1">
											<div class="form-group">
												<label>First Name</label>
												<input type="text" class="form-control" id="first_name" name="first_name" placeholder="" required>
											</div>
										</div>
										<div class="col-sm-5 ">
											<div class="form-group">
												<label>Last Name</label>
												<input type="text" class="form-control" id="last_name" name="last_name" placeholder="" required>
											</div>
										</div>

										<div class="col-sm-5 col-sm-offset-1">
											<div class="form-group">
												<label>Age Range</label>
												<select class="form-control" name="age_range" id="age_range" required>
													<option disabled="" selected="">- choose your age -</option>
													<option value="25-34">25 – 34 yrs</option>
													<option value="35-44">35 – 44 yrs</option>
													<option value="45-54">45 – 54 yrs</option>
													<option value="55-64">55 – 64 yrs</option>
													<option value="60+">65yrs & above </option>
												</select>
											</div>
										</div>
										<hr>
										<div class="col-sm-10 col-sm-offset-1">
											<div class="form-group">
												<label>Contact Number</label>
												<div class="input-group">
													<input id="phone" name="phone" type="tel" class="form-control" required>
												</div>
												<p class="description">If you share your contact number, our local travel consult could contact you at a
													time
													convenient for you, to further discuss your holiday plans, and provide first-hand information and travel
													tips to Sri
													Lanka. This will help TO create the tailor made tour plan most suited to you. </p>
											</div>
										</div>
										<div class="col-sm-7 col-sm-offset-1" style="margin-bottom:30px;">
											<div class="form-group">
												<label>Email</label>
												<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="">
												<p class="description">We will email the tailor made tour plan to this email. </p>
											</div>
										</div>
										<div class="col-sm-12 col-sm-offset-1">
											<div class="form-group">
												<label class="checkbox-inline" name="updates" style="font-weight: 600;"><input type="checkbox" value="1" name="updates"
													 style="width:15px; height: 15px;">I would like to receive monthly travel updates about Sri Lanka.</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wizard-footer">
								<div class="pull-right">
									<input type='button' class='btn btn-next btn-fill btn-primary btn-wd next-btn' name='next' value='Next' />
									<input type="submit" class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Finish' />
								</div>

								<div class="pull-left">
									<input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
								</div>
								<div class="clearfix"></div>
							</div>
						</form>
					</div>
				</div> <!-- wizard container -->
			</div>
			<div class="col-sm-4">
				<div class="box">

					<h3 class="text-justify" style="padding-top:10px; padding-bottom:10px; text-align:center;">Recommended <br> Tours</h3>
				</div>
				<?php foreach($suggestions as $suggestion) : ?>

				<div class="card" style="width: 30rem; margin:40px; padding:10px;">
					<img class="card-img-top" src="<?php echo base_url().'assets/images/tours/'.$suggestion->photo_id; ?>" alt="Card image cap"
					 style="width:100%; height:auto; overflow:hidden;">
					<div class="card-body">
						<h5 class="card-title">
							<?php echo $suggestion->name; ?>
						</h5>
						<p class="card-text">
							<?php echo $suggestion->description; ?>
						</p>
						<a href="<?php echo site_url('tours/'.$suggestion->tour_id);?>" class="btn btn-primary" style="margin-left:60px;">See
							More Details</a>
					</div>
				</div>

				<?php endforeach; ?>
			</div>

		</div> <!-- row -->
	</div> <!--  big container -->

	<!--   Core JS Files   -->
	<script src="<?php echo base_url();?>assets2/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets2/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets2/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<!--  Plugin for the Wizard -->
	<script src="<?php echo base_url();?>assets2/js/demo.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets2/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="<?php echo base_url();?>assets2/js/jquery.validate.min.js" type="text/javascript"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

	<script src="<?php echo base_url();?>assets2/js/intlTelInput.js"></script>


	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="<?php echo base_url();?>assets2/js/tailorMade-form.js"></script>

</body>

</html>
