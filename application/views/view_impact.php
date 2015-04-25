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
					<li class="active"><a href="<?php echo base_url();?>index.php/welcome/impact">Impact</a></li>
					<li><a href="#">Partnerships</a></li>
					<li><a href="<?php echo base_url();?>index.php/welcome/stories">Get Involved</a></li>
			    </ul>
		    </div>
		  </div>
</nav>
	<br><br>
	<div class="container">
		<div class="page-header">
			<h1 id="forms" align = "center">Our Impact</h1>
		</div>
		<h2 align = "center">How can I help?</h2>
		<br>
		<ol>
			<li class = "step"> Photos of homeless people around Metro Manila who are in dire need to go home to their provinces, are gathered and posted on the site,  along with their stories.</p>
			<li class = "step"> A brief description of each person is shown on the donation screen, and when you are interested in donating, the you can select the person.</p>
			<li class = "step"> There are many methods of donation you can choose from.</p>
			<li class = "step"> The beneficiary will recieve your donation and get a ticket home.</p>
		</ol>
		<br>
		<h2 align="center">Success Stories</h2><br>
		<div class="col-md-3">
			<div class="panel panel-success">
			  <div class="panel-heading">
				<h3 class="panel-title" align = "center">Juan Michael C. Monalo</h3>
			  </div>
			  <div class="panel-body">
				<img src="<? echo base_url(); ?>assets/images/boy1.jpg" class = "img-responsive"/><br>
				<p>He left the province in order to become a temp construction worker, like his father, and contribute to family funds. After his father died in a freak accident, he wants to go back home. 
					<br><a href="#">Read More</a></p>
			  </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel panel-success">
			  <div class="panel-heading">
				<h3 class="panel-title" align = "center">Jaynetha N. Pulis</h3>
			  </div>
			  <div class="panel-body">
				<img src="<? echo base_url(); ?>assets/images/old2.jpg" class = "img-responsive"/><br>
				<p>She lives in a rented room in the slums, making a living by washing her neighbor's laundry. After her husband left her, she decided that it is best to go back to Iloilo to meet her parents before they die. 
					<br><a href="#">Read More</a></p></p>
			  </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel panel-success">
			  <div class="panel-heading">
				<h3 class="panel-title" align = "center">Mang Pepito Procopio</h3>
			  </div>
			  <div class="panel-body">
				<img src="<? echo base_url(); ?>assets/images/old1.jpg" class = "img-responsive"/><br>
				<p>He has been in Manila for twelve years, selling cigarettes and candies beside an underpass. He wishes to go back home but is unable to save enough money for bus fare. <br><a href="#">Read More</a></p>
			  </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel panel-success">
			  <div class="panel-heading">
				<h3 class="panel-title" align = "center">Maria Claresita Lopez</h3>
			  </div>
			  <div class="panel-body">
			  	<img src="<? echo base_url(); ?>assets/images/girl1.jpg" class="img-responsive" alt="Responsive image"><br>
				<p>She came to the city to work as a maid, but after being mistreated, she decided to go back home. She has one child, and she plans to raise him on her own in her province. <br><a href="#">Read More</a></p>
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