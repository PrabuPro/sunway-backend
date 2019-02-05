  <section class="hero is-fullheight">

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
	<div class="hero-body">
		<div class="container has-text-centered">
			<div class="column is-4 is-offset-4">

				<h3 class="title has-text-grey">Register</h3>

				<div class="box">
					<figure class="avatar">
						<img src="<?php echo base_url();?>/assets/images/logo.jpg">
					</figure>
					<form action="adminsunway/register" method="post">
						<div class="field">
							<div class="control">
								<input class="input is-large"  name="username" type="text" placeholder="User Name" autofocus="">
							</div>
						</div>

						<div class="field">
							<div class="control">
								<input class="input is-large" name="password" type="password" placeholder="Password">
							</div>
						</div>
						<div class="field">
							<div class="control">
								<input class="input is-large"name="confirm_password" type="password" placeholder="Confirm Password">
							</div>
						</div>
						<div class="field">
							<label class="checkbox">
								<input type="checkbox">
								Remember me
							</label>
						</div>
						<input class="button is-block is-info is-large is-fullwidth" name="register" type="submit" value="Register">
					</form>
				</div>
			</div>
		</div>
	</div>

  
  
  
  
  <!-- <section class="ftco-section" style="display:block; margin:auto;">
        <div class="container" style="text-align:center;">
             <div class="row slider-text align-items-center">
                    <div class="col-md-4 col-sm-12">
                        <h1 class="mb-3 mt-5">Register</h1>
                    </div>
            </div>

            <div class="row col-md-4 col-sm-12">
                    <?php if($this->session->flashdata('errors')): ?>

                    <?php echo $this->session->flashdata('errors'); ?>

                    <?php endif; ?>
            </div>

                <form action="adminsunway/register" method="post" class="form">

                    <div class="row mb-3 mt-3 col-md-4 col-sm-12">
                        <input name="username" type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="row mb-3 mt-3 col-md-4 col-sm-12">
                        <input name="password" type="passsword" class="form-control" placeholder="Password">
                    </div>
                    <div class="row mb-3 mt-3 col-md-4 col-sm-12">
                        <input name="confirm_password" type="passsword" class="form-control" placeholder="Confirm Password">
                    </div>
                    <div class="row mb-3 mt-3 col-md-4 col-sm-12">
                        <input name="login" type="submit" class="search-submit btn btn-primary" value="Register">
                    </div>

                </form>

        </div>
    </section> -->