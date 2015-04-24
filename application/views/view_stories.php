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
		<h1 align = "center">Brief Description of the Homeless</h1>
		<br>
		<div class="col-md-8">
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-5">
							<img src = "http://static.rappler.com/images/hungryOFW-EugeneAsio-20140116.jpg" height = "200" width = "280" />
						</div>
						<div class="col-md-7">
							<h2><strong>Gerald Anthony</strong></h2>
							<p><strong>Age:</strong> 52<br> <strong>Hometown:</strong> Davao City <br> <strong>Location:</strong> Manila City</p>
							<p><strong>Story</strong><br>You said it again; my heart's in motion. I'm at the edge of my emotion watching the shadows burning in the dark.</p>
						</div>
					</div>
					<div class="panel-footer">
						<a href = "#"><div align="right">Fund</div></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-5">
							<img src = "http://static.rappler.com/images/hungryOFW-EugeneAsio-20140116.jpg" height = "200" width = "280" />
						</div>
						<div class="col-md-7">
							<h2><strong>Gerald Anthony</strong></h2>
							<p><strong>Age:</strong> 52<br> <strong>Hometown:</strong> Davao City <br> <strong>Location:</strong> Manila City</p>
							<p><strong>Story</strong><br>You said it again; my heart's in motion. I'm at the edge of my emotion watching the shadows burning in the dark.</p>
						</div>
					</div>
					<div class="panel-footer">
						<a href = "#"><div align="right">Fund</div></a>
					</div>
				</div>
			</div>
			<div align="center">
				<ul class="pagination">
				  <li class="disabled"><a href="#">«</a></li>
				  <li class="active"><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">»</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-4">
			<div class="well well-sm">
				<div class="form-group">
				  <input class="form-control" id="focusedInput" type="text" placeholder="Name"><br>
				  <input class="form-control" id="focusedInput" type="text" placeholder="Location"><br>
				  <a href="#" class="btn btn-success btn-md btn-block">Search</a>
				</div>
			</div>
			
		</div>
	</div>
</body>
</html>