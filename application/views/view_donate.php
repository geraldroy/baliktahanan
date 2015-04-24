<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flatly/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootswatch.min.css">

</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">BalikTahanan</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		      	<ul class="nav navbar-nav">
			        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
			        <li><a href="#">About</a></li>
			    </ul>
		    </div>
		  </div>
	</nav>
	<br><br>
	<div class="container">
		<h1 align = "center">Gerald Antonio Margarino Anthony</h1>
		<h3 align="center"><strong>Current Donation Raised:</strong> P800 / P2500</h3>
		<div class="progress progress-striped active" align="center">
		  <div class="progress-bar progress-bar-success" style="width: 32%"></div>
		</div>
		<br>
		<div class="col-md-7">
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-header">
					</div>
					<div class="panel-body">
						<div class="col-md-6">
							<img src = "http://static.rappler.com/images/hungryOFW-EugeneAsio-20140116.jpg" height = "220" width = "280" />
						</div>
						<div class="col-md-6">
							<p><strong>Age:</strong> 52</p>
							<p><strong>Birthdate:</strong> May 1, 1962</p>
							<p><strong>Hometown:</strong> Davao City </p>
							<p><strong>No. of Children:</strong> 2</p>
							<p><strong>Marital Status:</strong> Married</p>
							<p><strong>Relatives:</strong> </p>
							<p><strong>Last Hometown Visit:</strong> June 6, 2013</p><br>
						</div>
						<p><strong>Story</strong><br>The story of my life: I'll take her home, I'd drive all night to keep her warm and time is frozen. The story of my life: I'll give her hope and spend her love until she's broke inside... the story of my life.</p>
						<p><strong>Reason for Going Home</strong><br>"Nami-miss ko na yung pamilya ko. Nagtitiis na lang ako dito sa Maynila pero di ko na talaga kaya."</p>
					</div>
				</div>
				<div class="form-group">
				  <label for="textArea" class="col-lg-2 control-label">Message</label>
				  <div class="col-md-10">
					<textarea class="form-control" rows="3" id="textArea"></textarea> <br>
				  </div>
				</div>
			</div>
			<div align="center">
				<a href="#" class="btn btn-success btn-md btn-block">Send Message</a><br>
			</div>
		</div>
		<div class="col-md-5">
			<div class="panel panel-success">
			  <div class="panel-heading">
				<h2 class="panel-title">Donation Details</h2>
			  </div>
			  <div class="panel-body">
				<h4>Enter your details below:</h4>
				<div class="form-group">
				  <label class="control-label" for="focusedInput">Name</label>
				  <input class="form-control" id="focusedInput" type="text" placeholder="Optional"><br>
				  <label class="control-label" for="focusedInput">Payment Method</label>
				  <img src="<?php echo base_url();?>assets/images/cards.png" />
				  <input class="form-control" id="focusedInput" type="text" placeholder="Cash or Credit Card Only"><br>
				  <label class="control-label" for="focusedInput">Credit Card Number</label>
				  <input class="form-control" id="focusedInput" type="text" placeholder="XXXX-XXXX-XXXX-XXXX"><br>
				  <input class="form-control" id="focusedInput" type="text" placeholder="Issuing Bank"><br>
				  <label class="control-label" for="focusedInput">Validation Number</label>
				  <img src="<?php echo base_url();?>assets/images/validation.png" />
				  <input class="form-control" id="focusedInput" type="text" placeholder="XXX"><br>
				  <input class="form-control" id="focusedInput" type="text" placeholder="Amount in PhP"><br>
				</div>
					<a href="#" class="btn btn-success btn-md btn-block">Confirm Donation</a>
				</div>
			  </div>
			</div>
		</div>
	</div>
</body>
</html>