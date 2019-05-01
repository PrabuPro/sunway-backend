<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
	<META http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - Sunway Holidays</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.7.2-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bulma.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/admin.css"> -->
</head>

<body>
<!-- START NAV -->
<nav class="navbar is-white">
	<div class="container">
		<div id="navMenu" class="navbar-menu">
			<div class="navbar-start">
				<a class="navbar-item" href="<?php echo site_url('addtoursview');?>">
					Add Tour
				</a>
				<a class="navbar-item" href="<?php echo site_url('update-tours');?>">
					Update Tours
				</a>
				<a class="navbar-item" href="<?php echo site_url('addhotelsview');?>">
					Add Hotel
				</a>
				<a class="navbar-item" href="admin.html">
					Add Transport
				</a>
				<a class="navbar-item" href="<?php echo site_url('add-news');?>">
					Add News
				</a>
			</div>
			<div class="navbar-end">
				<p class="has-text-grey">
					<a href="<?php echo site_url("/pro-reg");?>">Sign Up</a> &nbsp;·&nbsp;
				</p>
				<form action="<?php echo site_url('logout'); ?>" method="post">
					<input class="button is-block is-info is-medium is-fullwidth" type="submit" value="Log Out">
				</form>
			</div>

		</div>
	</div>
</nav>
<!-- END NAV -->

     <?php $this->load->view($site_view);?>

</body>

</html>