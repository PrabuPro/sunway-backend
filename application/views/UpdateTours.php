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
			
			<section class="hero is-info welcome is-small">
				<div class="hero-body">
					<div class="container">
						<h1 class="title">
							Update Tour
						</h1>

					

					</div>
				</div>
			</section>
			<section class="hero">
				<div class="columns">
					<div class="column is-8" style="margin-top:30px;">

						<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
							<thead>
								<tr>
									<th><abbr title="tour_id">Tour ID</abbr></th>
									<th><abbr title="tour Name">Tour Name</abbr></th>
									<th><abbr title="update_delete">Update / Delete</abbr></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($tour_names as $tour_name): ?>
								<tr>
									<td><?php echo $tour_name->tour_id;?></td>
									<td><?php echo $tour_name->name;?></td>
									<td><a href="<?php echo site_url('update-item/'.$tour_name->tour_id);?>">Update</a><br><a href="">Delete</a></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>

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
