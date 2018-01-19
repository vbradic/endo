

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Freebie: 4 Bootstrap Gallery Templates</title>

<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Bangers'
	rel='stylesheet'>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<link rel="stylesheet" href="app/css/fluid-gallery.css">


<div class="container gallery-container">

	<h1>Bootstrap 3 Gallery</h1>

	<p class="page-description text-center">Fluid Layout With Overlay
		Effect</p>

	<div class="tz-gallery">

		<div class="row">

			<div class="col-sm-12 col-md-8 img-holder">
				<a class="lightbox" href="../images/bridge.jpg"> <img
					src="app/imgs/walls/bridge.jpg" alt="Bridge">					
				</a>
				<div class="bottom-left">Bottom Left</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<a class="lightbox" href="../images/park.jpg"> <img
					src="app/imgs/walls/park.jpg" alt="Park">
				</a>
			</div>
			<div class="col-sm-6 col-md-4">
				<a class="lightbox" href="../images/tunnel.jpg"> <img
					src="app/imgs/walls/tunnel.jpg" alt="Tunnel">
				</a>
			</div>
			<div class="col-sm-12 col-md-4">
				<a class="lightbox" href="../images/traffic.jpg"> <img
					src="app/imgs/walls/traffic.jpg" alt="Traffic">
				</a>
			</div>
			<div class="col-sm-6 col-md-4">
				<a class="lightbox" href="../images/coast.jpg"> <img
					src="app/imgs/walls/coast.jpg" alt="Coast">
				</a>
			</div>
			<div class="col-sm-6 col-md-4">
				<a class="lightbox" href="../images/rails.jpg"> <img
					src="app/imgs/walls/rails.jpg" alt="Rails">
				</a>
			</div>

		</div>

	</div>

</div>

<script
	src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
baguetteBox.run('.tz-gallery');
</script>
