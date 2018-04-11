<div class="row" style="margin-top: 2%;">
	<div class="col-xs-12 col-md-3 col-md-offset-9 text-center">
		<label style="font-size: 15px;">
		<?php if($_GET['action'] == 'numbers') {?>		
		5.14 4.15 : 
		<?php } else if($_GET['action'] == 'zutaKompanija') {?>
		yellow company :
		<?php } else if($_GET['action'] == 'endo') {?>
		endo :
		<?php }?>
		
<!-- FACEBOOK -->
		</label> <a href="
		
		<?php 
		if($_GET['action'] == 'numbers') { 
		    echo "https://www.facebook.com/5I4.4I5/?ref=br_rs";
		} else if($_GET['action'] == 'zutaKompanija') {
		    echo "https://www.facebook.com/EndoSles/?ref=br_rs";
		} else if($_GET['action'] == 'endo') {
		    echo "https://www.facebook.com/EndoSles/?ref=br_rs";
		}
		
		?>">		
		<i class="fa fa-facebook-square fa-3x social social-numbers"></i></a> 
		
		
<!-- INSTAGRAM -->			
			<?php 
		if($_GET['action'] == 'numbers') { ?>
		<a
			href="
		<?php     echo "https://www.instagram.com/514.415/";
		    ?>
		    "><i
			class="fa fa-instagram fa-3x social social-numbers"></i></a>		    
		    
		<?php } ?>
		
<!-- FLICKER -->		
		<a
			href="
		<?php  if($_GET['action'] == 'zutaKompanija') { 
		
		 
		    echo "https://www.flickr.com/photos/142914631@N05/";
		} else if($_GET['action'] == 'endo') {
		    echo "https://www.flickr.com/photos/159304494@N07/";
		}
		
		?>"><i
			class="fa fa-flickr fa-3x social social-numbers"></i></a>
	</div>

</div>

<div class="row up-left" style="margin-bottom: 4%;">
	<div class="col-xs-12 col-md-4 col-md-offset-4">
		<div class="">
		
		<?php if($_GET['action'] == 'numbers') {?>	
			<img src="app/imgs/sajt/514_415/logo/logo_514415.jpg"
				class="img-responsive"
				style="width: 70%; margin: auto; padding-top: 10%;"></img>
		<?php } else if($_GET['action'] == 'zutaKompanija') {?>
			<img src="app/imgs/sajt/zuta_kompanija/Untitled-5.jpg"
				class="img-responsive"
				style="width: 70%; margin: auto; padding-top: 10%;"></img>
		<?php } else if($_GET['action'] == 'endo') {?>
			<img src="app/imgs/sajt/Endo/Logo/logo.jpg"
				class="img-responsive"
				style="width: 70%; margin: auto; padding-top: 10%;"></img>
		<?php }?>
		</div>
	</div>
	
	<?php if($_GET['action'] == 'zutaKompanija') {?>
	<div class="col-xs-12 text-center gallery_description">
		<h2>Yellow company</h2>
		<br>
		<p>Created in 2014, developing and enhancing  since then. Brought to
			you by two man with similar professions and skills. Two yellow man,
			who hide, behind the tags -  Endo & Sles. Under pressure of the world
			and environment, two man decided to make a company which will work
			for the good sake of the planet Earth. Company under this name, has
			already done more than hundred walls and constantly growing. Yellow
			company plans to pursue with this tempo until it conquers the world.
			Next plan, to other planets in our cosmos</p>
	</div>
	<?php }?>
	<?php if($_GET['action'] == 'numbers') {?>
	<div class="col-xs-12 text-center gallery_description">
		<!-- <h2>5.14 4.15</h2> -->
		<br>
		<br>
		<br>
		<p>5.14.4.15. is a personal project that has emerged my research
			during 2017 through graffiti and painting. My pseudonym or "tag" is
			Endo. The fact that I went to a new stylish way to express, I wanted
			to make a game with myself. Therefore, define "personal project". I
			made a pseudonym of pseudonym. In doing so, Endo poured
			himself into numbers that carry the same linguistic meaning tag,
			written numerological. List, the sequence of letters and numbers
			given.</p>
	</div>					
	<?php }?>
	
	<?php if($_GET['action'] == 'endo') {?>
	<div class="col-xs-12 text-center gallery_description">
		<!-- <h2>5.14 4.15</h2> -->
		<br>
		<br>
		<br>
		<p>In 2005, his first graffiti originated in a hauled haustor. From that day on, the struggle for research through various styles of letters, 
			character and combination of all of this followed. Although his expressive means are already recognizable, 
			they are not final because he always strives for new research and discoveries. 
			Now you can see them across Serbia and a little beyond.</p>
	</div>					
	<?php }?>
</div>


