<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>La sucrerie | himages | TFE Xavier Delmelle</title>
<meta name="description" content="TFE de Xavier Delmelle, étudiant en web design et multimédia à l'ESIAJ/HEAJ">
<meta name="keywords" content="tfe, Genappe, histoire, photos, himages">
<meta name="author" content="Xavier Delmelle">
<meta name="viewport" content="width=device-width; initial-scale=1.0"/>

<link rel="stylesheet" type="text/css" href="css/style.css"> 
<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="img/favicon.ico">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

</head>


<body>
<div id="container">
	<div id="content">
		<div id="header">
			<h1><a href="index.php">himages</a></h1>
			<ul class="desktop">
				<?php if($_SESSION['logged_in'] != "ok"){ ?>

				<li><a href="connexion.php">Connexion</a></li>
				<li><a href="inscription.php">Inscription</a></li>
				
				<?php } else{ ?>
				<li class="membre">
					<a class="pseudo" href="profil.php"><?php echo $_SESSION['username']; ?>
					<span style="background: url('img/defaut.svg') no-repeat;"></span>
					</a>
					<ul>
						<li><a href="profil.php">Mon profil</a></li>
						<li><a href="modifier.php">Modifier mon profil</a></li>
						<li><a href="php/logout.php">Déconexion</a></li>
					</ul>
				</li>
				<li><a href="ecrire.php">&Eacute;crire</a></li>
				<?php } ?>
				<li><a class="active" href="lire.php">Lire</a></li>
			</ul>

			<a class="search" href="#">Recherche</a>
			<a class="search sb-open-right" href="#">Recherche</a>
			<form class="formheader" action="#">
					<label for="search">Rechercher par mot clé</label>
					<input type="search" name="search" autofocus=""  placeholder="Entrez un mot-clé" >
			</form>
			<div id="couvertureSuc">
				<h2 class="publi">La sucrerie</h2>
				<a id="start" href="#ancre"></a>
			</div>
		</div>	
			<div class="timeline">
				<ul class="timenav bullets">
					<li><a class="fondation" href="#fondationSuc"><span>1870</span></a></li>
					<li><a class="derniere" href="#derniereanneeSuc"><span>2004</span></a></li>
					<li class="active"><a class="futur" href="#couvertureSuc"><span>2014</span></a></li>
				</ul>
				<span class="timearrow"></span>
			</div> <!-- End timeline -->

	<div id="first">
		<div class="histoire">
			<h2 id="ancre">Les plans d'avenir</h2>
			
			<p>Depuis la fermeture de la sucrerie, beaucoup de changements ont été
				apportés. Tout d'abord, les premiers travaux entamés ont consisté en la récupération
				des machines et des outils de production. Ensuite, l'ancienne
				chaufferie et les deux cheminées ont été démolies. Les travaux ont 
				prit beaucoup de retard à cause de l'amiante régnant dans les anciens bâtiments. 
			</p>
			
			<img  class="grid2" src="img/sucrerie/ravel.jpg" alt="le ravel">
			<p>Heureusement, par la suite, les aménagements de l'ancienne sucrerie sont assez 
				positifs: création d'une <a href="#">réserve naturelle</a> 
				de grand intérêt ornithologique, un entrepôt de matériel pour la commune, 
				la création d'un <a href="#">RaVeL</a>...</p>
			<img src="img/sucrerie/reserve.jpg" alt="la sucrerie, vue sur la reserve">
			<p>La prochaine étape est la création de logements écologiques
				 à prix raisonnables qui pourraient aider les jeunes à rester dans 
				 la ville. </p>
			<p>Transformation peut-être réussie ? Affaire à suivre...</p>

			<span>Un texte de</span>
			<div class="conteur">
				<a href="#">
					<img src="img/defaut.svg" alt="avatar de javier">
					<p>tfedwm14</p>
				</a>
			</div><!-- End conteur -->
		</div> <!-- End histoire -->
	</div><!-- end first -->

	
	<div id="derniereanneeSuc"></div> <!--#derniereanneeSuc-->
	<div class="timeline">
		<ul class="timenav bullets">
			<li><a class="fondation" href="#fondationSuc"><span>1870</span></a></li>
			<li class="active"><a class="derniere" href="#derniereanneeSuc"><span>2004</span></a></li>
			<li><a class="futur" href="#couvertureSuc"><span>2014</span></a></li>
		</ul>
		<span class="timearrow"></span>
	</div> <!-- End timeline -->
	
	<div id="trois">
		<div class="histoire">
	        <h2>Le dernier voyage</h2>
	        <p>La sucrerie. L'indescriptible manque d'une usine qui fonctionnait 
	        	il y a encore 10 ans. Bien sûr, j'étais plus jeune. Bien sûr, 
	        	je n'habitais pas à côté et n'avais pas beaucoup de nuisance.</p>
		
			<p>En automne, à chaque reprise de la campagne betteravière quel plaisir 
				de sentir à nouveau l'odeur particulière se situant entre le caramel et le chou-fleur. 
				Une odeur qu'on pouvait qualifier à la fois 
			de bonne et/ou mauvaise. Odeur que j'associais à la venue des fêtes: saint Nicolas, 
			Noël et réveillon.</p>

			<img src="img/sucrerie/train.jpg" alt="le train">
			<p>Pendant trois mois, il y avait une augmentation du trafic: tracteurs et 
				camions lourdement 
			chargés de betteraves et qui rendaient les routes glissantes... 
			Le passage du train de marchandises 
			qui reliait Ottignies et Manage. C'était assez bruyant mais c'était le 
			reflet de la vie à Genappe. 
			Bon ou mauvais, moi, j'aimais bien.</p>
			<p>Tous ces bruits, tout ce trafic, toutes ces odeurs spécifiques, je ne les ai
			plus vus et senties depuis 2004. L'année de la dernière campagne betteravière. </p>

			
	    	
	    	<span>Un texte de</span>
			<div class="conteur">
				<a href="#">
					<img src="img/julien.jpg" alt="avatar de Julien">
					<p>Julien</p>
				</a>
			</div><!-- End conteur -->
		</div> <!-- end histoire -->
	</div> <!-- end trois-->


	<div id="fondationSuc"></div> <!--fondationSuc-->
	<div class="timeline">
			<ul class="timenav bullets">
				<li class="active"><a class="fondation" href="#fondationSuc"><span>1870</span></a></li>
				<li><a class="derniere" href="#derniereanneeSuc"><span>2004</span></a></li>
				<li><a class="futur" href="#couvertureSuc"><span>2014</span></a></li>
			</ul>
			<span class="timearrow"></span>
		</div> <!-- End timeline -->
		
	<div id="cinq">
		<div class="histoire">
	        <h2>La fondation</h2>

	        <p>La sucrerie de Genappe fut fondée en 1870 par J-B Van Volsem. &Agrave; cette
	        	époque, Genappe bénéficiait des développements de l'industrialisation grâce
	        	au chemin de fer de la ligne Ottignies-Manage.</p>
	        <p>C'est en 1929 que la Raffinerie Tirlemontoise intègre la sucrerie de Genappe. Elle fut
	        	l'une des plus importantes du pays avec une production de sucre 
	        	de 150.000 tonnes par an.</p>
	        
	    	
	    	<span>Un texte de</span>
			<div class="conteur">
				<a href="#">
					<img src="img/pierre.jpg" alt="avatar de Pierre">
					<p>Pierre</p>
				</a>
			</div><!-- End conteur -->
		</div> <!-- end histoire -->
	</div> <!-- end trois-->

		<div class="tag">
			<span>Tags</span>
			<ul>
				<li><a href="#">Genappe</a></li>
				<li><a href="#">Sucrerie</a></li>
				<li><a href="#">&Eacute;volution</a></li>
				<li><a href="#">Réserve</a></li>
				<li><a href="#">Nature</a></li>
				<li><a href="#">RaVel</a></li>
				<li><a href="#">Chemin-de-fer</a></li>
			</ul>
		</div>

		<div id="mapRelative">
			<div id="mapFixe"></div>
		</div><!-- End mapRelative -->


		<div class="histoire AvWysi">
			
			<ul>
				<?php if($_SESSION['logged_in'] == "ok"){ ?>
				<li>
					<label for="test" class="checkbox">
						<input type="checkbox" id="test" class="checkbox">
						<span></span>
					</label>
				</li>
				<li class="sociaux plus completer">+ <span>Compléter le lieu</span></li>
				
				<li class="sociaux partager"> Partager
					<ul class="share">
						<li><a class="facebook" href="#">Facebook</a></li>
						<li><a class="twitter" href="#">Twitter</a></li>
						<li><a class="google" href="#">Google+</a></li>
					</ul>
				</li>
				<?php } else{ ?>
				<li>
					<label for="test2" class="checkbox large">
						<input type="checkbox" id="test2" class="checkbox">
						<span></span>
					</label>
				</li>
				<li class="sociaux partager large"> Partager
					<ul class="share">
						<li><a class="facebook" href="#">Facebook</a></li>
						<li><a class="twitter" href="#">Twitter</a></li>
						<li><a class="google" href="#">Google+</a></li>
					</ul>
				</li>
				<?php } ?>
				</ul>
		</div> <!-- End histoire -->

		<form id="wysi" class="wysiHistoire">
			<div id="upload">
				<label for="fileUpl">upload</label>
				<input type="file" id="fileUpl" name="fileUpl">
				<button><img src="img/photo.svg" alt="icon photo"></button>
			</div>

			<label for="titre">Le titre de votre histoire</label>
			<input type="text"  maxlength="30" name="titre" placeholder="Le titre de votre histoire" id="titre">


			<div class="editable"></div><!-- End editable-->

			<label class="labelShow" for="annee">Situer votre histoire dans le temps</label>
			<input type="text"  maxlength="30" name="annee" placeholder="1989" id="annee">

			<p>Ajouter des mots-clés :</p>

			<ul id="myTags">
			    <li>Genappe</li>
			    <li>Sucrerie</li>
			</ul>
			<input type="submit" id="saveStory" name="saveStory" value="Raconter votre histoire">
		</form><!-- end div wysi-->

		<div id="nextStory">
			<a id="nextLeft" href="chapelle-try-au-chene.php">
				<img src="img/chapelletryauchene.jpg" alt="lien vers la chapelle du try au chene">
				<span>Découvrir le lieu précédant</span>
				<h2>La Chapelle du Try-au-chêne</h2>
			</a>
			<a id="nextRight" href="etang-de-ways.php">
				<img src="img/etangways.jpg" alt="lien l'étang de ways">
				<span class="suiv">Découvrir le lieu suivant</span>
				<h2>L'étang de Ways</h2>
			</a>
		</div> <!-- End nextStory -->

	</div> <!-- End content -->
	
</div> <!-- End container -->

<div class="sb-slidebar sb-right">
	<ul class="mobile">
		<li class="active"><a class="large active" href="lire.php">Lire</a></li>
		<?php if($_SESSION['logged_in'] != "ok"){ ?>

		<li><a class="large" href="connexion.php">Connexion</a></li>
		<li><a class="large" href="inscription.php">Inscription</a></li>
		
		<?php } else{ ?>
		<li><a class="large" href="ecrire.php">&Eacute;crire</a></li>
		<li class="membre">
			<ul>
				<li><a href="profil.php"><span style="background: url('img/defaut.svg') no-repeat;"></span><?php echo $_SESSION['username']; ?></a></li>
				<li><a href="modifier.php">Modifier mon profil</a></li>
				<li><a href="php/logout.php">Déconexion</a></li>
			</ul>
		</li>
		
		<?php } ?>
		
	</ul>	
	<fieldset>
		<label for="search">Recherche</label>
		<input type="text" name="search" id="search" autocomplete="off" tabindex="1" placeholder="Recheche">
	</fieldset>
</div> <!-- End slidebar -->





<!-- jQuery -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
<!-- Script general -->
<script src="js/script.js"></script>
<!-- PARALAX -->
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<!-- inview -->
<script src="js/jquery.inview.js"></script>
<!-- WISY MEDIUM-->
<script src="js/medium-editor.js"></script>
<!-- TagIt-->
<script src="js/tagit/tag-it.js" type="text/javascript" charset="utf-8"></script>
<!-- Gmaps -->
<script src="js/gmaps.js"></script>
<script type="text/javascript">
	
	    $(document).ready(function(){
		map = new GMaps({
			div: '#mapFixe',
			lat: 50.606132,
			lng: 4.442030,
			styles: style,
			zoom: 17,
			scrollwheel: false,
		});
		
		map.addMarker({
        lat: 50.609507,
		lng: 4.453661,
        title: 'L \'étang de Ways',
        icon : image,
        infoWindow: {
          content: '<a class="markerLien" href="etang-de-ways.php"> L \'étang de Ways</a>'
        }
      });
		map.addMarker({
        lat: 50.606132,
		lng: 4.442030,
        title: 'La sucrerie',
        icon : image,
        infoWindow: {
          content: '<a class="markerLien" href="sucrerie.php">La sucrerie de Genappe</a>'
        }
      });
		map.addMarker({
        lat: 50.608112,
		lng: 4.513928,
        title: 'La chapelle du Try-au-chêne',
        icon : image,
        infoWindow: {
          content: '<a class="markerLien" href="chapelle-try-au-chene.php">La chapelle du Try-au-chêne</a>'
        }
      });

		var path = [[50.658641, 4.439646], 
		[50.644328, 4.463336], 
		[50.655321, 4.499127],	
		[50.652274, 4.504534],
		[50.655757, 4.515692], 
		[50.647648, 4.538094],	
		[50.636490, 4.541613],
		[50.621681, 4.527537], 
		[50.615200, 4.535605],
		[50.610898, 4.526850],
		[50.608065, 4.518825],
		[50.608065, 4.513890],
		[50.602454, 4.513203], 
		[50.603163, 4.523846],	
		[50.596843, 4.531485],
		[50.578533, 4.508225], 
		[50.572210, 4.492690],	
		[50.580495, 4.485308],
		[50.571175, 4.453637], 
		[50.562833, 4.457757],	
		[50.560980, 4.474150], 
		[50.564469, 4.417073], 
		[50.563433, 4.383942],	
		[50.568612, 4.378621],
		[50.580441, 4.384629], 
		[50.594119, 4.405786],	
		[50.603272, 4.397461],
		[50.603653, 4.380809], 
		[50.626146, 4.391023],	
		[50.628868, 4.375745],
		[50.638885, 4.389135], 
		[50.642097, 4.383985],	
		[50.646124, 4.388963],
		[50.641008, 4.393856], 
		[50.658477, 4.439518]
		];

		polygon = map.drawPolygon({
		  paths: path, // pre-defined polygon shape
		  strokeColor: '#e84b3c',
		  strokeOpacity: 1,
		  strokeWeight: 4,
		  fillColor: 'transparent',
		  fillOpacity: 0.6
		});
});
	
</script>
<!-- ScrollTo -->
<script type="text/javascript">
	$("#start").click(function(e) {
		e.preventDefault();
	    $('html, body').animate({
	        scrollTop: $("#ancre").offset().top,
	    }, 1000);
	});

	$(".derniere").click(function(e) {
		e.preventDefault();
	    $('html, body').animate({
	        scrollTop: $("#derniereanneeSuc").offset().top,
	    }, 1000);
	});

	$(".fondation").click(function(e) {
		e.preventDefault();
	    $('html, body').animate({
	        scrollTop: $("#fondationSuc").offset().top,
	    }, 1000);
	});

	$(".futur").click(function(e) {
		e.preventDefault();
	    $('html, body').animate({
	        scrollTop: $("#couvertureSuc").offset().top,
	    }, 1000);
	});

</script>
<!-- Slidebars -->
<script src="js/slidebars.min.js"></script>
<script>
	(function($) {
		$(document).ready(function() {
			$.slidebars();
		});
	}) (jQuery);
</script>
</body>

</html>