
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<link href='https://fonts.googleapis.com/css?family=Bangers'
	rel='stylesheet'>
<link rel="stylesheet" href="app/css/thumbnail-gallery.css">

<div class="container gallery-container">

	<h1>WALLS 2017</h1>

	<p class="page-description text-center">Thumbnails With Title And
		Description</p>

	<div class="tz-gallery">

		<div class="row">

		<?php foreach($wall_list as $wall) { ?>			
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				
					<a class="lightbox" href="app/imgs/walls/park.jpg"> 					
					<img src="app/imgs/walls/<?php echo $wall->picture_path ?>" alt="Park">
					</a>
					
					<div class="caption">
						<h3><?php echo $wall->label ?></h3>
						<p><?php echo $wall->description ?></p>
					</div>
				</div>
			</div>
	    <?php }?>
           
        </div>
	</div>
</div>

<script
	src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

