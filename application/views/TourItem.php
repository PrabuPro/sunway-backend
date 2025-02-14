<?php
function getUserIpAddr(){
   	$ip = $_SERVER['REMOTE_ADDR'];
    return $ip;
}

$IPaddress=getUserIpAddr(); 
$two_letter_country_code=iptocountry($IPaddress);

function iptocountry($ip) {    
    $numbers = preg_split( "/\./", $ip);    
    // require("ip_files/".$numbers[0].".php");
    $code=($numbers[0] * 16777216) + ($numbers[1] * 65536) + ($numbers[2] * 256) + ($numbers[3]);    
    foreach($ranges as $key => $value){
        if($key<=$code){
            if($ranges[$key][0]>=$code){$two_letter_country_code=$ranges[$key][1];break;}
            }
    }
    if ($two_letter_country_code==""){$two_letter_country_code="unkown";}
    return $two_letter_country_code;
}
?>

<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<META http-equiv='Content-Type' content='text/html; charset=UTF-8'>
<style>

	.top-email {
		top:0;
	}
	body {
		background-color: #ffffff;
	}

	.ftco-navbar-light {
		background: #182a65 !important;
		top: 0px !important;
	}

	.navbar{
		padding:2rem 1rem 0.5rem 1rem !important;
	}

	.navbar-logo{
		height: 4em !important;
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
		box-shadow: 6px 13px 0px #303040 !important; 
		border-top: 2px solid #303040;
		border-left: 2px solid #303040;
		border-right: 2px solid #303040;

	}

	.panel-primary {
		border-bottom: 1px solid #303040;
		border-left: 1px solid #303040;
		border-right: 1px solid #303040;
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
		font-weight: 700;
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
		box-shadow: 5px 6px 0px #000000 !important; 
		border: 2px solid #000000;
		

	}

</style>



<div class="container" style="margin-top:150px;">
	<div class="row">
		<div class="col-lg-3">

			<div class="card mt-5"
				style="box-shadow: 5px 6px 0px #000000 !important; border: 2px solid #000000; !important; margin-bottom: 20px;">

				<div class="card-body">
					<h5 class="card-title external-links">

						<a href="<?php echo base_url();?>about-us/#whysunway">&#10219; Why travel with us</a>
					</h5>
					<h5 class="card-title external-links">
						<a href="<?php echo base_url();?>how-it-works">&#10219; How to book your tour</a>
					</h5>
					<h5 class="card-title external-links">
						<a href="<?php echo base_url();?>how-it-works">&#10219; FAQ</a>
					</h5>

				</div>
			</div>
			<div class="card"
				style="box-shadow: 5px 6px 0px #000000 !important;border: 2px solid #000000; margin-bottom: 10px;">

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
									style="height: 35px !important; font-size: 12px; border-radius: 5px; border: 1.5px solid #000000;" required>
							</div>

						</div>
						<div class="row">
							<div class="col-md-12 form-group">
								<label for="email"
									style="font-size:14px; margin-bottom:0px; color:#000000; font-weight:600;">Email</label>
								<input id="email" name="email" type="email" class="form-control"
									value="<?php echo set_value('email');?>" placeholder=""
									style="height: 35px !important; font-size: 12px; border-radius: 5px; border: 1.5px solid #000000;" required>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 form-group">
								<label for="message"
									style="font-size:14px; margin-bottom:0px; color:#000000; font-weight:600;">Message</label>
								<textarea id="message" name="message" cols="120" rows="7" class="form-control"
									placeholder=""
									style="height: 100px !important; font-size: 12px; border-radius: 5px; border: 1.5px solid #000000;"
									required><?php echo set_value('name');?></textarea>
							</div>
						</div>

						<input type="hidden" value="<?php echo $results->tour_id;?>" name="tour_id" />
						<input type="hidden" value="<?php echo $results->tour_type;?>" name="tour_type-item" />




						<div class="row">
							<div class="col-md-12" style=" margin:auto; ">
								<div class="form-group">
									<input type="submit" value="Send" class="btn btn-primary py-2 px-4 send-btn"
										style="height: 50px !important; border-radius: 5px; margin-left: 60px; margin-top:20px; background-color: #000000; color: #ffffff; font-weight: 700; border: 2px solid transparant;">
								</div>
							</div>
						</div>
					</form>


				</div>
			</div>

		</div>


		<div class="col-lg-9">

			<h1 class="mb-3 mt-5" style="font-size:50px; font-weigh:800 !important;">
				<?php echo ucwords($results->name); ?>
			</h1>

			<div class="tour_item-image"
				style="display:flex; justify-content:flex-end; align-items:flex-end; width:100%; margin-bottom:50px; height:30em; background-size:cover; background-image: url('<?php echo base_url().'assets/images/tours/'.$results->photo_id; ?>'); box-shadow: 5px 6px 0px #000000; border-radius: 0.25rem; border: 2px solid #000000;">
				<div class="col-5" style="padding-bottom: 15px; <?php echo ($two_letter_country_code == 'LK') ? 'display:none;' : ' ';?>" >
					<div class="card tab-card"
						style="float:right !important; border: none; box-shadow: 0 2px 6px #000000 !important;">
						<div class="card-header tab-card-header" style="background-color:#45a9e0;">
							<ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
								<li class="nav-item" style="<?php echo (isset($prices[0]->hotel_type)) ? '' : 'display:none;' ?>">
									<a style="font-weight:600 !important; text-transform: uppercase;"
										class="nav-link active show" id="one-tab" data-toggle="tab" href="#one"
										role="tab" aria-controls="One" aria-selected="true"><?php echo $prices[0]->hotel_type;?> Star</a>
								</li>
								<li class="nav-item" style="<?php echo (isset($prices[1]->hotel_type) ) ? '' : 'display:none;' ?>">
									<a style="font-weight:600 !important; text-transform: uppercase;" class="nav-link"
										id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two"
										aria-selected="false"><?php echo $prices[1]->hotel_type;?> Star</a>
								</li>
								<li class="nav-item"  style="<?php echo (isset($prices[2]->hotel_type) ) ? '' : 'display:none;' ?>">
									<a style="font-weight:600 !important; text-transform: uppercase;" class="nav-link"
										id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three"
										aria-selected="false"><?php echo $prices[2]->hotel_type;?> Star</a>
								</li>
							</ul>
						</div>

						<div class="tab-content" id="myTabContent"
							style="border-bottom: 5px solid #45a9e0; border-left: 5px solid #45a9e0; border-right: 5px solid #45a9e0; border-bottom-left-radius: 5px !important;border-bottom-right-radius: 5px !important;">
							<div class="tab-pane fade show active p-3" id="one" role="tabpanel"
								aria-labelledby="one-tab" style="<?php echo (isset($prices[0]->hotel_type) ) ? '' : 'display:none;' ?>">
								<h5 class="card-title"
									style="text-align:center; font-family: 'Kaushan Script', cursive; font-size:28px;">
									Tour Price :
									<?php echo (isset($prices[0]->price) ? '$'.$prices[0]->price.'/-' : 'Unavailable');?>
								</h5>
								<p class="card-text"></p>

							</div>
							<div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab" style="<?php echo (isset($prices[1]->hotel_type) ) ? '' : 'display:none;' ?>">
								<h5 class="card-title"
									style="text-align:center; font-family: 'Kaushan Script', cursive; font-size:28px;">
									Tour Price :
									<?php echo (isset($prices[1]->price) ? '$'.$prices[1]->price.'/-' : 'Unavailable');?>
								</h5>
								<p class="card-text"></p>

							</div>
							<div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab" style="<?php echo (isset($prices[2]->hotel_type)) ? '' : 'display:none;' ?>">
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
			<div class="" style="margin-right:0 !important; ">
				<div class="intro-section" >
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
									aria-controls="contact" aria-selected="false">Book Now</a>
							</li>
						</ul>

					</div>
				</div>
				<div class="panel-body" style="box-shadow: 5px 6px 0px #303040 !important;">
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
											<div class="point" style="display:flex; flex-direction:row;">
												<li class="tours-itinerary-item">
													<img src="<?php echo base_url(); ?>assets/images/checkmark.png"
														class="tours-itinerary-icon" alt="">
													
												</li>
												<li class="tours-itinerary-item-details" style="margin-left:0px; font-size:18px;">
													<?php echo str_replace(array('.'), '' , $hightlights->highlights); ?>
												</li>
											</div>
											<?php endforeach; ?>
										</ul>
												<?php if(!empty($options)) : ?>
										<h1 class="mb-3">Options</h1>

										<ul class="tours-itinerary">

											<?php foreach($options as $option) : ?>
											<div class="point" style="display:flex; flex-direction:row;">
												<li class="tours-itinerary-item" >
													<img src="<?php echo base_url(); ?>assets/images/checkmark.png"
														class="tours-itinerary-icon" alt="">
												</li>
												<li class="tours-itinerary-item-details" style="margin-left:0px; font-size:18px;">
													<?php echo str_replace(array('.'), '' , $option->options); ?>
												</li>
											</div>
											<?php endforeach; ?>
										</ul>

										<?php endif; ?>
									</div>
								</div>

							</div>


										<style>
							.hotels{
								color:#684967;
								font-size: 1.2rem;
								font-weight: 900;
								width:100px;
								height: 50px;
								padding: 8px 15px 2px 10px;
								-webkit-clip-path: polygon(0% 0%, 75% 0%, 100% 49%, 75% 100%, 0% 100%);
								clip-path: polygon(0% 0%, 75% 0%, 100% 49%, 75% 100%, 0% 100%);
								margin-bottom:10px;
								

							}

							.hotelItinerary{
								display:flex;
								flex-direction: row;
								justify-content:start;
								align-items:center;
								margin-left:35px;	
								position: relative;
								top: -25px;	
							}

							p {
								margin: 0 !important;
							}

							.hotel-star{
								display:flex;
								flex-direction:row;
								align-items:center;
								width:110px;
								height: 40px;
								margin:0px 15px 10px 15px;
								color:#ffffff;
								font-size:12px;
								font-weight: 900;
								padding: 0px 15px 2px 5px;
								line-height:1;
							}

							.hotel-star-number{
								background-color: #f1c40f;
								min-width:30px;
								height:30px;
								color:#000000;
								-webkit-clip-path: polygon(50% 6%, 61% 35%, 93% 37%, 68% 57%, 75% 86%, 50% 70%, 23% 85%, 32% 57%, 7% 35%, 39% 35%);
								clip-path: polygon(50% 6%, 61% 35%, 93% 37%, 68% 57%, 75% 86%, 50% 70%, 23% 85%, 32% 57%, 7% 35%, 39% 35%);
							}
							
							.hotel-star-number p {
								    margin-left: 11px !important;
									margin-top: 10px !important;
									font-size: 11px;
									font-weight:600;
							}

							.hotel-type{
								background-color: #f1c40f;
								height:16px;
								width:auto;
								margin:0px 15px 0 15px;
								font-size: .8rem;
								border-top-left-radius: 5px;
								border-top-right-radius: 5px;

								
							}

							.hotel-type p {
								line-height:1;
								margin: auto;
								text-align:center;
								padding-top:2px;
								font-weight: 700;
							}
							
							</style>
							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"
								style="width:80%; margin:auto;">

								<div class="row slider-text align-items-center" style="margin-top:20px;">
									<div class="col-md-12 col-sm-12 ftco-animate">
										<h1 class="mb-3">Things You Can Do</h1>
										<ul class="tours-itinerary">


											<?php $countItinerary = count($itineraries); ?>
											<?php $currrentItinerary = 0; ?>
											<?php $countHotel = 0; ?>
											<?php foreach($itineraries as $itinerary) : ?>
											<li class="tours-itinerary-item"> <img
													src="<?php echo base_url(); ?>assets/images/checkmark.png"
													class="tours-itinerary-icon" alt="">Day
												<?php echo $itinerary->item_number; ?>
											</li>
											<li class="tours-itinerary-item-details" style="font-size:16px; margin-bottom:40px; text-align:justify;">
												<?php echo str_replace(chr(194)," ",$itinerary->item_details); ?>
											</li>

											<a data-toggle="collapse" data-parent="#accordion" class="faq-text" href="#collapse<?php echo $countHotel;?>" style="<?php echo (++$currrentItinerary === $countItinerary) ? 'display:none' : ' '; ?>">
												<div class="panel-heading hotelItinerary d-flex justify-content-center" style="background-color: #000000; color:#ffffff;  margin: 0px 0px 0px 37px; border-bottom:2px solid #303040; box-shadow:none !important;">
													<h2 class="panel-title" style="line-height:1 !important; font-weight:600; font-size: 18px; color: #ffffff; margin-bottom: 0px; padding:5px">
														HOTELS
													</h2>
												</div>
											</a>
											<div id="collapse<?php echo $countHotel;?>" class="panel-collapse collapse in">
												<div class="panel-body hotelItinerary d-flex flex-wrap" style="margin-left:37px; border-top: 2.5px solid #303040;">
													<a href="<?php echo $itinerary->regular_url;?>" target="_blank" style="<?php echo empty($itinerary->regular) ? 'display:none' : ' '; ?> margin:auto"> <div class="hotel-type"><p>Regular</p></div><div class="hotel-star" style="background-color: #684967;">
												<div class="hotel-star-number"> <p>R</p> </div>
												<?php echo $itinerary->regular;?></div></a>
												<a href="<?php echo $itinerary->standard_url;?>" target="_blank" style="<?php echo empty($itinerary->standard) ? 'display:none' : ' '; ?> margin:auto"><div class="hotel-type"><p>Standard</p></div> <div class="hotel-star" style="background-color: #684967;">
													<div class="hotel-star-number"> <p>S</p> </div>
												<?php echo $itinerary->standard;?></div></a>
												<a href="<?php echo $itinerary->comfort_url;?>" target="_blank" style="<?php echo empty($itinerary->comfort) ? 'display:none' : ' '; ?> margin:auto"><div class="hotel-type"><p>Comfort</p></div> <div class="hotel-star" style="background-color: #684967;">
													<div class="hotel-star-number"> <p>C</p> </div>
												<?php echo $itinerary->comfort;?></div></a>
												<a href="<?php echo $itinerary->luxury_url;?>" target="_blank" style="<?php echo empty($itinerary->luxury) ? 'display:none' : ' '; ?> margin:auto"><div class="hotel-type"><p>Luxury</p></div> <div class="hotel-star" style="background-color: #684967;">
													<div class="hotel-star-number"> <p>L</p> </div>
												<?php echo $itinerary->luxury;?></div></a>
												</div>
											</div>
											<?php $countHotel++; ?>
					

					
												
												
												
												
										
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

										<ul class="tours-itinerary" >

											<?php foreach($includes as $include) : ?>

											<div class="point" style="display:flex; flex-direction:row;">		
												<li class="tours-itinerary-item">
													<img src="<?php echo base_url(); ?>assets/images/checkmark.png"
														class="tours-itinerary-icon" alt="">
													
												</li>
												<li class="tours-itinerary-item-details" style="margin-left:0px; font-size:18px;">
													<?php echo str_replace(array('.'), '' , $include->includes); ?>
												</li>
											</div>
											<?php endforeach; ?>
										</ul>

										<?php endif; ?>


										<?php if(!empty($excludes)) : ?>
										<h1 class="mb-3">Excludes</h1>

										<ul class="tours-itinerary" >

											<?php foreach($excludes as $exclude) : ?>

											<div class="point" style="display:flex; flex-direction:row;">

												<li class="tours-itinerary-item">
													<img src="<?php echo base_url(); ?>assets/images/checkmark.png"
														class="tours-itinerary-icon" alt="">
													
												</li>
												<li class="tours-itinerary-item-details" style="margin-left:0px; font-size:18px;">
													<?php echo str_replace(array('.'), '' , $exclude->excludes); ?>
												</li>
											</div>
											<?php endforeach; ?>
										</ul>

										<?php endif; ?>


										<?php if(!empty($options)) : ?>
										<h1 class="mb-3">Options</h1>

										<ul class="tours-itinerary">

											<?php foreach($options as $option) : ?>
											<div class="point" style="display:flex; flex-direction:row;">
												<li class="tours-itinerary-item" >
													<img src="<?php echo base_url(); ?>assets/images/checkmark.png"
														class="tours-itinerary-icon" alt="">
												</li>
												<li class="tours-itinerary-item-details" style="margin-left:0px; font-size:18px;">
													<?php echo str_replace(array('.'), '' , $option->options); ?>
												</li>
											</div>
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
										<div class="select-wrap col-md-6 group mb-3">
											<label for="hotel_type"
												style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Transport
												Type</label>
											<select id="hotel_type" name="hotel_type" class="form-control" required>
												<option value="" class="form-control-option-white">Transport Type</option>
												<option value="regular" class="form-control-option-white">Regular
												</option>
												<option value="luxury" class="form-control-option-white">Luxury</option>
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
										data-sitekey="6LemjJwUAAAAAPc8tk1lLITLs2K6iMcdpJXUISw6"></div>
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

