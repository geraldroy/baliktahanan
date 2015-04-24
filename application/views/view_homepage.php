<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flatly/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootswatch.min.css">
   
   	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

   	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

  	<style>
		.carousel {
		  margin-bottom: 60px;
		}

		.carousel-caption {
		  z-index: 1;
		}

		.carousel .item {
		  height: 500px;
		  background-color:#555;
		}

		.carousel img {
		  position: absolute;
		  width: 100%;
		  height: 100%;
		  top: 0;
		  left: 0;
		  min-height: 400px;
		}

		.helpbutton {
			padding-top: 100px;
		}

	</style>
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

	<div class="row">
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			  	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
			    <div class="item active">
			    	<img src="<?php echo base_url(); ?>assets/images/1.jpg" alt="First slide">
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">       
                        	<div class="helpbutton">
	                        	<h1 class="text-success"><strong>Send the Homeless to an Expedition to MARS!!!</strong></h1>
								<h3>This way they'll be out of your life HAPPY!</h3>  
								<br> 
                       			<a align="center" href="#" class="btn btn-primary btn-lg">Help Someone Now!</a>
                      	 	</div>
                        </div>
                    </div>
			    </div>
			    <div class="item">
			    	<img src="<?php echo base_url(); ?>assets/images/2.jpg" alt="Second slide">
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
							<div class="helpbutton">
								<h1 class="text-success"><strong>GO HOME AND GET FREE FOOD FROM YOUR MAMA!!</strong></h1>
								<h3>This way you'll bring them down with you</h3>
								<br> 
                       			<a align="center" href="#" class="btn btn-primary btn-lg">Read More</a>
                      	 	</div>                              
                        </div>
                    </div>
			    </div>
			    <div class="item">
			    	<img src="<?php echo base_url(); ?>assets/images/3.jpg" alt="Third slide">
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
							<div class="helpbutton">
								<h1><strong>Send the Homeless to an Expedition to MARS!!!</strong></h1>
								<h3>This way they'll be out of your life HAPPY!</h3>  
								<br> 
                       			<a align="center" href="#" class="btn btn-primary btn-lg">Learn More</a>
                      	 	</div>
                        </div>
                    </div>
			    </div>
			</div>
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev" style="display: none">
		    	<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next" style="display: none">
		    	<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	</div>

	<h1 align="center">Testimonials</h1><br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<blockquote class="pull-left">
				<div class="col-md-3">
					<img src="<?php echo base_url(); ?>assets/images/jm.jpg" height="120", width="90"/>
				</div>
				<div class="col-md-9">
				  <p>I was able to go back to my hometown and torture my mama more! Thank you very much!!</p>
				  <small>JM Manalo from <cite title="Planet Jupiter">Tacloban, Leyte</cite></small>
				</div>
			</blockquote>
		</div>

		<div class="col-md-5">
			<blockquote class="pull-right">
				<div class="col-md-9">
					<p>I was able to go back to my hometown and torture my mama more! Thank you very much!!</p>
				 	<small>Frances Calceta from <cite title="Planet Jupiter">Davao Oriental</cite></small>
				</div>
				<div class="col-md-3">
					<img src="<?php echo base_url(); ?>assets/images/frances.jpg" height="120", width="90"/>
				  
				</div>
			</blockquote>
		</div>
		<div class="col-md-1"></div>
	</div>

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<blockquote class="pull-left">
				<div class="col-md-3">
					<img src="<?php echo base_url(); ?>assets/images/gerald.jpg" height="120", width="90"/>
				</div>
				<div class="col-md-9">
				  <p>I was able to go back to my hometown and torture my mama more! Thank you very much!!</p>
				  <small>Gerald Anthony from <cite title="Planet Jupiter">Bacolod, Negros Occidental</cite></small>
				</div>
			</blockquote>
		</div>

		<div class="col-md-5">
			<blockquote class="pull-right">
				<div class="col-md-9">
					<p>I was able to go back to my hometown and torture my mama more! Thank you very much!!</p>
				 	<small>Gerald Roy from <cite title="Planet Jupiter">Ilocos Norte</cite></small>
				</div>
				<div class="col-md-3">
					<img src="<?php echo base_url(); ?>assets/images/roy.jpg" height="120", width="90"/>
				  
				</div>
			</blockquote>
		</div>
		<div class="col-md-1"></div>
	</div>
</body>
</html>