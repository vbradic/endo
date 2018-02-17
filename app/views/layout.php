<html lang='en'>
<head>
<title>DieArtze</title>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>



<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet"
	href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether-theme-basic.min.css">

<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	rel="stylesheet">

<link
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"
	type="text/css" rel="stylesheet" />

<link href='https://fonts.googleapis.com/css?family=Bangers'
	rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="app/css/freestyle.css">
<link rel="stylesheet" href="app/css/fluid-gallery.css">
<link rel="stylesheet" href="app/css/img-details.css">

</head>

<body>

	<div class="nav-side-menu">
		<div class="brand">
			<img src="app/imgs/logo/logo.jpg" class="img-responsive"
				style="width: 90%; margin: auto; padding-top: 10%;"></img>
		</div>
		<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse"
			data-target="#menu-content"></i>
		<div class="menu-list">
			<ul id="menu-content" class="menu-content collapse out">
				<li><a href="#"> Home </a></li>
				<li data-toggle="collapse" data-target="#products"
					class="collapsed "><a href="#"> Walls <!--   <span class="arrow"></span> -->
				</a></li>

				<ul class="sub-menu collapse text-centar" id="products">
					<li>  <a href="index.php?controller=walls&action=walls&year=2017#">ENDO</a></li>
					<li>  <a href="index.php?controller=walls&action=numbers">514.415</a>	</li>
					<li>  <a href="#">YELLOW COMPANY</a>	</li>
				</ul>
				
				<li><a href="#"> Canvas </a></li>
				<li><a href="#"> Contact </a></li>
			</ul>
		</div>
		
		<div class="row footer">
		<div class="col-xs-10 col-xs-offset-1">
    	<!--  <hr class="hr_style" style="margin-top:20%;"> -->
        <div class="text-center center-block">
            
            <br />
                <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-4x social"></i></a>
	            <a href="https://twitter.com/bootsnipp"><i class="fa fa-twitter-square fa-4x social"></i></a>
	            <a href="https://plus.google.com/+Bootsnipp-page"><i class="fa fa-google-plus-square fa-4x social"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i class="fa fa-envelope-square fa-4x social"></i></a>
		</div>
    	<!--  <hr class="hr_style"> -->
    	</div>
		</div>
		
	</div>
	
	<div class="container" id="main">
		<div class="row">
			<div class="col-md-12">
				<?php require_once('app/routes.php'); ?>
			</div>
		</div>
	</div>
	





</body>