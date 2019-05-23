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

						<form action="<?php echo site_url('tourController/updateTours/'.$tour_detail->tour_id);?>"
							method="post" enctype="multipart/form-data">
							<div class="field">
								<div class="control">

									<input class="input is-info" name="name" type="text"
										value="<?php echo $tour_detail->name;?>" placeholder="Tour Name">
								</div>
							</div>
							<div class="field">
								<div class="control">
									<input class="input is-info" name="description" type="text"
										value="<?php echo $tour_detail->description;?>" placeholder="Description">
								</div>
							</div>
							<div class="field">
								<div class="control">
									<textarea class="textarea is-info" placeholder="Introduction"
										name="introduction"><?php echo $tour_detail->introduction;?></textarea>
								</div>
							</div>
							<div class="field">
								<div class="control">
									<div class="select is-info">
										<select name="tour_type">
											<option value="">Tour Type</option>
											<option value="common"
												<?php echo ($tour_detail->tour_type == 'common') ? 'selected': '' ?>>
												Common</option>
											<option value="culture"
												<?php echo ($tour_detail->tour_type == 'culture') ? 'selected': '' ?>>
												Culture</option>
											<option value="family"
												<?php echo ($tour_detail->tour_type == 'family') ? 'selected': '' ?>>
												Family</option>
											<option value="beach"
												<?php echo ($tour_detail->tour_type == 'classical beach') ? 'selected': '' ?>>
												Classical Beach</option>
											<option value="eco"
												<?php echo ($tour_detail->tour_type == 'eco') ? 'selected': '' ?>>
												Eco</option>
											<option value="nature"
												<?php echo ($tour_detail->tour_type == 'nature') ? 'selected': '' ?>>
												Nature</option>
											<option value="wild life"
												<?php echo ($tour_detail->tour_type == 'wild life') ? 'selected': '' ?>>
												Wild Life</option>
											<option value="adventure"
												<?php echo ($tour_detail->tour_type == 'adventure') ? 'selected': '' ?>>
												Adventure</option>
											<option value="active"
												<?php echo ($tour_detail->tour_type == 'active') ? 'selected': '' ?>>
												Active</option>
											<option value="ayurweda"
												<?php echo ($tour_detail->tour_type == 'ayurweda') ? 'selected': '' ?>>
												Ayurweda</option>
											<option value="ramayana"
												<?php echo ($tour_detail->tour_type == 'ramayana') ? 'selected': '' ?>>
												Ramayana</option>
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
												<?php echo ($tour_detail->suitable_for == 'seniors') ? 'selected': '' ?>>
												Seniors</option>
											<option value="couples"
												<?php echo ($tour_detail->suitable_for == 'couples') ? 'selected': '' ?>>
												Couples</option>
											<option value="family"
												<?php echo ($tour_detail->suitable_for == 'family') ? 'selected': '' ?>>
												Family</option>
											<option value="honeymooners"
												<?php echo ($tour_detail->suitable_for == 'honeymooners') ? 'selected': '' ?>>
												Honeymooners</option>
											<option value="small group"
												<?php echo ($tour_detail->suitable_for == 'small group') ? 'selected': '' ?>>
												Small Group </option>
											<option value="researchers"
												<?php echo ($tour_detail->suitable_for == 'researchers') ? 'selected': '' ?>>
												Researchers</option>
											<option value="singles + kids"
												<?php echo ($tour_detail->suitable_for == 'singles + kids') ? 'selected': '' ?>>
												Singles + kids</option>
											<option value="pilgrims"
												<?php echo ($tour_detail->suitable_for == 'pilgrims') ? 'selected': '' ?>>
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
												class="photo1" accept="image/jpg, image/jpeg, image/png"
												onchange="readURL(this);">
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
										src="<?php echo base_url().'assets/images/tours/'.$tour_detail->photo_id; ?>"
										alt="your image" class="thumbnail-image" />
								</div>
							</div>

							<label for="">Map</label>
							<div class="field">
								<div class="control">
									<div class="file">
										<label class="file-label">
											<input class="file-input input-map" type="file" name="map_id" id="photo2"
												accept="image/jpg, image/jpeg, image/png" onchange="readURLMap(this);">
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
										src="<?php echo base_url().'assets/images/tours/'.$tour_detail->map_id; ?>"
										alt="your image" class="thumbnail-image" />
								</div>
							</div>

							<script>
								let photo = document.getElementById('photo1');
								let map = document.getElementById('photo2');

								photo.required = false;
								map.required = false;

							</script>



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
										value="<?php echo $tour_itinerary->item_number ;?>">
								</div>
								<div class="column is-8">
									<textarea class="textarea is-info is-12" name="desc[]" type="text" placeholder=""
										value=""><?php echo $tour_itinerary->item_details;?></textarea>
									<!-- <input type="hidden" name="itineraryId[]" value="<?php echo $tour_itinerary->itinerary_id; ?>" > -->
								</div>

								<div class="form-group">
									<label>Title</label>
									<input type="text" class="form-control" id="title" placeholder="Title" style="width:500px;">
								</div>

								<div class="columns is-mobile is-multiline">
									<div class="column is-info is-3">
										<p>Regular</p>
									</div>
									<div class="column ">
										<input class="column is-12 input is-info" name="regularName[]"
											type="text" placeholder="Hotel Name"
											value="<?php echo $tour_itinerary->regular; ?>">
									</div>
									<div class="column ">
										<input class="column is-12 input is-info" name="regularLink[]"
											type="text" placeholder="Website URL"
											value="<?php echo $tour_itinerary->regular_url; ?>">
									</div>
								</div>
								<div class="columns is-mobile is-multiline">
									<div class="column is-info is-3">
										<p>Standard</p>
									</div>
									<div class="column ">
										<input class="column is-12 input is-info" name="standardName[]"
											type="text" placeholder="Hotel Name"
											value="<?php echo $tour_itinerary->standard; ?>">
									</div>
									<div class="column ">
										<input class="column is-12 input is-info" name="standardLink[]"
											type="text" placeholder="Website URL"
											value="<?php echo $tour_itinerary->standard_url; ?>">
									</div>
								</div>
								<div class="columns is-mobile is-multiline">
									<div class="column is-info is-3">
										<p>Comfort</p>
									</div>
									<div class="column ">
										<input class="column is-12 input is-info" name="comfortName[]"
											type="text" placeholder="Hotel Name"
											value="<?php echo $tour_itinerary->comfort; ?>">
									</div>
									<div class="column ">
										<input class="column is-12 input is-info" name="comfortLink[]"
											type="text" placeholder="Website URL"
											value="<?php echo $tour_itinerary->comfort_url; ?>">
									</div>
								</div>
								<div class="columns is-mobile is-multiline">
									<div class="column is-info is-3">
										<p>Luxury</p>
									</div>
									<div class="column ">
										<input class="column is-12 input is-info" name="luxuryName[]"
											type="text" placeholder="Hotel Name"
											value="<?php echo $tour_itinerary->luxury; ?>">
									</div>
									<div class="column ">
										<input class="column is-12 input is-info" name="luxuryLink[]"
											type="text" placeholder="Website URL"
											value="<?php echo $tour_itinerary->luxury_url; ?>">
									</div>
								</div>


								<!-- <div class="columns is-mobile is-multiline ">
									<div class="column select is-info is-3">
										<select name="itinerary_hotelType[]" >
											<option value="">Hotel Type</option>
											<option value="R" <?php echo (isset($tour_hotels[0]) && ($tour_hotels[0]->hotel_type == 'R')) ? 'selected': ''; ?>>Reguler</option>
											<option value="3"<?php echo (isset($tour_hotels[0]) && ($tour_hotels[0]->hotel_type == '3')) ? 'selected': ''; ?>>3 star</option>
											<option value="4"<?php echo (isset($tour_hotels[0]) && ($tour_hotels[0]->hotel_type == '4')) ? 'selected': ''; ?>>4 star</option>
											<option value="5"<?php echo (isset($tour_hotels[0]) && ($tour_hotels[0]->hotel_type == '5')) ? 'selected': ''; ?>>5 star</option>
										</select>
									</div>
									<div class="column ">
										<input class="column is-12 input is-info" name="itinerary_hotelName[]" type="text" placeholder="Hotel Name" value="<?php echo (isset($tour_hotels[0]) ? $tour_hotels[0]->hotel_name : ' ');?>">
									</div>
									<div class="column ">
										<input class="column is-12 input is-info" name="itinerary_hotelLink[]" type="text" placeholder="Website URL" value="<?php echo (isset($tour_hotels[0]) ? $tour_hotels[0]->hotel_url : ' ');?>">
									</div>
								</div>
								<div class="columns is-mobile is-multiline ">
									<div class="column select is-info is-3">
										<select name="itinerary_hotelType[]" >
											<option value="">Hotel Type</option>
											<option value="R" <?php echo (isset($tour_hotels[1]) && ($tour_hotels[1]->hotel_type == 'R')) ? 'selected': ''; ?>>Reguler</option>
											<option value="3"<?php echo (isset($tour_hotels[1]) && ($tour_hotels[1]->hotel_type == '3')) ? 'selected': ''; ?>>3 star</option>
											<option value="4"<?php echo (isset($tour_hotels[1]) && ($tour_hotels[1]->hotel_type == '4')) ? 'selected': ''; ?>>4 star</option>
											<option value="5"<?php echo (isset($tour_hotels[1]) && ($tour_hotels[1]->hotel_type == '5')) ? 'selected': ''; ?>>5 star</option>
										</select>
									</div>
									<div class="column ">
										<input class="column is-12 input is-info" name="itinerary_hotelName[]" type="text" placeholder="Hotel Name" value="<?php echo (isset($tour_hotels[1]) ? $tour_hotels[1]->hotel_name : ' ');?>">
									</div>
									<div class="column ">
										<input class="column is-12 input is-info" name="itinerary_hotelLink[]" type="text" placeholder="Website URL" value="<?php echo (isset($tour_hotels[1]) ? $tour_hotels[1]->hotel_url : ' ');?>">
									</div>
								</div>
								<div class="columns is-mobile is-multiline ">
									<div class="column select is-info is-3">
										<select name="itinerary_hotelType[]" >
											<option value="">Hotel Type</option>
											<option value="R" <?php echo (isset($tour_hotels[2]) && ($tour_hotels[2]->hotel_type == 'R')) ? 'selected': ''; ?>>Reguler</option>
											<option value="3"<?php echo (isset($tour_hotels[2]) && ($tour_hotels[2]->hotel_type == '3')) ? 'selected': ''; ?>>3 star</option>
											<option value="4"<?php echo (isset($tour_hotels[2]) && ($tour_hotels[2]->hotel_type == '4')) ? 'selected': ''; ?>>4 star</option>
											<option value="5"<?php echo (isset($tour_hotels[2]) && ($tour_hotels[2]->hotel_type == '5')) ? 'selected': ''; ?>>5 star</option>
										</select>
									</div>
									<div class="column ">
										<input class="column is-12 input is-info" name="itinerary_hotelName[]" type="text" placeholder="Hotel Name" value="<?php echo (isset($tour_hotels[2]) ? $tour_hotels[2]->hotel_name : ' ');?>">
									</div>
									<div class="column ">
										<input class="column is-12 input is-info" name="itinerary_hotelLink[]" type="text" placeholder="Website URL" value="<?php echo (isset($tour_hotels[2]) ? $tour_hotels[2]->hotel_url : ' ');?>">
									</div>
								</div>
								<div class="columns is-mobile is-multiline ">
									<div class="column select is-info is-3">
										<select name="itinerary_hotelType[]" >
											<option value="">Hotel Type</option>
											<option value="R" <?php echo (isset($tour_hotels[3]) && ($tour_hotels[3]->hotel_type == 'R')) ? 'selected': ''; ?>>Reguler</option>
											<option value="3"<?php echo (isset($tour_hotels[3]) && ($tour_hotels[3]->hotel_type == '3')) ? 'selected': ''; ?>>3 star</option>
											<option value="4"<?php echo (isset($tour_hotels[3]) && ($tour_hotels[3]->hotel_type == '4')) ? 'selected': ''; ?>>4 star</option>
											<option value="5"<?php echo (isset($tour_hotels[3]) && ($tour_hotels[3]->hotel_type == '5')) ? 'selected': ''; ?>>5 star</option>
										</select>
									</div>
									<div class="column ">
										<input class="column is-12 input is-info" name="itinerary_hotelName[]" type="text" placeholder="Hotel Name" value="<?php echo (isset($tour_hotels[3]) ? $tour_hotels[3]->hotel_name : ' ');?>">
									</div>
									<div class="column ">
										<input class="column is-12 input is-info" name="itinerary_hotelLink[]" type="text" placeholder="Website URL" value="<?php echo (isset($tour_hotels[3]) ? $tour_hotels[3]->hotel_url : ' ');?>">
									</div>
								</div> -->

								<?php endforeach; ?>

								<div style="margin-bottom:20px; cursor:pointer;" id="description"></div>
							</div>
							<hr>
							<div class="field">
								<div class="control">
									<div class="select is-info">
										<select name="duration">
											<option value="">Duration</option>
											<option value="5"
												<?php echo ($tour_detail->duration == '5') ? 'selected': '' ?>>
												5
												Days</option>
											<option value="7"
												<?php echo ($tour_detail->duration == '7') ? 'selected': '' ?>>
												7
												Days</option>
											<option value="10-12"
												<?php echo ($tour_detail->duration == '10-12') ? 'selected': '' ?>>
												10-12 Days</option>
											<option value="14"
												<?php echo ($tour_detail->duration == '14') ? 'selected': '' ?>>
												14
												Days</option>
											<option value="14+"
												<?php echo ($tour_detail->duration == '14+') ? 'selected': '' ?>>
												14+
											</option>
										</select>
									</div>
								</div>
							</div>

							<div class="field">
								<div class="control">
									<hr>
									Highlights
									<div class="counters" style="font-weight:700; font-size:1.2em;">Added
										Highlights -
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
									<div class="counters" style="font-weight:700; font-size:1.2em;">Includes
										- <span class="includes-counter"><?php echo sizeof($tour_includes); ?></span>
									</div>
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

									<div class="counters" style="font-weight:700; font-size:1.2em;">Excludes
										- <span class="excludes-counter"><?php echo sizeof($tour_excludes); ?></span>
									</div>
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

									<div class="counters" style="font-weight:700; font-size:1.2em;">Options
										- <span class="options-counter"><?php echo sizeof($tour_options); ?></span>
									</div>
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
											<option value="0"
												<?php echo ($tour_detail->ratings == '0') ? 'selected': '' ?>>
												0</option>
											<option value="1"
												<?php echo ($tour_detail->ratings == '1') ? 'selected': '' ?>>
												1</option>
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
<script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>" type="text/javascript"></script>
 <script src="<?php echo base_url().'assets/js/jquery-ui.js'?>" type="text/javascript"></script>
 <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js" ></script>
	
<script>

	$('.btn-refresh').click(function () {
		window.location.href = '<?php echo base_url();?>update-tours';
	});

	    
	 
		console.log('text');
		$( "#title" ).autocomplete({
			source: "<?php echo site_url('tours/get?')?>"
		});
// let getUrl = window.location;
//         let baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

// 	$("#title").autocomplete({
//     source: function (request, response) {
//         $.ajax({
//             url: baseUrl +'/tours/get',
//             dataType: "json",
//             data: {
//                 term: request.term
//             },
//             success: function (data) {
//                 var parsed = JSON.parse(data);
//                 var newArray = new Array(parsed.length);
//                 var i = 0;

//                 parsed.forEach(function (entry) {
//                     var newObject = {
//                         label: entry.kwrdKeyWord
//                     };
//                     newArray[i] = newObject;
//                     i++;
//                 });

//                 response(newArray);
// 				console.log(newArray);
//             },
//             error: function (message) {
//                 response([]);
//             }
//         });
//     },
//     minLength: 2
// });

    

</script>

<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script async type="text/javascript" src="<?php echo base_url(); ?>assets/js/update-form.js"></script>


<?php else : ?>
<?php redirect('home'); ?>
<?php endif; ?>

<?php else : ?>
<?php redirect('home'); ?>
<?php endif; ?>
