<section class="home-slider owl-carousel">
	<div class="slider-item" style="background-image: url('<?php echo base_url();?>assets/images/bg_2.jpg');"
	 data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text align-items-center">
				<div class="col-md-7 col-sm-12 ftco-animate">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Tour</span></p>
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
						<a href="<?php echo site_url('tours/'.$result->tour_id);?>" class="block-5" style="background-image: url('<?php echo base_url().'assets/images/tours/'.$result->photo_id; ?>');">
							<div class="text">
								<span class="price">$
									<?php echo $result->price; ?></span>
								<h3 class="heading">Tour in
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
								<li><a href="<?php echo base_url(); ?>tours-list/0" data-ci-pagination-page="2" rel="previous">&lt;</a></li>
                <?php endif; ?>
                
								<?php for($i = 0; $i < $total_pagination ; $i++) : ?>
								<li <?php if(current_url()==base_url().'tours-list/'.$i*8) { $last = ($i+1)*8;  echo 'class="active"'; } ?>><span><a href="<?php echo base_url(); ?>tours-list/<?php echo $i*8; ?>"
										 data-ci-pagination-page="1">
                      <?php echo $i+1; ?></a></span></li>
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
										<select name="suitable_for" class="form-control">
											<option value="" class="form-control-option-white">Suitable for</option>
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
									<div class="select-wrap col-sm-12 group mb-3">
										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
										<select name="tour_type" class="form-control">
											<option value="" class="form-control-option-white">Tour Type</option>
											<option value="common" class="form-control-option-white" <?php if(isset($tour_type)){ if($tour_type=='common'
											 ) echo 'selected' ; } ?> >Common</option>
											<option value="beach" class="form-control-option-white" <?php if(isset($tour_type)){ if($tour_type=='beach'
											 ) echo 'selected' ; } ?> >Beach</option>
											<option value="echo" class="form-control-option-white" <?php if(isset($tour_type)){ if($tour_type=='eco' )
											 echo 'selected' ; } ?> >Eco</option>
											<option value="nature" class="form-control-option-white" <?php if(isset($tour_type)){ if($tour_type=='nature'
											 ) echo 'selected' ; } ?> >Nature</option>
											<option value="wild life" class="form-control-option-white" <?php if(isset($tour_type)){ if($tour_type=='wild life'
											 ) echo 'selected' ; } ?>>Wild Life</option>
											<option value="advanture" class="form-control-option-white" <?php if(isset($tour_type)){ if($tour_type=='adventure'
											 ) echo 'selected' ; } ?>>Adventure</option>
											<option value="action" class="form-control-option-white" <?php if(isset($tour_type)){ if($tour_type=='action'
											 ) echo 'selected' ; } ?> >Action</option>
											<option value="ayurweda" class="form-control-option-white" <?php if(isset($tour_type)){ if($tour_type=='ayurweda'
											 ) echo 'selected' ; } ?> >Ayurweda</option>
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
						<a href="<?php echo base_url(); ?>search-tours/common" class="tag-cloud-link" <?php if(current_url() == base_url().'search-tours/common') echo "style='background-color:#000000; color:#ffffff;'"?>>Common</a>
						<a href="<?php echo base_url(); ?>search-tours/beach" <?php if(current_url() == base_url().'search-tours/beach') echo "style='background-color:#000000; color:#ffffff;'"?> class="tag-cloud-link">Beach</a>
						<a href="<?php echo base_url(); ?>search-tours/eco" <?php if(current_url() == base_url().'search-tours/eco') echo "style='background-color:#000000; color:#ffffff;'"?> class="tag-cloud-link">Eco</a>
						<a href="<?php echo base_url(); ?>search-tours/nature" <?php if(current_url() == base_url().'search-tours/nature') echo "style='background-color:#000000; color:#ffffff;'"?> class="tag-cloud-link">Nature</a>
						<a href="<?php echo base_url(); ?>search-tours/wild life" <?php if(current_url() == base_url().'search-tours/wild%20life') echo "style='background-color:#000000; color:#ffffff;'"?> class="tag-cloud-link">Wild Life</a>
						<a href="<?php echo base_url(); ?>search-tours/adventure" <?php if(current_url() == base_url().'search-tours/adventure') echo "style='background-color:#000000; color:#ffffff;'"?> class="tag-cloud-link">Adventure</a>
						<a href="<?php echo base_url(); ?>search-tours/action" <?php if(current_url() == base_url().'search-tours/action') echo "style='background-color:#000000; color:#ffffff;'"?> class="tag-cloud-link">Action</a>
						<a href="<?php echo base_url(); ?>search-tours/ayurweda" <?php if(current_url() == base_url().'search-tours/ayurweda') echo "style='background-color:#000000; color:#ffffff;'"?> class="tag-cloud-link">Ayurweda</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
