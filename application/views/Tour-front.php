<section class="home-slider owl-carousel">
	<div class="slider-item" style="background-image: url('<?php echo base_url();?>assets/images/tour-main.jpg');"
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
	<div class="container-fluid">
		<div class="row pb-5 no-gutters">
			<div class="col-lg-4 bg-light p-3 p-md-5 d-flex align-items-center heading-section ftco-animate">
				<div>
					<h2 class="mb-5 pb-3" style="font-size:24px;">Want to get our hottest travel deals top tips and advice? Click
						below!</h2>
					<div class="col-sm-12 group mb-3">
						<input type="button" class="search-submit btn btn-primary" value="Find Tours"
							style="width:100%; font-size:1.5em;" onclick="window.location='<?php echo base_url(); ?>tours-list/0'">
					</div>

				</div>
			</div>
			<div class="col-lg-8 p-2 pl-md-5 heading-section">
				<h2 class="mb-5 p-2 pb-3 ftco-animate">Most Recommended Tours</h2>
				<div class="row no-gutters d-flex">

					<?php foreach($recommended_tours as $recommended_tour) : ?>

					<div class="col-md-6 col-lg-4 mb-4 ftco-animate">
						<a href="<?php echo site_url('tours/'.$recommended_tour->tour_id);?>" class="block-5"
							style="background-image: url('<?php echo base_url().'assets/images/tours/'.$recommended_tour->photo_id; ?>');">
							<div class="text">
								<span class="price">$
									<?php echo $recommended_tour->name; ?></span>
								<h3 class="heading">
									<?php echo $recommended_tour->name; ?>
								</h3>
								<div class="post-meta">
									<span>
										<?php echo $recommended_tour->description; ?></span>
								</div>
							</div>
						</a>
					</div>

					<?php endforeach; ?>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center mb-4 pb-4 ftco-animate">
          <div class="col-md-7 text-center heading-section">
            <h2>Pick your passion</h2>
          </div>
        </div>
        <div class="row">
        <h3 class="col-md-12 sub--para mb-5 ftco-animate" style="padding:0 6em;">We design each tour with passion and attention to detail, to make them spectacular and unique. To make it easy for you to select your forte, we have embedded collections of distinctive holiday plans to most sought after holiday themes. </h3>
        <div class="col-md-9"></div>
      
        
        </div>
        <div class="row no-gutters">
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="<?php echo base_url(); ?>search-tours/culture" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/anuradhapura.jpg');">
              <div class="text">
                <h3 class="heading">Culture & Heritage</h3>
                <div class="post-meta">
                  <span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="<?php echo base_url(); ?>search-tours/family" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/family.jpg');">
              <div class="text">
                <h3 class="heading">Family</h3>
                <div class="post-meta">
                    <span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="<?php echo base_url(); ?>search-tours/classical%20beach" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/trinco.jpg');">
              <div class="text">
                <h3 class="heading">Classical Beach</h3>
                <div class="post-meta">
                    <span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="<?php echo base_url(); ?>search-tours/luxury" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/luxury_1.jpg');">
              <div class="text">
                <h3 class="heading">Luxury</h3>
                <div class="post-meta">
                    <span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="<?php echo base_url(); ?>search-for/ramayana" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/ramayana.jpg');">
              <div class="text">
                <h3 class="heading">Ramayana</h3>
                <div class="post-meta">
                    <span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="<?php echo base_url(); ?>search-for/adventure" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/adventure.jpg');">
              <div class="text">
                <h3 class="heading">Adventure</h3>
                <div class="post-meta">
                    <span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="<?php echo base_url(); ?>search-for/active" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/active.jpg');">
              <div class="text">
                <h3 class="heading">Active</h3>
                <div class="post-meta">
                    <span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="<?php echo base_url(); ?>search-for/eco" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/eco.jpg');">
              <div class="text">
                <h3 class="heading">Eco & Wild Life Tours</h3>
                <div class="post-meta">
                    <span style="margin-bottom:4em;" >Ameeru Ahmed Magu Male’, Maldives</span>
                </div>
              </div>
            </a>
          </div>
         
        </div>
      </div>
    </section>

<style>
	.feature-list {
		display: flex;
		flex-direction: row;
		margin-left: 30%;
	}

	@media (max-width: 767.98px) {
		.feature-list {
			margin: auto;
		}
	}


	.feature-list-right {
		display: flex;
		flex-direction: row;
		margin-left: 20%;
	}

	@media (max-width: 767.98px) {
		.feature-list-right {
			margin: auto;
		}
	}

	.feature-list-text {
		margin-top: 50px;
		font-size: 20px;
		font-weight: 600;
		color: #000000;
	}

</style>

<section class="ftco-section ">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7 text-center heading-section ftco-animate">
				<h2>point section</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-6 d-flex align-self-stretch ftco-animate">
				<div class="feature-list">
					<svg class="tours--icon">
						<use xlink:href="<?php echo base_url();?>assets/images/sprite.svg#icon-pin"></use>
					</svg>
					<div class="tours-text">This title is awesome</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 d-flex align-self-stretch ftco-animate">
				<div class="feature-list-right">
					<svg class="tours--icon">
						<use xlink:href="<?php echo base_url();?>assets/images/sprite.svg#icon-pin"></use>
					</svg>
					<div class="tours-text">This title is awesome</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-6 d-flex align-self-stretch ftco-animate">
				<div class="feature-list">
					<svg class="tours--icon">
						<use xlink:href="<?php echo base_url();?>assets/images/sprite.svg#icon-pin"></use>
					</svg>
					<div class="tours-text">This title is awesome</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 d-flex align-self-stretch ftco-animate">
				<div class="feature-list-right">
					<svg class="tours--icon">
						<use xlink:href="<?php echo base_url();?>assets/images/sprite.svg#icon-pin"></use>
					</svg>
					<div class="tours-text">This title is awesome</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-6 d-flex align-self-stretch ftco-animate">
				<div class="feature-list">
					<svg class="tours--icon">
						<use xlink:href="<?php echo base_url();?>assets/images/sprite.svg#icon-pin"></use>
					</svg>
					<div class="tours-text">This title is awesome</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 d-flex align-self-stretch ftco-animate">
				<div class="feature-list-right">
					<svg class="tours--icon">
						<use xlink:href="<?php echo base_url();?>assets/images/sprite.svg#icon-pin"></use>
					</svg>
					<div class="tours-text">This title is awesome</div>
				</div>
			</div>
		</div>

	</div>
</section>
<div class="row justify-content-center bg-light">
	<div class="col-md-12 text-center heading-section ftco-animate mt-5">
		<h2>Reviews</h2>
	</div>
</div>
<div class="row bg-light">
	<div class="container ">

		<div class="well">
			<div class="list-group mt-5 mb-5 pb-5">
				<div class="list-group-item review_item">
					<div class="col-md-12">
						<h4 class="list-group-item-heading"> List group heading </h4>
						<p class="list-group-item-text"> Qui diam libris ei, vidisse incorrupte at mel. His euismod
							salutandi dissentiunt eu. Habeo offendit ea mea. Nostro blandit sea ea, viris timeam
							molestiae an has. At nisl platonem eum.
							Vel et nonumy gubergren, ad has tota facilis probatus. Ea legere legimus tibique cum, sale
							tantas vim ea, eu vivendo expetendis vim. Voluptua vituperatoribus et mel, ius no elitr
							deserunt mediocrem. Mea facilisi torquatos ad.
						</p>
					</div>
					<div class="col-md-12  bottom-review">
						<div class="stars" style="margin-right: 20px;">
							<svg class="review--icon">
								<use xlink:href="<?php echo base_url();?>assets/images/sprite.svg#icon-star"></use>
							</svg>
							<svg class="review--icon">
								<use xlink:href="<?php echo base_url();?>assets/images/sprite.svg#icon-star"></use>
							</svg>
							<svg class="review--icon">
								<use xlink:href="<?php echo base_url();?>assets/images/sprite.svg#icon-star"></use>
							</svg>
							<svg class="review--icon">
								<use xlink:href="<?php echo base_url();?>assets/images/sprite.svg#icon-star"></use>
							</svg>
							<svg class="review--icon">
								<use xlink:href="<?php echo base_url();?>assets/images/sprite.svg#icon-star-outlined"></use>
							</svg>
						</div>
						<h5><small> from </small> Country </h5>
					</div>
				</div>
				<div class="list-group-item review_item">
					<div class="col-md-12">
						<h4 class="list-group-item-heading"> List group heading </h4>
						<p class="list-group-item-text"> Qui diam libris ei, vidisse incorrupte at mel. His euismod
							salutandi dissentiunt eu. Habeo offendit ea mea. Nostro blandit sea ea, viris timeam
							molestiae an has. At nisl platonem eum.
							Vel et nonumy gubergren, ad has tota facilis probatus. Ea legere legimus tibique cum, sale
							tantas vim ea, eu vivendo expetendis vim. Voluptua vituperatoribus et mel, ius no elitr
							deserunt mediocrem. Mea facilisi torquatos ad.
						</p>
					</div>
					<div class="col-md-8  bottom-review">
						<div class="stars" style="margin-right: 20px;">
							<svg class="review--icon">
								<use xlink:href="<?php echo base_url();?>assets/images/sprite.svg#icon-star"></use>
							</svg>
							<svg class="review--icon">
								<use xlink:href="<?php echo base_url();?>assets/images/sprite.svg#icon-star"></use>
							</svg>
							<svg class="review--icon">
								<use xlink:href="<?php echo base_url();?>assets/images/sprite.svg#icon-star"></use>
							</svg>
							<svg class="review--icon">
								<use xlink:href="<?php echo base_url();?>assets/images/sprite.svg#icon-star"></use>
							</svg>
							<svg class="review--icon">
								<use xlink:href="<?php echo base_url();?>assets/images/sprite.svg#icon-star-outlined"></use>
							</svg>
						</div>
						<h5><small> from </small> Country </h5>
					</div>
				</div>
				
				<h5 class="mt-4 review-link col-md-2" onclick="window.location='<?php echo base_url(); ?>reviews'">Read More</h5>
					

			</div>
		</div>
	</div>
</div>
