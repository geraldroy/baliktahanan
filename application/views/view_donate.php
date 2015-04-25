<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>BalikTahanan</title>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flatly/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootswatch.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/thing.css">
    

</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <img src="<? echo base_url(); ?>assets/images/log.png" height = "60" class = "asd"/>
		      <a class="navbar-brand" href="<?php echo base_url(); ?>">BalikTahanan</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		      	<ul class="nav navbar-nav">
			        <li><a href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
			        <li><a href="<?php echo base_url();?>index.php/welcome/about">About Us</a></li>
					<li><a href="<?php echo base_url();?>index.php/welcome/impact">Impact</a></li>
					<li><a href="#">Partnerships</a></li>
					<li class="active"><a href="<?php echo base_url();?>index.php/welcome/stories">Get Involved</a></li>
			    </ul>
		    </div>
		  </div>
</nav>
	<br><br>
	<div class="container">
		<?php 
		$id = $this->uri->segment(3);
		$query = $this->db->query('SELECT * FROM person WHERE id = '.$id);
		$person = $query->first_row();
		?>
		<h1 align = "center"><?php echo $person->name;?></h1>
		<h3 align="center"><strong>Current Donation Raised:</strong> <?php echo $person->current.' / '.$person->to_raise ?></h3>
		<div class="progress progress-striped active" align="center">
		  <div class="progress-bar progress-bar-success" style="width: <?php echo ($person->current/$person->to_raise)*100 ?>%"></div>
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
								<p><strong>Age:</strong> <?php echo $person->age; ?></p>
								<p><strong>Hometown:</strong> <?php echo $person->hometown; ?></p>
								<p><strong>Occupation:</strong> <?php echo $person->occupation; ?></p>
								<p><strong>Marital Status:</strong> <?php echo $person->status; ?></p>
								<p><strong>No. of Children:</strong> <?php echo $person->children; ?></p>
								<p><strong>Last Hometown Visit:</strong><br> <?php echo $person->last_visit; ?></p><br><br>
							</div>
						<p><strong>My Story</strong><br><?php echo $person->story; ?></p>
						<p><strong>Reason for Going Home</strong><br><?php echo $person->reason; ?></p>
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
	
	<footer class="footer">
		<div class="container">
			<div class="col-md-1"></div>
			<div class="col-md-10"><br><br>
  				<div class="row">
					<div style="float: left;
								padding: 20px 0 0 0;
								width: 100%;
								border-top: 1px solid #C0C0C0;">
					</div>
				</div>
				<div class = "row">
					<p align="right">© 2015 BalikTahanan. All Rights Reserved</p>
				</div>
			</div>
			<div class="col-md-1"></div>
  		</div>
	</footer>
</body>
</html>