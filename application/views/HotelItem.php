<style>
	table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
  color:#000000;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.facility-icons{
  fill: #303040;
  display: flex;
  margin: 20px auto 10px auto;
  height: 70px;
  width: 70px;
}

.facility{
	display: flex;
	flex-direction: column;
	margin: 10px 50px 10px 50px;
}

.facility-text{
	color: #303040;
	font-size: 20px;
	text-align: center;
	font-weight: 500;

}
</style>


<section class="home-slider owl-carousel">
	<div class="slider-item" style="background-image: url('<?php echo $results->photo_id;?>');"
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

			<div class="col-lg-6">
				<div class="row slider-text align-items-center">
					<div class="col-md-12 col-sm-12 ftco-animate">
						<div class="col-lg-12">
							<div class="row slider-text align-items-center">
								<div class="col-md-7 col-sm-12 ftco-animate">
									<h1 class="mb-3">Introduction</h1>
								</div>
							</div>
						</div>
						<h3 class="col-md-7 col-sm-12 sub--para-itenary mb-5">
							<?php echo $results->introduction; ?>
						</h3>

					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div id="map"></div>
				<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31659.998183437292!2d80.57900303960295!3d7.297608838410905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae366266498acd3%3A0x411a3818a1e03c35!2sKandy!5e0!3m2!1sen!2slk!4v1548053966566"
                        width="550" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
			</div>

			<div class="col-lg-12">
				<div class="row slider-text align-items-center">
					<div class="col-md-7 col-sm-12 ftco-animate">
						<h1 class="mb-3 mt-5">Facilities</h1>
					</div>
				</div>
				<div class="row">
				<?php $facilities = explode(",", $facilities->facilities); ?>
				<?php $length = count($facilities); ?>
				<?php for($i = 0; $i < $length; $i++) : ?>
				<div class="facility">
				<svg class="facility-icons ftco-animate">  
              		<use xlink:href="<?php echo base_url(); ?>assets/images/sprite.svg#icon-<?php echo $facilities[$i]; ?>"></use>
            	</svg>
					<p class="facility-text ftco-animate"> <?php echo ucfirst($facilities[$i]); ?> </p>  
				</div>
				<?php endfor;?>
				</div>

			</div>
			<div class="col-lg-12">
				<div class="row slider-text align-items-center">
					<div class="col-md-7 col-sm-12 ftco-animate">
						<h1 class="mb-3 mt-5">Room Rates</h1>
					</div>
				</div>
				<div class="row ftco-animate">
					<table>
						<tr>
							<th>Room Type</th>
							<th>People</th>
							<th>Kids</th>
							<th>Price</th>
						</tr>
						<?php foreach($room_types as $room_type) : ?>
						<tr>
							<td>
								<?php echo $room_type->room_type; ?>
							</td>
							<td>
								<?php echo $room_type->people; ?>
							</td>
							<td>
								<?php echo $room_type->children; ?>
							</td>
							<td>$
								<?php echo $room_type->price; ?>
							</td>
						</tr>
						<?php endforeach; ?>


					</table>

				</div>

			</div>
			<div class="col-lg-12">
				<div class="row slider-text align-items-center">
					<div class="col-md-7 col-sm-12 ftco-animate">
						<h1 class="mb-3 mt-5">Travel with Us</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-lg-4 mb-4 ftco-animate">
						<a href="#" class="block-5" style="background-image: url('<?php echo base_url(); ?>assets/images/transport.jpeg');">
							<div class="text">
								<h3 class="heading">Car</h3>
								<div class="post-meta">
									<span>Ameeru Ahmed Magu Male’, Maldives</span>
								</div>
								<p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span
									 class="icon-star"></span><span class="icon-star-half-full"></span>
									<span>500 reviews</span></p>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-4 mb-4 ftco-animate">
						<a href="#" class="block-5" style="background-image: url('<?php echo base_url(); ?>assets/images/transport.jpeg');">
							<div class="text">
								<h3 class="heading">Van</h3>
								<div class="post-meta">
									<span>Ameeru Ahmed Magu Male’, Maldives</span>
								</div>
								<p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span
									 class="icon-star"></span><span class="icon-star-half-full"></span>
									<span>500 reviews</span></p>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-4 mb-4 ftco-animate">
						<a href="#" class="block-5" style="background-image: url('<?php echo base_url(); ?>assets/images/transport.jpeg');">
							<div class="text">
								<h3 class="heading">Car</h3>
								<div class="post-meta">
									<span>Ameeru Ahmed Magu Male’, Maldives</span>
								</div>
								<p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span
									 class="icon-star"></span><span class="icon-star-half-full"></span>
									<span>500 reviews</span></p>
							</div>
						</a>
					</div>

				</div>

			</div>
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
									<label for="phone" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Phone Number</label>
									<input id="phone" name="phone" type="text" class="form-control" value="<?php echo set_value('phone');?>"
									 placeholder="Phone Number eg: +941123456789" required>
								</div>
								<div class="col-md-6 form-group">
									<label for="email" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Country</label>
									<input name="country" type="text" class="form-control" value="<?php echo set_value('country');?>" placeholder="Your Country"
									 required>
								</div>
							</div>
							<div class="row">
								<div class="select-wrap col-md-6 group mb-3">
									<label for="num-of-adults" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Number
										of Adults</label>
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
										of Children</label>
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
									<label for="checkout_date" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Depature
										Date</label>
									<div class="check-out one-third mb-3"><input name="check-out-date" type="text" id="checkout_date" class="form-control"
										 placeholder="Depature Date" required></div>
								</div>
							</div>
							<div class="row">
								<div class="select-wrap col-md-6 group mb-3">
									<label for="hotel_type" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;" required>Hotel
										Type</label>
									<select id="hotel_type" name="hotel_type" class="form-control">
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
								<div class="select-wrap col-md-6 group mb-3">
									<label for="tour_type" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Tour Type</label>
									<select id="tour_type" name="tour_type" class="form-control" required>
										<option value="" class="form-control-option-white">Tour Type</option>
										<option value="common" class="form-control-option-white">Common</option>
										<option value="beach" class="form-control-option-white">Beach</option>
										<option value="echo" class="form-control-option-white">Eco</option>
										<option value="nature" class="form-control-option-white">Nature</option>
										<option value="wild life" class="form-control-option-white">Wild Life</option>
										<option value="advanture" class="form-control-option-white">Adventure</option>
										<option value="action" class="form-control-option-white">Action</option>
										<option value="ayurweda" class="form-control-option-white">Ayurweda</option>
									</select>
								</div>

							</div>
							<div class="row">
								<div class="select-wrap col-md-6 group mb-3">
									<label for="transportation_type" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Transportation
										Type</label>
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
									<label for="message" style="font-size:14px; margin-bottom:0px; color:#636363; font-weight:600;">Message</label>
									<textarea id="message" name="message" cols="120" rows="7" class="form-control" placeholder="Message" required><?php echo set_value('name');?></textarea>
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

			<div class="col-lg-12">
				<div class="row slider-text align-items-center">
					<div class="col-md-7 col-sm-12 ftco-animate">
						<h1 class="mb-3 mt-5">Tours You may also like</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-lg-4 mb-4 ftco-animate">
						<a href="#" class="block-5" style="background-image: url('<?php echo base_url(); ?>assets/images/tour-3.jpg');">
							<div class="text">
								<span class="price">$399</span>
								<h3 class="heading">Tour in Nilaveli beach</h3>
								<div class="post-meta">
									<span>Ameeru Ahmed Magu Male’, Maldives</span>
								</div>
								<p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span
									 class="icon-star"></span><span class="icon-star-half-full"></span>
									<span>500 reviews</span></p>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-4 mb-4 ftco-animate">
						<a href="#" class="block-5" style="background-image: url('<?php echo base_url(); ?>assets/images/tour-4.jpg');">
							<div class="text">
								<span class="price">$399</span>
								<h3 class="heading">Tour in Sinharaja</h3>
								<div class="post-meta">
									<span>Ameeru Ahmed Magu Male’, Maldives</span>
								</div>
								<p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span
									 class="icon-star"></span><span class="icon-star-half-full"></span>
									<span>500 reviews</span></p>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-4 mb-4 ftco-animate">
						<a href="#" class="block-5" style="background-image: url('<?php echo base_url(); ?>assets/images/tour-5.jpg');">
							<div class="text">
								<span class="price">$399</span>
								<h3 class="heading">Tour in Somewhere</h3>
								<div class="post-meta">
									<span>Ameeru Ahmed Magu Male’, Maldives</span>
								</div>
								<p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span
									 class="icon-star"></span><span class="icon-star-half-full"></span>
									<span>500 reviews</span></p>
							</div>
						</a>
					</div>

				</div>

			</div>
			<!-- END -->


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
