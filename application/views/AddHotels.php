<?php if(isset($_SESSION['logged_in'])) : ?>

<?php if($this->session->logged_in) : ?>

<style>
	.thumbnail-image{
    background-size:cover;
}

</style>

<div class="container">
	<div class="columns">
		<div class="column is-12">
			<?php if($this->session->flashdata('errors')) : ?>
			<article class="message is-danger">
				<div class="message-header">
					<p>Error</p>
					<button class="delete" aria-label="delete"></button>
				</div>
				<div class="message-body">
					<?php echo $this->session->flashdata('errors'); ?>
				</div>
			</article>

			<?php endif; ?>
			<?php if($this->session->flashdata('success')) : ?>
			<article class="message is-success">
				<div class="message-header">
					<p>Success</p>
					<button class="delete" aria-label="delete"></button>
				</div>
				<div class="message-body">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
			</article>
			<?php endif; ?>
			<section class="hero is-info welcome is-small">
				<div class="hero-body">
					<div class="container">
						<h1 class="title">
							Add Hotel
						</h1>
					</div>
				</div>
			</section>
			<section class="hero">
				<div class="columns">
					<div class="column is-6" style="margin-top:30px;">
						<form action="<?php echo site_url('hotelcontroller/addhotels');?>" method="post" enctype="multipart/form-data">
							<div class="field">
								<div class="control">
									<input class="input is-info" name="name" type="text" placeholder="Hotel Name" value="<?php echo set_value('name');?>">
								</div>
							</div>
							<div class="field">
								<div class="control">
									<input class="input is-info" name="description" type="text" placeholder="Description" value="<?php echo set_value('description');?>">
								</div>
							</div>
							<div class="field">
								<div class="control">
									<div class="select is-info">
										<select name="hotel_type">
											<option value="">Hotel Type</option>
											<option value="standard">Standard</option>
											<option value="3 star">3 Star</option>
											<option value="4 star">4 Star</option>
											<option value="5 star">5 Star</option>
											<option value="bouteque hotels">Bouteque Hotels</option>
											<option value="villas">Villas</option>
											<option value="apartments">Apartments</option>
											<option value="rent a house">Rent a House</option>
										</select>
									</div>
								</div>
							</div>
							<div class="field">
								<div class="control">
									<div class="select is-info">
										<select name="suitable_for">
											<option value="">Suitable for</option>
											<option value="seniors">Seniors</option>
											<option value="couples">Couples</option>
											<option value="family">Family</option>
											<option value="honeymooners">Honeymooners</option>
											<option value="small gourp">Small Group </option>
											<option value="researchers">Researchers</option>
											<option value="singles + kids">Singles + kids</option>
											<option value="pilgrims">Pilgrims</option>
										</select>
									</div>
								</div>
							</div>
							<div class="field">
								<div class="control">
									<input class="column is-5 input is-info" name="price" type="text" placeholder="Price" value="<?php echo set_value('price');?>">
								</div>
							</div>

							<div class="field">
								<div class="control">
									<div class="file">
										<label class="file-label">
											<input class="file-input" type="file" name="photo_id" accept="image/jpg, image/jpeg, image/png" onchange="readURL(this);">
											<span class="file-cta">
												<span class="file-icon">
													<i class="fas fa-upload"></i>
												</span>
												<span class="file-label">
													Choose a file…
												</span>
											</span>
										</label>
									</div>
									<img id="thumbnail" src="#" alt="your image" class="thumbnail-image" />
								</div>
							</div>


							<div class="field">
								<div class="control">
									<input class="input is-info" name="location" type="text" placeholder="Location" value="<?php echo set_value('location');?>">
								</div>
							</div>

							<div class="field">
								<div class="control">
									<input class="column is-5 input is-info" name="lat" type="text" placeholder="Latitude" value="<?php echo set_value('lat');?>">
								</div>
							</div>
							<div class="field">
								<div class="control ">
									<input class="column is-5 input is-info" name="lng" type="text" placeholder="Longitude" value="<?php echo set_value('lng');?>">
								</div>
							</div>

							<div class="field">
								<div class="control">
									<div class="select is-info">
										<select name="country">
											<option value="">Conutry</option>
											<option value="sri lanka">Sri lanka</option>
											<option value="maldives">Maldives</option>
										</select>
									</div>
								</div>
							</div>

							<div class="field">
								<div class="control ">
									<p style="font-size:20px; font-weight:600;">Facilities</p>
									<input id="facilities" class="" name="facility[]" type="checkbox" value="Wifi">WIFI <br>
									<input id="facilities" class="" name="facility[]" type="checkbox" value="children">Children <br>
									<input id="facilities" class="" name="facility[]" type="checkbox" value="meal">Meal <br>
									<input id="facilities" class="" name="facility[]" type="checkbox" value="special">Special <br>
								</div>
							</div>

							<p style="font-size:20px; font-weight:600;">Room Types</p>
				
							<div style="margin-bottom:20px;" id="description"><p id="add_field" style="background-color:green; width:30%; color:white;">ADD ROOM TYPE</p></div>



							<div class="field">
								<div class="control">
									<input class="column is-3 button is-block is-info is-medium is-fullwidth" type="submit" value="Add Hotels">
								</div>
							</div>
						</form>

					</div>
				</div>
			</section>

		</div>
	</div>
</div>

<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script>
 var count = 0;
	var count = 0;
    $(document).ready(function() {
        $('p#add_field').click(function(){
           count += 1;
			var html=`<div class="columns is-mobile is-multiline ">
								<div class="column ">
									<strong>Room Type - `+ count +`  </strong>
								</div>
								<div class="column ">
									<div class="select is-info">
										<select name="room_type[]">
											<option value="">Room Type</option>
											<option value="single">Single</option>
											<option value="double">Double</option>
										</select>
									</div>
								</div>
								<div class="column ">
									<input class="column input is-info" name="people[]" type="text" placeholder="People" >
								</div>
								<div class="column ">
									<input class="column input is-info" name="children[]" type="text" placeholder="Children" >
								</div>
								<div class="column ">
									<input class="column input is-info" name="room_price[]" type="text" placeholder="Price" >
								</div>
							</div>`;
            $('#description').append(html);

    	});
    });

</script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script async type="text/javascript" src="<?php echo base_url(); ?>assets/js/form.js"></script>


<?php else : ?>
<?php redirect('home'); ?>
<?php endif; ?>

<?php else : ?>
<?php redirect('home'); ?>
<?php endif; ?>
