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
		      <a class="navbar-brand" href="<?php echo base_url(); ?>">BalikTahanan<br></a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		      	<ul class="nav navbar-nav">
			        <li><a href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
			        <li class="active"><a href="<?php echo base_url();?>index.php/welcome/about">About Us</a></li>
					<li><a href="<?php echo base_url();?>index.php/welcome/impact">Impact</a></li>
					<li><a href="#">Partnerships</a></li>
					<li><a href="<?php echo base_url();?>index.php/welcome/stories">Get Involved</a></li>
			    </ul>
		    </div>
		  </div>
</nav>
	<br><br>
	<div class="container">
		<div class="page-header">
			<h1 id="forms" align = "center">Our Hackathon Story</h1>
		</div>
		<div align = "center">
		<img src="<? echo base_url(); ?>assets/images/222.jpg" class = "img-responsive"/>
		</div>
				<h2 align="center">Meet the Team</h2><br>
		<div class="col-md-3">
			<div class="panel panel-success">
			  <div class="panel-heading">
				<h3 class="panel-title" align = "center">Juan Miguel C. Manalo</h3>
			  </div>
			  <div class="panel-body">
				<img src="<? echo base_url(); ?>assets/images/jm.jpg" class = "img-responsive"/><br>
				<p>He is one of the front-end designers of the Balik Tahanan web application. He mainly developed the home page and prepared raw data for use at the website.</br></br></br></br></p>
			  </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel panel-success">
			  <div class="panel-heading">
				<h3 class="panel-title" align = "center">Gerald Roy</h3>
			  </div>
			  <div class="panel-body">
				<img src="<? echo base_url(); ?>assets/images/roy.jpg" class = "img-responsive"/><br>
				<p>He is the lead programmer and designer for the Balik Tahanan web application. He also manages and guides his team as they create the web design so as to ensure quality and appeal of web surfers. The project spawned from his idea of re-uniting homeless people to their families in their province.</p>
			  </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel panel-success">
			  <div class="panel-heading">
				<h3 class="panel-title" align = "center">Gerald Anthony</h3>
			  </div>
			  <div class="panel-body">
				<img src="<? echo base_url(); ?>assets/images/gerald.jpg" class = "img-responsive"/><br>
				<p>He is one of the front-end designers of the Balik Tahanan web application. Researched on the subject matter of homeless people in Manila at first, he soon contributed in designing the app webpage. He became an expert front-end designer overnight, with credit to Campanano.</p>
			  </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel panel-success">
			  <div class="panel-heading">
				<h3 class="panel-title" align = "center">Frances Calceta</h3>
			  </div>
			  <div class="panel-body">
			  	<img src="<? echo base_url(); ?>assets/images/frances.jpg" class="img-responsive" alt="Responsive image"><br>
				<p>She is one of the front-end designers and researcher for the Balik Tahanan web application. She mostly gets the images used in the site, and does revisions of the design for optimization.</br></br></br></br></p>
			  </div>
			</div>
		</div>
		<br>
		<p class="lead">
We are a group of four university students who, for various reasons, decided to join a hackathon. The theme is transportation. Our web app, BalikTahanan, was inspired by the hustle and bustle of the big city, the congested roads with vendors toiling about, and the patches of shanties squatting on still undeveloped land. Metro Manila is a hub of development in comparison to far-flung provinces, where growth is little to none. In those very provinces, men and women looking for something greater--often jobs and better living conditions--decide to take the plunge and move to the big city, pawning and selling their belongings on the high-risk, high-reward journey. </br></br>In the city, many believe, a job awaits, money awaits, greener pastures await. Every year, a large number of what we call "rural to urban immigrants" take the gamble. Not many succeed. Often, the city isn't what they make it out to be, and they end up homeless, joining the throes of people squatting on undeveloped land. Many decide to live there permanently, having already abandoned their life in the paddies for a life in the slums. Some, however, desire to go back home, but are unable to pay for their transport fees. Our web app, BalikTahanan, is made for that demographic. We want to bring the homeless back home. That is what we do</p><br>
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