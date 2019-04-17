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
					<button class="delete btn-refresh" aria-label="delete"></button>
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
							Add Tour
						</h1>
					</div>
				</div>
			</section>
			<section class="hero">
				<div class="columns">
					<div class="column is-6" style="margin-top:30px;">
						<form action="<?php echo site_url('tourcontroller/addtours');?>" method="post" enctype="multipart/form-data">
							<div class="field">
								<div class="control">
									<input class="input is-info" name="name" type="text" value="<?php echo set_value('name');?>" placeholder="Tour Name">
								</div>
							</div>
							<div class="field">
								<div class="control">
									<input class="input is-info" name="description" type="text" value="<?php echo set_value('description');?>"
									 placeholder="Description">
								</div>
							</div>
							<div class="field">
								<div class="control">
									<textarea class="textarea is-info" placeholder="Introduction" name="introduction"><?php echo set_value('introduction');?></textarea>
								</div>
							</div>
							<div class="field">
								<div class="control">
									<div class="select is-info">
										<select name="tour_type">
											<option value="">Tour Type</option>
											<option value="common">Common</option>
											<option value="culture">Culture</option>
											<option value="family">Family</option>
											<option value="luxury">Luxury</option>
											<option value="classical beach">Classical Beach</option>
											<option value="eco">Eco</option>
											<option value="nature">Nature</option>
											<option value="wild life">Wild Life</option>
											<option value="adventure">Adventure</option>
											<option value="active">Active</option>
											<option value="ayurweda">Ayurweda</option>
											<option value="ramayana">Ramayana</option>
											<option value="ramadan">Ramadan</option>
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
											<option value="small group">Small Group </option>
											<option value="researchers">Researchers</option>
											<option value="singles + kids">Singles + kids</option>
											<option value="pilgrims">Pilgrims</option>
										</select>
									</div>
								</div>
							</div>
							<div class="field">
								<div class="control">
								<hr>
									Price
									<div style="margin-bottom:20px; cursor:pointer;" id="pricetags"><p id="add_price" style="background-color:green; width:30%; color:white;">ADD PRICE</p></div>
								<hr>
								</div>
							</div>

							<label for="">Photo</label>
							<div class="field">
								<div class="control">
									<div class="file">
										<label class="file-label">
											<input class="file-input input-photo" type="file" name="photo_id" accept="image/jpg, image/jpeg, image/png" onchange="readURL(this);">
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

							<label for="">Map</label>
							<div class="field">
								<div class="control">
									<div class="file">
										<label class="file-label">
											<input class="file-input input-map" type="file" name="map_id" accept="image/jpg, image/jpeg, image/png" onchange="readURLMap(this);">
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
									<img id="thumbnail-map" src="#" alt="your image" class="thumbnail-image" />
								</div>
							</div>

							<hr>
							<h2>Itinerary</h2><br>
				
							<div class="counters" style="font-weight:700; font-size:1.2em;">Added Days - <span class="itinerary-counter">0</span></div>
							<div style="margin-bottom:20px; cursor:pointer;" id="description"><p id="add_field" style="background-color:green; width:30%; color:white;">ADD DESCRIPTION</p></div>
							<hr>
							<div class="field">
								<div class="control">
									<div class="select is-info">
										<select name="duration">
											<option value="">Duration</option>
											<option value="5">5 Days</option>
											<option value="7">7 Days</option>
											<option value="10-12">10-12 Days</option>
											<option value="14">14 Days</option>
											<option value="14+">14+</option>
										</select>
									</div>
								</div>
							</div>

								<div class="field">
								<div class="control">
								<hr>
									Highlights
									<div class="counters" style="font-weight:700; font-size:1.2em;">Added Highlights - <span class="highlights-counter">0</span></div>
									<div style="margin-bottom:20px; cursor:pointer;" id="highlights"><p id="add_highlights" style="background-color:green; width:30%; color:white;">ADD HIGHLIGHTS</p></div>
								<hr>
								</div>
							</div>

								<div class="field">
								<div class="control">
								<hr>
									Services
									<div class="counters" style="font-weight:700; font-size:1.2em;">Includes - <span class="includes-counter">0</span></div>
									<div style="margin-bottom:20px; cursor:pointer;" id="includes"><p id="add_includes" style="background-color:green; width:30%; color:white;">ADD INCLUDES</p></div>
									<div class="counters" style="font-weight:700; font-size:1.2em;">Excludes - <span class="excludes-counter">0</span></div>
									<div style="margin-bottom:20px; cursor:pointer;" id="excludes"><p id="add_excludes" style="background-color:green; width:30%; color:white;">ADD EXCLUDES</p></div>
									<div class="counters" style="font-weight:700; font-size:1.2em;">Options - <span class="options-counter">0</span></div>
									<div style="margin-bottom:20px; cursor:pointer;" id="options"><p id="add_options" style="background-color:green; width:30%; color:white;">ADD OPTIONS</p></div>
								<hr>
								</div>
							</div>


							<div class="field">
								<div class="control">
									<div class="select is-info">
										<select name="rating">
											<option value="">Sunway Rating</option>
											<option value="0">0</option>
											<option value="1">1</option>
										</select>
									</div>
								</div>
							</div>

							<div class="field">
								<div class="control">
									<input class="column is-3 button is-block is-info is-medium is-fullwidth" type="submit" value="Add Tour">
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
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

<script>

$('.btn-refresh').click(function () {
		window.location.href = '<?php echo base_url();?>addhotelsview';
		window.location.href = '<?php echo base_url();?>addtoursview';
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
