
<!--  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
-->

<title>Freebie: 4 Bootstrap Gallery Templates</title>

<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Bangers'
	rel='stylesheet'>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">



<?php
$layout_offset = array(
    "6",
    "6",
    "6",
    "6",
    "6",
    "6",
    "4",
    "6"
);
$counter = 0;
?>

<div class="container gallery-container">

	<h1 class="walls-header">514.415</h1>
	<hr class="hr_style">
	<div class="tz-gallery" id="photos">
	<!--  	<div class="row">
		<div
				class="col-sm-12 col-md-6 img-holder">-->
<?php foreach($wall_list as $wall) { ?>
    	




			<div class="img-holder">
				<a class=""
					href="app/imgs/walls/<?php echo $wall->picture_path ?>"> <img
					class="img-walls img-responsive "
					src="app/imgs/walls/<?php echo $wall->picture_path ?>">
				</a>
				
				<div class="bottom-left">Bottom Left kasdhaskdjh</div>
			</div>	
			
			
			
			

					

					
<?php }?>


	</div>

	<div class="row">
		<div class="col-xs-12">
			<hr class="hr_style">
		</div>
	</div>

</div>

<script
	src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
baguetteBox.run('.tz-gallery');
</script>