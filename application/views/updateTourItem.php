<?php if(isset($_SESSION['logged_in'])) : ?>

<?php if($this->session->logged_in) : ?>

<style>
	.thumbnail-image {
		background-size: cover;
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
							Update Tour Item
						</h1>
					</div>
				</div>
			</section>
			<section class="hero">
				<div class="columns">
					<div class="column is-6" style="margin-top:30px;">
						<?php print('<pre>'.print_r($tour_details,true).'</pre>') ?>
						<?php print('<pre>'.print_r($tour_prices,true).'</pre>') ?>
						<?php print('<pre>'.print_r($tour_itineraries,true).'</pre>') ?>

						<form action="<?php echo site_url('tourcontroller/updatetours/'.$tour_details[0]->tour_id);?>" method="post"
							enctype="multipart/form-data">
							<div class="field">
								<div class="control">
									<input class="input is-info" name="name" type="text"
										value="<?php echo $tour_details[0]->name;?>" placeholder="Tour Name">
								</div>
							</div>
							<div class="field">
								<div class="control">
									<input class="input is-info" name="description" type="text"
										value="<?php echo $tour_details[0]->description;?>" placeholder="Description"
									>
								</div>
							</div>
							<div class="field">
								<div class="control">
									<textarea class="textarea is-info" placeholder="Introduction" name="introduction"
									><?php echo $tour_details[0]->introduction;?></textarea>
								</div>
							</div>
							<div class="field">
								<div class="control">
									<div class="select is-info">
										<select name="tour_type">
											<option value="">Tour Type</option>
											<option value="common"
												<?php echo ($tour_details[0]->tour_type == 'common') ? 'selected': '' ?>>
												Common</option>
											<option value="beach"
												<?php echo ($tour_details[0]->tour_type == 'beach') ? 'selected': '' ?>>
												Beach</option>
											<option value="eco"
												<?php echo ($tour_details[0]->tour_type == 'eco') ? 'selected': '' ?>>
												Eco</option>
											<option value="nature"
												<?php echo ($tour_details[0]->tour_type == 'nature') ? 'selected': '' ?>>
												Nature</option>
											<option value="wild life"
												<?php echo ($tour_details[0]->tour_type == 'wild life') ? 'selected': '' ?>>
												Wild Life</option>
											<option value="adventure"
												<?php echo ($tour_details[0]->tour_type == 'adventure') ? 'selected': '' ?>>
												Adventure</option>
											<option value="action"
												<?php echo ($tour_details[0]->tour_type == 'action') ? 'selected': '' ?>>
												Action</option>
											<option value="ayurweda"
												<?php echo ($tour_details[0]->tour_type == 'ayurweda') ? 'selected': '' ?>>
												Ayurweda</option>
										</select>
									</div>
								</div>
							</div>
							<div class="field">
								<div class="control">
									<div class="select is-info">
										<select name="suitable_for">
											<option value="">Suitable for</option>
											<option value="seniors"
												<?php echo ($tour_details[0]->suitable_for == 'seniors') ? 'selected': '' ?>>
												Seniors</option>
											<option value="couples"
												<?php echo ($tour_details[0]->suitable_for == 'couples') ? 'selected': '' ?>>
												Couples</option>
											<option value="family"
												<?php echo ($tour_details[0]->suitable_for == 'family') ? 'selected': '' ?>>
												Family</option>
											<option value="honeymooners"
												<?php echo ($tour_details[0]->suitable_for == 'honeymooners') ? 'selected': '' ?>>
												Honeymooners</option>
											<option value="small group"
												<?php echo ($tour_details[0]->suitable_for == 'small group') ? 'selected': '' ?>>
												Small Group </option>
											<option value="researchers"
												<?php echo ($tour_details[0]->suitable_for == 'researchers') ? 'selected': '' ?>>
												Researchers</option>
											<option value="singles + kids"
												<?php echo ($tour_details[0]->suitable_for == 'singles + kids') ? 'selected': '' ?>>
												Singles + kids</option>
											<option value="pilgrims"
												<?php echo ($tour_details[0]->suitable_for == 'pilgrims') ? 'selected': '' ?>>
												Pilgrims</option>
										</select>
									</div>
								</div>
							</div>
							<div class="field">
								<div class="control">
									<hr>
									Price
									<div style="margin-bottom:20px; cursor:pointer;" id="pricetags">
										<p id="add_price" style="background-color:green; width:30%; color:white;">ADD
											PRICE</p>
									</div>
									<?php foreach($tour_prices as $tour_price):?>
									<div class="columns is-mobile is-multiline ">
										<div class="column select is-info is-3">
											<select name="hotelType[]">
												<option value="">Hotel Type</option>
												<option value="3"
													<?php echo ($tour_price->hotel_type == '3') ? 'selected': '' ?>>3
													star</option>
												<option value="4"
													<?php echo ($tour_price->hotel_type == '4') ? 'selected': '' ?>>4
													star</option>
												<option value="5"
													<?php echo ($tour_price->hotel_type == '5') ? 'selected': '' ?>>5
													star</option>
											</select>
										</div>

										<div class="column ">
											<input class="column is-7 input is-info" name="hotelPrice[]" type="text"
												placeholder="price" value="<?php echo $tour_price->price; ?>">
										</div>

									</div>
									<?php endforeach;?>
									<hr>
								</div>
							</div>

							<label for="">Photo</label>
							<div class="field">
								<div class="control">
									<div class="file">
										<label class="file-label">
											<input class="file-input input-photo" type="file" name="photo_id"
												accept="image/jpg, image/jpeg, image/png" onchange="readURL(this);"
											>
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
									<img id="thumbnail"
										src="<?php echo base_url().'assets/images/tours/'.$tour_details[0]->photo_id; ?>"
										alt="your image" class="thumbnail-image" />
								</div>
							</div>

							<label for="">Map</label>
							<div class="field">
								<div class="control">
									<div class="file">
										<label class="file-label">
											<input class="file-input input-map" type="file" name="map_id"
												accept="image/jpg, image/jpeg, image/png" onchange="readURLMap(this);"
											>
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
									<img id="thumbnail-map"
										src="<?php echo base_url().'assets/images/tours/'.$tour_details[0]->map_id; ?>"
										alt="your image" class="thumbnail-image" />
								</div>
							</div>



							<hr>
							<h2>Itinerary</h2><br>

							<div class="counters" style="font-weight:700; font-size:1.2em;">Added Days - <span
									class="itinerary-counter"><?php echo sizeof($tour_itineraries)?></span></div>
							<p id="add_field" style="background-color:green; width:30%; color:white;">ADD DESCRIPTION
							</p>
							<div class="columns is-mobile is-multiline ">
								<?php $i=0; ?>
								<?php foreach($tour_itineraries as $tour_itinerary): ?>
								<div class="column is-11">
									<strong>Itinarary Item - <?php $i++; echo $i; ?> </strong>
								</div>
								<div class="column is-narrow is-4">
									<input class="column is-3 input is-info" name="day[]" type="text" placeholder="Day"
										value="<?php echo $tour_itinerary->item_number;?>">
								</div>
								<div class="column is-8">
									<textarea class="textarea is-info is-12" name="desc[]" type="text" placeholder=""
										value=""><?php echo $tour_itinerary->item_details;?></textarea>
								</div>


								<?php endforeach; ?>

								<div style="margin-bottom:20px; cursor:pointer;" id="description"></div>
							</div>
							<hr>
							<div class="field">
								<div class="control">
									<div class="select is-info">
										<select name="duration">
											<option value="">Duration</option>
											<option value="7"
												<?php echo ($tour_details[0]->duration == '7') ? 'selected': '' ?>>7
												Days</option>
											<option value="10-12"
												<?php echo ($tour_details[0]->duration == '10-12') ? 'selected': '' ?>>
												10-12 Days</option>
											<option value="14"
												<?php echo ($tour_details[0]->duration == '14') ? 'selected': '' ?>>14
												Days</option>
											<option value="14+"
												<?php echo ($tour_details[0]->duration == '14+') ? 'selected': '' ?>>14+
											</option>
										</select>
									</div>
								</div>
							</div>

							<div class="field">
								<div class="control">
									<hr>
									Highlights
									<div class="counters" style="font-weight:700; font-size:1.2em;">Added Highlights -
										<span class="highlights-counter"><?php echo sizeof($tour_highlights);?></span>
									</div>
									<div style="margin-bottom:20px; cursor:pointer;" id="highlights">
										<p id="add_highlights" style="background-color:green; width:30%; color:white;">
											ADD HIGHLIGHTS</p>
									</div>
									<div class="columns is-mobile is-multiline ">
										<?php $y=0; ?>
										<?php foreach($tour_highlights as $tour_highlight): ?>
										<div class="column is-11">
											<strong>Highlight count - <?php $y++; echo $y;?> </strong>
										</div>

										<div class="column is-12 ">
											<input class="column is-12 input is-info" name="highlights[]" type="text"
												placeholder="Description"
												value="<?php echo $tour_highlight->highlights;?>">
										</div>


										<?php endforeach; ?>
									</div>
									<hr>
								</div>
							</div>

							<div class="field">
								<div class="control">
									<hr>
									Services
									<div class="counters" style="font-weight:700; font-size:1.2em;">Includes - <span
											class="includes-counter"><?php echo sizeof($tour_includes); ?></span></div>
									<div style="margin-bottom:20px; cursor:pointer;" id="includes">
										<p id="add_includes" style="background-color:green; width:30%; color:white;">ADD
											INCLUDES</p>
									</div>
									<div class="columns is-mobile is-multiline ">
										<?php $a=0; ?>
										<?php foreach($tour_includes as $tour_include): ?>
										<div class="column is-11">
											<strong>Includes count - <?php $a++; echo $a; ?> </strong>
										</div>
										<div class="column is-12 ">
											<input class="column is-12 input is-info" name="includes[]" type="text"
												placeholder="Description"
												value="<?php echo $tour_include->includes; ?>">
										</div>
									</div>
									<?php endforeach; ?>

									<div class="counters" style="font-weight:700; font-size:1.2em;">Excludes - <span
											class="excludes-counter"><?php echo sizeof($tour_excludes); ?></span></div>
									<div style="margin-bottom:20px; cursor:pointer;" id="excludes">
										<p id="add_excludes" style="background-color:green; width:30%; color:white;">ADD
											EXCLUDES</p>
									</div>

									<?php $b=0; ?>
									<?php foreach($tour_excludes as $tour_exclude): ?>
									<div class="columns is-mobile is-multiline ">
										<div class="column is-11">
											<strong>Excludes count - <?php $b++; echo $b; ?> </strong>
										</div>
										<div class="column is-12 ">
											<input class="column is-12 input is-info" name="excludes[]" type="text"
												placeholder="Description"
												value="<?php echo $tour_exclude->excludes; ?>">
										</div>
									</div>
									<?php endforeach; ?>

									<div class="counters" style="font-weight:700; font-size:1.2em;">Options - <span
											class="options-counter"><?php echo sizeof($tour_options); ?></span></div>
									<div style="margin-bottom:20px; cursor:pointer;" id="options">
										<p id="add_options" style="background-color:green; width:30%; color:white;">ADD
											OPTIONS</p>
									</div>

									<?php $c=0; ?>
									<?php foreach($tour_options as $tour_option): ?>
									<div class="columns is-mobile is-multiline ">
										<div class="column is-11">
											<strong>Option count - <?php $c++; echo $c;?> </strong>
										</div>
										<div class="column is-12 ">
											<input class="column is-12 input is-info" name="options[]" type="text"
												placeholder="Description" value="<?php echo $tour_option->options; ?>">
										</div>
									</div>

									<?php endforeach; ?>


									<hr>
								</div>
							</div>


							<div class="field">
								<div class="control">
									<div class="select is-info">
										<select name="rating">
											<option value="">Sunway Rating</option>
											<option value="0" <?php echo ($tour_details[0]->ratings == '0') ? 'selected': '' ?>>0</option>
											<option value="1"<?php echo ($tour_details[0]->ratings == '1') ? 'selected': '' ?>>1</option>
										</select>
									</div>
								</div>
							</div>

							<div class="field">
								<div class="control">
									<input class="column is-3 button is-block is-info is-medium is-fullwidth"
										type="submit" value="Add Tour">
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
		
		window.location.href = '<?php echo base_url();?>update-tours';
	});

</script>

<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script async type="text/javascript" src="<?php echo base_url(); ?>assets/js/update-form.js"></script>


<?php else : ?>
<?php redirect('home'); ?>
<?php endif; ?>

<?php else : ?>
<?php redirect('home'); ?>
<?php endif; ?>
