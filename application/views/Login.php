<section class="hero is-fullheight">
	<div class="hero-body">
		<div class="container has-text-centered">
			<div class="column is-4 is-offset-4">

				<?php if($this->session->flashdata('errors')): ?>
				<article class="message is-danger">
					<div class="message-header">
						<p>Danger</p>
						<button class="delete" aria-label="delete"></button>
					</div>
					<div class="message-body">
						<?php echo $this->session->flashdata('errors'); ?>
					</div>
				</article>

				<?php endif; ?>

				<?php if($this->session->flashdata('success')): ?>

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

				<h3 class="title has-text-grey">Login</h3>
				<p class="subtitle has-text-grey">Please login to proceed.</p>
				<div class="box">
					<figure class="avatar">
						<img src="<?php echo base_url();?>/assets/images/logo.jpg">
					</figure>
					<form action="adminSunway/login" method="post" class="form">
						<div class="field">
							<div class="control">
								<input class="input is-large" name="username" type="text" placeholder="Your Name" autofocus="">
							</div>
						</div>

						<div class="field">
							<div class="control">
								<input class="input is-large" name="password" type="password" placeholder="Your Password">
							</div>
						</div>
						<div class="field">
							<label class="checkbox">
								<input type="checkbox">
								Remember me
							</label>
						</div>
						<input class="button is-block is-info is-large is-fullwidth" name="login" type="submit" value="Login">
					</form>
				</div>
	
			</div>
		</div>
	</div>
