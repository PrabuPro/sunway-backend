<section class="home-slider owl-carousel">
	<div class="slider-item" style="background-image: url('<?php echo base_url();?>assets/images/tour-main-2.jpg');  background-position: center;"
	 data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text align-items-center">
				<div class="col-md-7 col-sm-12 ftco-animate">
					<h1 class="mb-3">Tours Destination</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END slider -->



<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<h2 class="mb-5 pb-3" style="font-size:40px; font-weight:600; text-transform:capitalize;">
					<?php if(isset($suitable)){ echo  $tour_type . ' for ' . $suitable ;  } else if (isset($tour_type)){ echo urldecode($tour_type) ; } else { echo "All Types"; }?>
				</h2>
				<div class="row ">

					<?php foreach($results as $result) : ?>
					<div class="col-md-6 col-lg-6 mb-4 ftco-animate">
						<a href="<?php echo base_url() . 'tours/'.$result->tour_id ;?>" class="block-5" style="background-image: url('<?php echo base_url().'assets/images/tours/'.$result->photo_id; ?>');">
							<div class="text">
								
								<h3 class="heading">
									<?php echo $result->name; ?>
								</h3>
								<div class="post-meta">
									<span>
										<?php echo $result->description; ?></span>
								</div>
							</div>
						</a>
					</div>
					<?php endforeach; ?>


				</div>
				<div class="row mt-5">
					<div class="col text-center">
						<div class="block-27">

            <?php global $last ?>
            
              <?php if(!(current_url() == base_url().'search-tours')) : ?>
              
							<ul>
								<!-- <li><a href="#">&lt;</a></li> -->
								<!-- <li><a href="http://localhost/sunwayholidays/tours-list/0" data-ci-pagination-page="2" rel="previous">&gt;</a></li> -->
								<?php if($total_pagination > 1) : ?>
								<li><a href="<?php echo base_url(); ?>tours-list/0" data-ci-pagination-page="2" rel="previous" <?php echo (current_url()==base_url().'tours-list/0') ? 'class="active"' : ' '?>>&lt;</a></li>
                <?php endif; ?>
                
								<?php for($i = 0; $i < $total_pagination ; $i++) : ?>
								<li <?php if(current_url()==base_url().'tours-list/'.$i*10) { $last = ($i+1)*10;  echo 'class="active"'; } ?>><span><a href="<?php echo base_url(); ?>tours-list/<?php echo $i*10; ?>"
										 data-ci-pagination-page="1">
					  <?php if( $i > $total_pagination - 1 ) :?>
					  <?php $last = 0; ?>
					 
						<?php endif;?>
								
                      <?php echo $i+1; $last ?></a></span></li>
                <?php endfor; ?>
                
								<?php if($total_pagination > 1) : ?>
								<li><a href="<?php echo base_url(); ?>tours-list/<?php echo $last; ?>" data-ci-pagination-page="2" rel="previous">&gt;</a></li>
								<?php endif; ?>

							</ul>
              <?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<!-- END -->

			<div class="col-lg-4 sidebar">
				<div class="sidebar-box ftco-animate">
					<div class="search-tours bg-light p-4">
						<h3>Find your tour</h3>
						<form action="<?php echo site_url('search-tours');?>" method="post" class="form">
							<div class="fields">
								<div class="row flex-column">

									<div class="check-in col-sm-12 group mb-3"><input type="text" id="checkin_date" class="form-control" name="check-in-date"
										 placeholder="Check-in date" <?php if(isset($check_in_date)) echo 'value=' . $check_in_date; ?> ></div>


									<div class="check-out col-sm-12 group mb-3"><input type="text" id="checkout_date" class="form-control" name="check-out-date"
										 placeholder="Check-out date" <?php if(isset($check_out_date)) echo 'value=' . $check_out_date; ?> ></div>
											<div class="select-wrap col-sm-12 group mb-3">
												<div class="icon"><span class="ion-ios-arrow-down"></span></div>
												<select name="tour_type" class="form-control">
													<option value="" class="form-control-option-white">Tour Type</option>
													<option value="culture" class="form-control-option-white" <?php if(isset($tour_type)){ if($tour_type=='culture'
													 ) echo 'selected' ; } ?> >Culture</option>
													<option value="family" class="form-control-option-white" <?php if(isset($tour_type)){ if($tour_type=='family'
													 ) echo 'selected' ; } ?> >Family</option>
													<option value="beach" class="form-control-option-white" <?php if(isset($tour_type)){ if($tour_type=='beach'
													 ) echo 'selected' ; } ?> >Classical Beach</option>
													<option value="eco" class="form-control-option-white" <?php if(isset($tour_type)){ if($tour_type=='eco' )
													 echo 'selected' ; } ?> >Eco</option>
													<option value="adventure" class="form-control-option-white" <?php if(isset($tour_type)){ if($tour_type=='adventure'
													 ) echo 'selected' ; } ?>>Adventure</option>
													<option value="active" class="form-control-option-white" <?php if(isset($tour_type)){ if($tour_type=='active'
													 ) echo 'selected' ; } ?> >Active</option>		
													<option value="ramayana" class="form-control-option-white" <?php if(isset($tour_type)){ if($tour_type=='ramayana'
													 ) echo 'selected' ; } ?> >Ramayana</option>
													 <option value="luxury" class="form-control-option-white" <?php if(isset($tour_type)){ if($tour_type=='luxury'
													 ) echo 'selected' ; } ?> >Luxury</option>
												</select>
											</div>
									<div class="select-wrap col-sm-12 group mb-3">
										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
										<select name="suitable_for" class="form-control">
											<option value="" class="form-control-option-white">Suitable for</option>
											<option value="any" class="form-control-option-white" <?php if(isset($suitable)){ if($suitable=='seniors'
											 ) echo 'selected' ; } ?> >Any</option>
											<option value="seniors" class="form-control-option-white" <?php if(isset($suitable)){ if($suitable=='seniors'
											 ) echo 'selected' ; } ?> >Seniors</option>
											<option value="couples" class="form-control-option-white" <?php if(isset($suitable)){ if($suitable=='couples'
											 ) echo 'selected' ; } ?> >Couples</option>
											<option value="family" class="form-control-option-white" <?php if(isset($suitable)){ if($suitable=='family'
											 ) echo 'selected' ; } ?> >Family</option>
											<option value="honeymooners" class="form-control-option-white" <?php if(isset($suitable)){ if($suitable=='honeymooners'
											 ) echo 'selected' ; } ?> >Honeymooners</option>
											<option value="small gourp" class="form-control-option-white" <?php if(isset($suitable)){ if($suitable=='small gourp'
											 ) echo 'selected' ; } ?> >Small Group </option>
											<option value="researchers" class="form-control-option-white" <?php if(isset($suitable)){ if($suitable=='researchers'
											 ) echo 'selected' ; } ?> >Researchers</option>
											<option value="singles + kids" class="form-control-option-white" <?php if(isset($suitable)){ if($suitable=='singles + kids'
											 ) echo 'selected' ; } ?> >Singles + kids</option>
											<option value="pilgrims" class="form-control-option-white" <?php if(isset($suitable)){ if($suitable=='pilgrims'
											 ) echo 'selected' ; } ?> >Pilgrims</option>
										</select>
									</div>
									<div class="col-sm-12 group mb-3">
										<input type="submit" class="search-submit btn btn-primary" value="Find Tours">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="sidebar-box ftco-animate">
					<h3>Paragraph</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod
						mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate
						numquam!</p>
				</div>

				<div class="sidebar-box ftco-animate">
					<h3>Tag Cloud</h3>
					<div class="tagcloud">
						<a href="<?php echo base_url(); ?>search-tours/culture" class="tag-cloud-link" <?php if(current_url() == base_url().'search-tours/culture') echo "style='background-color:#000000; color:#ffffff;'"?>>Cluture</a>
						<a href="<?php echo base_url(); ?>search-tours/family" class="tag-cloud-link" <?php if(current_url() == base_url().'search-tours/family') echo "style='background-color:#000000; color:#ffffff;'"?>>Family</a>
						<a href="<?php echo base_url(); ?>search-tours/beach" <?php if(current_url() == base_url().'search-tours/classical%20beach') echo "style='background-color:#000000; color:#ffffff;'"?> class="tag-cloud-link">Classical Beach</a>
						<a href="<?php echo base_url(); ?>search-tours/eco" <?php if(current_url() == base_url().'search-tours/eco') echo "style='background-color:#000000; color:#ffffff;'"?> class="tag-cloud-link">Eco</a>
						<a href="<?php echo base_url(); ?>search-tours/adventure" <?php if(current_url() == base_url().'search-tours/adventure') echo "style='background-color:#000000; color:#ffffff;'"?> class="tag-cloud-link">Adventure</a>
						<a href="<?php echo base_url(); ?>search-tours/active" <?php if(current_url() == base_url().'search-tours/active') echo "style='background-color:#000000; color:#ffffff;'"?> class="tag-cloud-link">Active</a>
						<a href="<?php echo base_url(); ?>search-tours/ramayana" <?php if(current_url() == base_url().'search-tours/ramayana') echo "style='background-color:#000000; color:#ffffff;'"?> class="tag-cloud-link">Ramayana</a>
						<a href="<?php echo base_url(); ?>search-tours/luxury" <?php if(current_url() == base_url().'search-tours/luxury') echo "style='background-color:#000000; color:#ffffff;'"?> class="tag-cloud-link">Luxury</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
