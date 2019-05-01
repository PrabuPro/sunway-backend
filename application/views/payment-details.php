<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Pavan Welihinda">
	  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="<?php echo base_url();?>assets/css/bootstrap-select-country.css" rel="stylesheet" id="bootstrap-css">
	<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> -->
	<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
	  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	  <script src="<?php echo base_url();?>assets/js/bootstrap-select-country.js"></script>
	  
    <title>WebXPay | Sample checkout form</title>
  </head>
  <body> 

  <style>
 .input-block{
	 margin-bottom: 10px;
 }
 
 </style>

	<div class="container">
    <div class="row">
		<div class="col-xs-12 col-md-2"></div>
        <div class="col-xs-12 col-md-8" style="margin:auto;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Sercure Payment Checkout
                    </h3>
                </div>
                <div class="panel-body">
                    <form role="form">
                    <div class="form-group">
                        <label for="cardNumber">
                            Tour Details</label>
							<div class="row">
								<div class="col-xs-6 col-lg-6 mb-2 mt-2 input-block" >
									<input type="text" name="first_name" class="form-control mb-2 mt-2" placeholder="First name" required>
								</div>
								<div class="col-xs-6 col-lg-6 input-block" >
									<input type="text" name="last_name" class="form-control mb-2 mt-2" placeholder="Last name" required>
								</div>
								<div class="col-xs-12 col-lg-8 pl-ziro input-block">
									<input type="text" class="form-control" placeholder="Email Address" required />
								</div>
								<div class="col-xs-12 col-lg-6 pl-ziro input-block">
									<input type="text" class="form-control" placeholder="Contact Number" required />
								</div>
							</div>
							<label for="cardNumber">
                            Address</label>
							<div class="row">
								<div class="col-xs-12 col-lg-6 pl-ziro input-block">
									<input type="text" class="form-control" placeholder="Address line 1" required />
								</div>
								<div class="col-xs-12 col-lg-6 pl-ziro input-block">
									<input type="text" class="form-control" placeholder="City" required />
								</div>
								<div class="col-xs-12 col-lg-6 pl-ziro input-block">
									<input type="text" class="form-control" placeholder="State" required />
								</div>
								<div class="col-xs-12 col-lg-6 pl-ziro input-block">
									<input type="text" class="form-control" placeholder="Postal Code" required />
								</div>
								<div class="col-xs-12 col-lg-6 pl-ziro input-block">
									<input type="text" class="form-control" placeholder="Country" required />
								</div>
  							</div>
							<label for="cardNumber">
                            Amount</label>
							<div class="row">
								<div class="col-xs-12 col-lg-6 pl-ziro input-block">
									<input type="text" class="form-control" placeholder="" required />
								</div>
  							</div>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    
                    </form>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon glyphicon-usd"></span>4200</span> Final Payment</a>
                </li>
            </ul>
            <br/>
            <a href="http://www.jquery2dotnet.com" class="btn btn-success btn-lg btn-block" role="button">Pay</a>
        </div>
		<div class="col-xs-12 col-md-2"></div>
    </div>
</div>

       <form action="<?php echo $url; ?>" method="POST">
			First name: <input type="text" name="first_name" value="Pavan"><br>
			Last name: <input type="text" name="last_name" value="Welihinda"><br>
			Email: <input type="text" name="email" value="customer_email@email.com"><br>
			Contact Number: <input type="text" name="contact_number" value="0773606370"><br>
			Address Line 1: <input type="text" name="address_line_one" value="46/46, Green Lanka Building"><br>
			City: <input type="text" name="city" value="Colombo"><br>
			State: <input type="text" name="state" value="Western"><br>
			Zip/Postal Code: <input type="text" name="postal_code" value="10300"><br>
			Country: <input type="text" name="country" value="Sri Lanka"><br>
			Selected Gatewayid: <select name="payment_gateway_id" id="">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
			
			CMS : <input type="text" name="cms" value="PHP">
			custom: <input type="text" name="custom_fields" value="<?php echo $custom_fields; ?>">

			<br/>		   
			<!-- POST parameters -->
			<input type="hidden" name="cms" value="PHP">
			<input type="hidden" name="custom_fields" value="<?php echo $custom_fields; ?>">
			<input type="hidden" name="process_currency" value="USD" >  
			<input type="hidden" name="secret_key" value="b47ef17d-1960-4533-ba7a-39e97033a4f0" >  
			<input type="hidden" name="payment" value="<?php echo $payment; ?>" >                         
			<input type="submit" value="Pay Now" >
        </form>   

  </body>
</html>