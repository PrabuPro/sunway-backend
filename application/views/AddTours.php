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
									<input class="input is-info" name="name" type="text" value="<?php echo set_value('name');?>" placeholder="Tour Name" required>
								</div>
							</div>
							<div class="field">
								<div class="control">
									<input class="input is-info" name="description" type="text" value="<?php echo set_value('description');?>"
									 placeholder="Description" required>
								</div>
							</div>
							<div class="field">
								<div class="control">
									<textarea class="textarea is-info" placeholder="Introduction" name="introduction" required><?php echo set_value('introduction');?></textarea>
								</div>
							</div>
							<div class="field">
								<div class="control">
									<div class="select is-info">
										<select name="tour_type" required>
											<option value="">Tour Type</option>
											<option value="common">Common</option>
											<option value="beach">Beach</option>
											<option value="eco">Eco</option>
											<option value="nature">Nature</option>
											<option value="wild life">Wild Life</option>
											<option value="adventure">Adventure</option>
											<option value="action">Action</option>
											<option value="ayurweda">Ayurweda</option>
										</select>
									</div>
								</div>
							</div>
							<div class="field">
								<div class="control">
									<div class="select is-info">
										<select name="suitable_for" required>
											<option value="">Suitable for</option>
											<option value="seniors">Seniors</option>
											<option value="couples">Couples</option>
											<option value="family">Family</option>
											<option value="honeymooners">Honeymooners</option>
											<option value="small group">Smalll Group </option>
											<option value="researchers">Researchers</option>
											<option value="singles + kids">Singles + kids</option>
											<option value="pilgrims">Pilgrims</option>
										</select>
									</div>
								</div>
							</div>
							<div class="field">
								<div class="control">
									<input class="column is-5 input is-info" name="price" type="text" placeholder="Price" value="<?php echo set_value('price');?>" required>
								</div>
							</div>

							<label for="">Photo</label>
							<div class="field">
								<div class="control">
									<div class="file">
										<label class="file-label">
											<input class="file-input input-photo" type="file" name="photo_id" accept="image/jpg, image/jpeg, image/png" onchange="readURL(this);" required>
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
											<input class="file-input input-map" type="file" name="map_id" accept="image/jpg, image/jpeg, image/png" onchange="readURLMap(this);" required>
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


							<div class="field">
								<div class="control">
									<input class="input is-info" name="location" type="text" placeholder="Location" value="<?php echo set_value('location');?>" required>
								</div>
							</div>

							<h2>Itinerary</h2><br>
				
							<div class="counters" style="font-weight:700; font-size:1.2em;">Added Days - <span class="itinerary-counter">0</span></div>
							<div style="margin-bottom:20px; cursor:pointer;" id="description"><p id="add_field" style="background-color:green; width:30%; color:white;">ADD DESCRIPTION</p></div>

							<div class="field">
								<div class="control">
									<div class="select is-info">
										<select name="duration" required>
											<option value="">Duration</option>
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
									<div class="select is-info">
										<select name="rating" required>
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
<script>
	 
	 var count = 0;

    $(document).ready(function() {
        $('p#add_field').click(function(){
           count += 1;
			var html=`<div class="columns is-mobile is-multiline ">
								<div class="column is-11">
									<strong>Itinarary Item  - `+ count +`  </strong>
								</div>
								<div class="column is-narrow">
									<input class="column is-3 input is-info" name="day[]" type="text" placeholder="Day" >
								</div>
								<div class="column ">
									<textarea class="textarea is-info is-12" name="desc[]" type="text" placeholder="Description"><?php echo set_value('desc[]');?></textarea>
								</div>
							</div>`;
			$('#description').append(html);
			$('.itinerary-counter').text(count);

		});
		
		$('.btn-refresh').click(function(){
			window.location.href = '<?php echo base_url();?>addhotelsview';
			window.location.href = '<?php echo base_url();?>addtoursview';
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
