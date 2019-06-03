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
							Add Tour Category
						</h1>

					

					</div>
				</div>
			</section>
			<section class="hero">
				<div class="columns">
					<div class="column is-8" style="margin-top:30px;">
						<form action="">
                            <h4>Suitable For</h4>
                            <div class="field">
                                <label class="checkbox ">
                                    <input type="checkbox" value="">
                                    Romantic Holidays
                                </label>
                            </div>
                            <div class="field">
                                <label class="checkbox ">
                                    <input type="checkbox" value="">
                                    Couples + Family
                                </label>
                            </div>
                            <div class="field">
                                <label class="checkbox ">
                                    <input type="checkbox" value="">
                                    Travelling Solo
                                </label>
                            </div>
                            <div class="field">
                                <label class="checkbox ">
                                    <input type="checkbox" value="">
                                    Families With Teenagers/ Older Children
                                </label>
                            </div>
                            <div class="field">
                                <label class="checkbox ">
                                    <input type="checkbox" value="">
                                    Families with kids
                                </label>
                            </div>
                            <div class="field">
                                <label class="checkbox ">
                                    <input type="checkbox" value="">
                                    seniors
                                </label>
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


</script>

<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script async type="text/javascript" src="<?php echo base_url(); ?>assets/js/form.js"></script>


<?php else : ?>
<?php redirect('home'); ?>
<?php endif; ?>

<?php else : ?>
<?php redirect('home'); ?>
<?php endif; ?>