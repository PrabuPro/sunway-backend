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
									<input class="input is-info" name="name" type="text" placeholder="Tour Name">
								</div>
							</div>
							<div class="field">
								<div class="control">
									<input class="input is-info" name="description" type="text" placeholder="Description">
								</div>
							</div>
                            <div class="field">
                                <div class="control">
                                    <textarea class="textarea is-info" placeholder="Introduction" name="introduction"></textarea>
                                </div>
                            </div>
							<div class="field">
								<div class="control">
									<div class="select is-info">
										<select name="tour_type">
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
										<select name="suitable_for">
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
									<input class="column is-5 input is-info" name="price" type="text" placeholder="Price">
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
									<input class="input is-info" name="location" type="text" placeholder="Location">
								</div>
							</div>
							<div class="field">
								<div class="control">
									<input class="column is-5 input is-info" name="lat" type="text" placeholder="Latitude">
								</div>
							</div>
							<div class="field">
								<div class="control ">
									<input class="column is-5 input is-info" name="lng" type="text" placeholder="Longitude">
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
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script async type="text/javascript" src="<?php echo base_url(); ?>assets/js/form.js"></script>


<?php else : ?>
<?php redirect('home'); ?>
<?php endif; ?>

<?php else : ?>
<?php redirect('home'); ?>
<?php endif; ?>
