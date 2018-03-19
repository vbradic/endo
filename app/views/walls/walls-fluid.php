
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


	<?php  
	
	if(isset($_GET['action']) && $_GET['action'] != 'canvas'){
	require_once('app/views/walls/category_info.php'); 
	
	}?>

<!--  
	<div class="row">
		<div class="col-xs-12">
			<hr class="hr_style">
		</div>
	</div>
-->	

<?php if(isset($_GET['id'])) {?>
<div class="row">
		<div class="col-xs-12 text-center gallery_description">
			<h2><?php echo $wall_list[0]->description;?></h2>
		</div>
	</div>
<?php }?>

<br><br>

	<div class="tz-gallery" id="photos">
		<!--  	<div class="row">
		<div
				class="col-sm-12 col-md-6 img-holder">-->
<?php foreach($wall_list as $wall) { ?>
    	
			<div class="img-holder">
			<a class="" href="
			<?php 
			$id = $wall->id;
			if($wall->details & !isset($_GET['id'])) {
			    echo "index.php?controller=".$_GET['controller']."&action=".$_GET['action']."&id=".$id;
			} else {
			    echo "app/imgs/".$wall->picture_path; 
			}
			 ?>"> <img
				class="img-walls img-responsive "
				src="app/imgs/<?php echo $wall->picture_path; ?>">
			</a>
<?php if(!isset($_GET['id'])) {?>
			<div class="bottom-left">
				<p>
					<b><?php echo $wall->description; ?></b>
				</p>
			</div>
<?php }?>			

		</div>	
			
				
<?php }?>


	</div>
<!--  
	<div class="row">
		<div class="col-xs-12">
			<hr class="hr_style">
		</div>
	</div>
-->
</div>

<script
	src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
baguetteBox.run('.tz-gallery');
</script>