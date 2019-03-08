<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>Paper Bootstrap Wizard by Creative Tim | Free Bootstrap Wizard</title>

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
	
	</style>


	<div class="jumbotron jumbotron-fluid" style="height: 400px; background-image: linear-gradient(to right bottom, rgba(77, 79, 84, 0.3), rgba(41, 41, 41, 0.3)),url('<?php echo base_url();?>assets/images/maldives.jpeg'); background-position:middle; background-size:cover; background-repeat: no-repeat;">
	<div class="container">
	<a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url();?>/assets/images/logo.jpg" alt="" style="height:100px; width:200px;"></a> 
		<h1 class="display-4" style="color:#ffffff;">Tailor Made Inquiry</h1>
		<p class="lead" style="color:#ffffff;">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
	</div>
	</div>

	 <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8">
		            <!--      Wizard container        -->
		            <div class="wizard-container" style="margin-bottom: 100px;">
		                <div class="card wizard-card" data-color="azure" id="wizard">
		                    <form action="" method="">
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
		                                    	<h5 class="info-text">To have your free tailor made tour plan emailed, let us know your holiday preferences here.</h5>
											</div>
											
											<div class="form-group">
												<label class="col-sm-12 col-sm-offset-1" style="margin-bottom:10px;">1) Which experiences would you like most? (Select all that is applicable)</label>
											</div>
											<div class="form-group">
												<div class="col-lg-12 col-md-12" style="margin-bottom:50px;">
													<div class="col-lg-3 col-md-3 col-sm-offset-1">
														<div class="choice" data-toggle="wizard-checkbox" style="margin-top:0;">
															<input type="checkbox" name="jobb" value="Design">
															<div class="card card-checkboxes card-hover-effect">
																<img class="card-img-top" src="<?php echo base_url();?>assets2/img/pexels-photo-76093.jpeg" alt="Card image cap" style='width:140px; height:100px; background-size:cover; '>
																<div class="card-body">
																	<h5 class="card-title" style="font-size:16px; font-weight:600; text-transform:uppercase;">CULTURE & HERITAGE</h5>
																</div>
															</div>
														</div>
													</div>											
													<div class="col-lg-3 col-md-3">
														<div class="choice" data-toggle="wizard-checkbox" style="margin-top:0;">
															<input type="checkbox" name="jobb" value="Design">
															<div class="card card-checkboxes card-hover-effect">
																<img class="card-img-top" src="<?php echo base_url();?>assets2/img/pexels-photo-76093.jpeg" alt="Card image cap" style='width:140px; height:100px; background-size:cover; '>
																<div class="card-body">
																	<h5 class="card-title" style="font-size:16px; font-weight:600; text-transform:uppercase;">TEA COUNTRY & LANDSCAPES</h5>
																</div>
															</div>
														</div>
													</div>											
													<div class="col-lg-3 col-md-3 ">
														<div class="choice" data-toggle="wizard-checkbox" style="margin-top:0;">
															<input type="checkbox" name="jobb" value="Design">
															<div class="card card-checkboxes card-hover-effect">
																<img class="card-img-top" src="<?php echo base_url();?>assets2/img/pexels-photo-76093.jpeg" alt="Card image cap" style='width:140px; height:100px; background-size:cover; '>
																<div class="card-body">
																	<h5 class="card-title" style="font-size:16px; font-weight:600; text-transform:uppercase;">ANIMALS & WILDLIFE</h5>
																</div>
															</div>
														</div>
													</div>											
													<div class="col-lg-3 col-md-3 col-sm-offset-1">
														<div class="choice" data-toggle="wizard-checkbox" style="margin-top:0;">
															<input type="checkbox" name="jobb" value="Design">
															<div class="card card-checkboxes card-hover-effect">
																<img class="card-img-top" src="<?php echo base_url();?>assets2/img/pexels-photo-76093.jpeg" alt="Card image cap" style='width:140px; height:100px; background-size:cover; '>
																<div class="card-body">
																	<h5 class="card-title" style="font-size:16px; font-weight:600; text-transform:uppercase;">BEACH LEISURE TIME</h5>
																</div>
															</div>
														</div>
													</div>											
													<div class="col-lg-3 col-md-3">
														<div class="choice" data-toggle="wizard-checkbox" style="margin-top:0;">
															<input type="checkbox" name="jobb" value="Design">
															<div class="card card-checkboxes card-hover-effect">
																<img class="card-img-top" src="<?php echo base_url();?>assets2/img/pexels-photo-76093.jpeg" alt="Card image cap" style='width:140px; height:100px; background-size:cover; '>
																<div class="card-body">
																	<h5 class="card-title" style="font-size:16px; font-weight:600; text-transform:uppercase;">COLOMBO & SHOPPING</h5>
																</div>
															</div>
														</div>
													</div>											
													<div class="col-lg-3 col-md-3 ">
														<div class="choice" data-toggle="wizard-checkbox" style="margin-top:0;">
															<input type="checkbox" name="jobb" value="Design">
															<div class="card card-checkboxes card-hover-effect">
																<img class="card-img-top" src="<?php echo base_url();?>assets2/img/pexels-photo-76093.jpeg" alt="Card image cap" style='width:140px; height:100px; background-size:cover; '>
																<div class="card-body">
																	<h5 class="card-title" style="font-size:16px; font-weight:600; text-transform:uppercase;">LOCAL EXPERIENCES</h5>
																</div>
															</div>
														</div>
													</div>											
																								
												</div>
											</div>
											<div class="form-group" style="margin-top:50px !important;">
												<label class="col-sm-8 col-sm-offset-1" style="margin-bottom:10px;">2)  Which pace would suit you best?</label>
											</div>
											<div class="form-group">
												<div class="col-lg-12 col-md-12" style="margin-bottom:50px;">
													<div class="col-lg-3 col-md-3 col-sm-offset-1">
														<div class="choice" data-toggle="wizard-radio" style="margin-top:0;">
															<input type="checkbox" name="pace" value="Design" class="suitable_for">
															<div class="card card-checkboxes card-hover-effect">
																<img class="card-img-top" src="<?php echo base_url();?>assets2/img/pexels-photo-76093.jpeg" alt="Card image cap" style='width:140px; height:100px; background-size:cover; '>
																<div class="card-body">
																	<h5 class="card-title" style="font-size:16px; font-weight:600; text-transform:uppercase;">ACTIVE</h5>
																</div>
															</div>
															<p style="text-align: center; font-size:12px;">see as much as possible of Sri Lanka during my Trip</p>
														</div>
													</div>											
													<div class="col-lg-3 col-md-3">
														<div class="choice" data-toggle="wizard-radio" style="margin-top:0;">
															<input type="checkbox" name="pace" value="Design" class="suitable_for">
															<div class="card card-checkboxes card-hover-effect">
																<img class="card-img-top" src="<?php echo base_url();?>assets2/img/pexels-photo-76093.jpeg" alt="Card image cap" style='width:140px; height:100px; background-size:cover; '>
																<div class="card-body">
																	<h5 class="card-title" style="font-size:16px; font-weight:600; text-transform:uppercase;">SOFT ADVENTURE </h5>
																</div>
															</div>
														</div>
														<p style="text-align: center; font-size:12px;">Combine fun activities like cycling/ trekking/ canoeing … etc</p>
													</div>											
													<div class="col-lg-3 col-md-3 ">
														<div class="choice" data-toggle="wizard-radio" style="margin-top:0;">
															<input type="checkbox" name="pace" value="Design" class="suitable_for">
															<div class="card card-checkboxes card-hover-effect">
																<img class="card-img-top" src="<?php echo base_url();?>assets2/img/pexels-photo-76093.jpeg" alt="Card image cap" style='width:140px; height:100px; background-size:cover; '>
																<div class="card-body">
																	<h5 class="card-title" style="font-size:16px; font-weight:600; text-transform:uppercase;">RELAXING</h5>
																</div>
															</div>
														</div>
														<p style="text-align: center; font-size:12px;">Experience Sri Lanka at a leisurely pace</p>
													</div>
																						
												</div>
											</div>
											<div class="form-group" style="margin-top:50px !important;">
												<label class="col-sm-8 col-sm-offset-1" style="margin-bottom:10px;">3)  How many people will travel together in your private tour?</label>
											</div>
											<div class="form-group" >
												<div class="col-lg-12 col-md-12" style="margin-bottom:50px;">
													<div class="col-lg-2 col-md-2 col-sm-offset-1" style="padding-right:5px;">
														<div class="choice solo" data-toggle="wizard-radio" style="margin-top:0;">
															<input type="checkbox" name="pace" value="Design" class="suitable_for">
															<div class="card card-checkboxes card-hover-effect">
																<img class="card-img-top" src="<?php echo base_url();?>assets2/img/standing-up-man-.svg" alt="Card image cap" style='width:50px; height:50px; background-size:cover; '>
																<div class="card-body">
																	<h5 class="card-title" style="font-size:16px; font-weight:600; text-transform:uppercase;">SOLO</h5>
																</div>
															</div>
															
														</div>
													</div>											
													<div class="col-lg-2 col-md-2" style="padding-right:5px; padding-left:5px;">
														<div class="choice couple" data-toggle="wizard-radio" style="margin-top:0;">
															<input type="checkbox" name="pace" value="Design" class="suitable_for">
															<div class="card card-checkboxes card-hover-effect">
																<img class="card-img-top" src="<?php echo base_url();?>assets2/img/female-and-male-shapes-silhouettes.svg" alt="Card image cap"
																	style='width:50px; height:50px; background-size:cover; '>
																<div class="card-body">
																	<h5 class="card-title" style="font-size:16px; font-weight:600; text-transform:uppercase;">COUPLE</h5>
																</div>
															</div>
														</div>
														
													</div>											
													<div class="col-lg-2 col-md-2 " style="padding-right:5px; padding-left:5px;">
														<div class="choice family" data-toggle="wizard-radio" style="margin-top:0;">
															<input type="checkbox" name="pace" value="Design" class="suitable_for ">
															<div class="card card-checkboxes card-hover-effect">
																<img class="card-img-top" src="<?php echo base_url();?>assets2/img/family-of-three.svg" alt="Card image cap"
																	style='width:50px; height:50px; background-size:cover; '>
																<div class="card-body">
																	<h5 class="card-title" style="font-size:16px; font-weight:600; text-transform:uppercase;">FAMILY</h5>
																</div>
															</div>
														</div>
														<div id="form-family"></div>
														
													</div>
													<div class="col-lg-2 col-md-2" style="padding-right:5px; padding-left:5px;">
														<div class="choice group" data-toggle="wizard-radio" style="margin-top:0;">
															<input type="checkbox" name="pace" value="Design" class="suitable_for">
															<div class="card card-checkboxes card-hover-effect">
																<img class="card-img-top" src="<?php echo base_url();?>assets2/img/group-of-men.svg" alt="Card image cap"
																	style='width:50px; height:50px; background-size:cover; '>
																<div class="card-body">
																	<h5 class="card-title" style="font-size:16px; font-weight:600; text-transform:uppercase;">GROUP</h5>
																</div>
															</div>
														</div>
														<div id="form-group"></div>								
													</div>
												</div>
											</div>
											<div class="form-group" style="margin-top:50px !important;">
												<label class="col-sm-8 col-sm-offset-1" style="margin-bottom:10px;">4)  Preferred accommodation type</label>
											</div>
											<div class="form-group">
												<div class="col-lg-12 col-md-12">
													<div class="col-lg-2 col-md-2 col-sm-offset-1" style="padding-right:5px;">
														<div class="choice" data-toggle="wizard-radio" style="margin-top:0;">
															<input type="checkbox" name="pace" value="Design" class="suitable_for">
															<div class="card card-checkboxes card-hover-effect">
																<img class="card-img-top star" src="<?php echo base_url();?>assets2/img/bookmark-star.svg" alt="Card image cap" style='width:50px; height:50px; background-size:cover; '>
																<img class="card-img-top star" src="<?php echo base_url();?>assets2/img/bookmark-star.svg" alt="Card image cap" style='width:50px; height:50px; background-size:cover; '>
																<img class="card-img-top star" src="<?php echo base_url();?>assets2/img/bookmark-star.svg" alt="Card image cap" style='width:50px; height:50px; background-size:cover; '>
																<div class="card-body">
																	<h5 class="card-title" style="font-size:16px; font-weight:600; text-transform:uppercase;">3 STAR HOTELS</h5>
																</div>
															</div>
															
														</div>
													</div>											
													<div class="col-lg-2 col-md-2" style="padding-right:5px; padding-left:5px;">
														<div class="choice" data-toggle="wizard-radio" style="margin-top:0;">
															<input type="checkbox" name="pace" value="Design" class="suitable_for" >
															<div class="card card-checkboxes card-hover-effect">
																<img class="card-img-top star" src="<?php echo base_url();?>assets2/img/bookmark-star.svg" alt="Card image cap"
																	style='width:50px; height:50px; background-size:cover; '>
																<img class="card-img-top star" src="<?php echo base_url();?>assets2/img/bookmark-star.svg" alt="Card image cap"
																	style='width:50px; height:50px; background-size:cover; '>
																<img class="card-img-top star" src="<?php echo base_url();?>assets2/img/bookmark-star.svg" alt="Card image cap"
																	style='width:50px; height:50px; background-size:cover; '>
																<img class="card-img-top star" src="<?php echo base_url();?>assets2/img/bookmark-star.svg" alt="Card image cap"
																	style='width:50px; height:50px; background-size:cover; '>
																<div class="card-body">
																	<h5 class="card-title" style="font-size:16px; font-weight:600; text-transform:uppercase;">4 STAR HOTELS</h5>
																</div>
															</div>
														</div>
														
													</div>											
													<div class="col-lg-2 col-md-2 " style="padding-right:5px; padding-left:5px;">
														<div class="choice" data-toggle="wizard-radio" style="margin-top:0;">
															<input type="checkbox" name="pace" value="Design" class="suitable_for" >
															<div class="card card-checkboxes card-hover-effect">
																<img class="card-img-top star" src="<?php echo base_url();?>assets2/img/bookmark-star.svg" alt="Card image cap"
																	style='width:50px; height:50px; background-size:cover; '>
																<img class="card-img-top star" src="<?php echo base_url();?>assets2/img/bookmark-star.svg" alt="Card image cap"
																	style='width:50px; height:50px; background-size:cover; '>
																<img class="card-img-top star" src="<?php echo base_url();?>assets2/img/bookmark-star.svg" alt="Card image cap"
																	style='width:50px; height:50px; background-size:cover; '>
																<img class="card-img-top star" src="<?php echo base_url();?>assets2/img/bookmark-star.svg" alt="Card image cap"
																	style='width:50px; height:50px; background-size:cover; '>
																<img class="card-img-top star" src="<?php echo base_url();?>assets2/img/bookmark-star.svg" alt="Card image cap"
																	style='width:50px; height:50px; background-size:cover; '>
																<div class="card-body">
																	<h5 class="card-title" style="font-size:16px; font-weight:600; text-transform:uppercase;">5 STAR HOTELS</h5>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group col-sm-offset-1" style="margin-bottom:50px !important; margin-right: 11%;">
													<label>Remarks on preferred accommodation type:</label>
													<textarea type="text" class="form-control" id="exampleInputEmail1" placeholder=""></textarea>
												</div>
											</div>
		                            	</div>
		                        	</div>
		                            <div class="tab-pane" id="captain">
		                                <h5 class="info-text">Tell us more about your holiday expectations</h5>
		                                <div class="row">

											<div class="col-sm-5 col-sm-offset-1 mt-4">
												<div class="form-group ">
													<label>5)  Tour start date</label>
													<div class="form-group">
														<div class='input-group date' id='datetimepicker1'>
															<input type='text' class="form-control" />
															<span class="input-group-addon">
																<span class="glyphicon glyphicon-calendar"></span>
															</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-sm-offset-1 mt-4" style="margin-bottom: 20px;">
												<div class="form-group ">
													<label><input type="radio" name="optradio" style="width: 15px; height:15px; margin-right:5px; "  checked>I have already booked my flights / I am certain of the dates</label>
													<label><input type="radio" name="optradio" style="width: 15px; height:15px; margin-right:5px; ">Dates are approximate in the selected month</label><br>
													<label><input type="radio" name="optradio" style="width: 15px; height:15px; margin-right:5px; ">I am not sure yet</label><br>
												
												</div>
											</div>
											<div class="col-sm-5 col-sm-offset-1" style="margin-bottom: 20px;">
		                                    	<div class="form-group">
													<label>6)  Duration</label>
													<input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
		                                    	</div>
											</div>

											<div class="col-sm-10 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>7)  Would you like to add a few days beach  in Maldives at the end of the tour?</label>
												</div>
											</div><br>
											<div class="col-sm-3 col-sm-offset-1" style="margin-bottom: 20px;">
												<div class="choice maldives-yes" data-toggle="wizard-radio" style="margin-top:0;">
													<input type="checkbox" name="pace" value="Design" class="suitable_for">
													<div class="card card-checkboxes card-hover-effect">
														<img class="card-img-top maldives-icon" src="<?php echo base_url();?>assets2/img/correct.svg" alt="Card image cap" style='width:50px; height:50px; background-size:cover; '>
														<div class="card-body">
															<h5 class="card-title" style="font-size:16px; font-weight:600; text-transform:uppercase;">Yeah</h5>
														</div>
													</div>
												</div>
												<div id="maldives-section"></div>
											</div>
											<div class="col-sm-3 col-sm-offset-1" style="margin-bottom: 20px;">
												<div class="choice maldives-nop" data-toggle="wizard-radio" style="margin-top:0;">
													<input type="checkbox" name="pace" value="Design" class="suitable_for">
													<div class="card card-checkboxes card-hover-effect">
														<img class="card-img-top maldives-icon" src="<?php echo base_url();?>assets2/img/forbidden-mark.svg" alt="Card image cap" style='width:50px; height:50px; background-size:cover; '>
														<div class="card-body">
															<h5 class="card-title" style="font-size:16px; font-weight:600; text-transform:uppercase;">Nop</h5>
														</div>
													</div>

												</div>
											</div>
											
											<div class="col-sm-8 col-sm-offset-1" style="margin-bottom: 20px;">
												<div class="form-group">
													<label>8)  Budget per person for  this trip (Excluding flights) </label>
													<select class="form-control">
														<option disabled="" selected="">- choose a space -</option>
														<option>800 – 1100 USD</option>
														<option>1100 – 1500 USD onwards</option>
														<option>1500-2000 USD onwards</option>
														<option>2000-3000 USD onwards</option>
														<option>5000 USD onwards </option>
													</select>
												</div>
											</div>
											<div class="col-sm-11 col-sm-offset-1" style="margin-bottom: 20px;">
												<div class="form-group " style="margin-bottom:50px !important; margin-right: 11%;">
													<label>9)  Additional Information on your holiday plans</label>
													<textarea type="text" class="form-control" id="exampleInputEmail1" placeholder=""></textarea>
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
		                                        	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
		                                    	</div>
											</div>
											<div class="col-sm-5 ">
		                                    	<div class="form-group">
		                                        	<label>Last Name</label>
		                                        	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
		                                    	</div>
		                                	</div>
											
											<div class="col-sm-5 col-sm-offset-1">
												<div class="form-group">
													<label>Age Range</label>
													<select class="form-control">
														<option disabled="" selected="">- choose your age -</option>
														<option>25 – 34 yrs</option>
														<option>35 – 44 yrs</option>
														<option>45 – 54 yrs</option>
														<option>55 – 64 yrs</option>
														<option>65yrs & above </option>
													</select>
												</div>
											</div>
											<hr>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Contact Number</label>
													<div class="input-group">
														<input id="phone" name="phone" type="tel" class="form-control">
													</div>
													<p class="description">If you share your contact number, our local travel consult could contact you at a time
														convenient for you, to further discuss your holiday plans, and provide first-hand information and travel tips to Sri
														Lanka. This will help TO create the tailor made tour plan most suited to you. </p>
												</div>
											</div>
											<div class="col-sm-7 col-sm-offset-1" style="margin-bottom:30px;">
												<div class="form-group">
													<label>Email</label>
													<input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
													<p class="description">We will email the tailor made tour plan to this email. </p>
												</div>
											</div>
											<div class="col-sm-12 col-sm-offset-1">
												<div class="form-group">
													<label class="checkbox-inline" style="font-weight: 600;"><input type="checkbox" value="" style="width:15px; height: 15px;">I would like to receive monthly travel updates about Sri Lanka.</label>
												</div>
											</div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                        	<div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-primary btn-wd next-btn' name='next' value='Next' />
		                                <input type='button' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Finish' />
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
					<img class="card-img-top" src="<?php echo base_url().'assets/images/tours/'.$suggestion->photo_id; ?>" alt="Card image cap" style="width:100%; height:auto; overflow:hidden;">
					<div class="card-body">
						<h5 class="card-title"><?php echo $suggestion->location; ?></h5>
						<p class="card-text"><?php echo $suggestion->description; ?></p>
						<a href="<?php echo site_url('tours/'.$suggestion->tour_id);?>" class="btn btn-primary" style="margin-left:60px;">See More Details</a>
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

<script type="text/javascript"
	src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

<script src="<?php echo base_url();?>assets2/js/intlTelInput.js"></script>
<script src="<?php echo base_url();?>assets2/js/tailorMade-form.js"></script>
	
</body>
</html>











