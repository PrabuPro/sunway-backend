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
	<div class="container-fluid">
		<div class="row pb-5 no-gutters">
			<div class="col-lg-4 bg-light p-3 p-md-5 d-flex align-items-center heading-section ftco-animate">
				<div>
					<h2 class="mb-5 pb-3" style="font-size:24px;">Want to get our hottest travel deals top tips and advice? Click
						below!</h2>
					<div class="col-sm-12 group mb-3">
						<input type="button" class="search-submit btn btn-primary" value="Find Tours" style="width:100%; font-size:1.5em;"
						 onclick="window.location='<?php echo base_url(); ?>tours-list/0'">
					</div>

				</div>
			</div>
			<div class="col-lg-8 p-2 pl-md-5 heading-section">
				<h2 class="mb-5 p-2 pb-3 ftco-animate">Most Recommended Tours</h2>
				<div class="row no-gutters d-flex">

					<?php foreach($recommended_tours as $recommended_tour) : ?>

						<div class="col-md-6 col-lg-4 mb-4 ftco-animate">
							<a href="<?php echo site_url('tours/'.$recommended_tour->tour_id);?>" class="block-5" style="background-image: url('<?php echo base_url().'assets/images/tours/'.$recommended_tour->photo_id; ?>');">
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

<section class="ftco-section" style="padding-top:0; padding-bottom:0">
	<div class="container-fluid">
		<div class="row no-gutters justify-content-center mb-4 pb-4 ftco-animate">
			<div class="col-md-7 text-center heading-section">
				<h2>Type of Tours</h2>
			</div>
		</div>

		<div class="row no-gutters">
			<div class="col-md-6 col-lg-3 ftco-animate">
				<a href="<?php echo base_url(); ?>search-tours/common" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/trip.jpeg');">
					<div class="text">
						<h3 class="heading">Common - Classical Tour</h3>
						<div class="post-meta">
							<span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<a href="<?php echo base_url(); ?>search-tours/nature" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/nature.jpg');">
					<div class="text">
						<h3 class="heading">Nature </h3>
						<div class="post-meta">
							<span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<a href="<?php echo base_url(); ?>search-tours/beach" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/tour-3.jpg');">
					<div class="text">
						<h3 class="heading">Beach</h3>
						<div class="post-meta">
							<span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<a href="<?php echo base_url(); ?>search-tours/wild" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/safari.jpg');">
					<div class="text">
						<h3 class="heading">Wild</h3>
						<div class="post-meta">
							<span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<a href="<?php echo base_url(); ?>search-for/honeymoon" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/honeymoon.jpeg');">
					<div class="text">
						<h3 class="heading">Honeymoon</h3>
						<div class="post-meta">
							<span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<a href="<?php echo base_url(); ?>search-for/family" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/family.jpeg');">
					<div class="text">
						<h3 class="heading">Family Trous</h3>
						<div class="post-meta">
							<span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<a href="<?php echo base_url(); ?>search-for/small group" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/group.jpeg');">
					<div class="text">
						<h3 class="heading">Friends Tours</h3>
						<div class="post-meta">
							<span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<a href="<?php echo base_url(); ?>maldives" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/tour-8.jpg');">
					<div class="text">
						<h3 class="heading">Group Tour in Maldives</h3>
						<div class="post-meta">
							<span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
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
        margin:auto; } }
    
    
	.feature-list-right {
        display: flex;
		flex-direction: row;
        margin-left: 20%;
    }
    
    @media (max-width: 767.98px) {
      .feature-list-right {
        margin:auto; } }

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
