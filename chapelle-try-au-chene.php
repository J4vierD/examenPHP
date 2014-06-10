<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapelle du try au chêne | himages | TFE Xavier Delmelle</title>
<meta name="description" content="TFE de Xavier Delmelle, étudiant en web design et multimédia à l'ESIAJ/HEAJ">
<meta name="keywords" content="tfe, Genappe, histoire, photos, himages">
<meta name="author" content="Xavier Delmelle">
<meta name="viewport" content="width=device-width; initial-scale=1.0"/>

<link rel="stylesheet" type="text/css" href="css/style.css"> 
<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="img/favicon.ico">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"> </script>
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
			
			<div id="couvertureTry">	
				<h2 class="publi">La Chapelle du Try-au-Chêne</h2>
				<a id="start" href="#ancre"></a>
			</div><!-- end couvertureTry -->
		</div><!-- end header -->

		<div class="timeline">
				<ul class="timenav bullets">
					<li><a class="fondation" href="#fondationTry"><span>1608</span></a></li>
					<li><a class="arbre" href="#arbre"><span>2010</span></a></li>
					<li class="active"><a class="soleil" href="#couvertureTry"><span>2014</span></a></li>
				</ul>
				<span class="timearrow"></span>
			</div> <!-- End timeline -->		
		<div id="first">
			<div class="histoire">
				<h2 id="ancre">Un spectacle naturel</h2>
				<p>Il est 6h30. Alors que Bousval dort encore, je suis déjà posté 
					devant ma chapelle  préférée. Je m’attendais à observer les animaux 
					sortant du <a href="#">bois de la Tassenière</a>, mais c’est vers la chapelle que le 
					spectacle se déroula.</p>
					
				<p>Dominant Bousval et Baisy-Thy, la vue y est magnifique et reposante.</p>
				<p>Accro à la photographie, ce lieu m’inspire beaucoup tant pour la beauté 
					de la chapelle, que pour le côté naturel du lieu.</p>
				<p>Armé de votre appareil photo ou juste pour vous ressourcer, la chapelle 
					du Try-au-chêne vaut le détour.</p>
					<img src="img/try/trysunset.jpg" alt="le réveil de la chapelle">
			

				<span>Un texte de</span>
				<div class="conteur">	
					<a href="#">
						<img src="img/tmiserque.png" alt="avatar de Thibaut">
						<p>Thibaut</p>
					</a>
				</div><!-- End conteur -->
			</div> <!-- End histoire -->
		</div><!-- End first -->

		

	<div id="arbre"></div> <!--#arbre-->
	<div class="timeline">
			<ul class="timenav bullets">
				<li><a class="fondation" href="#fondationTry"><span>1608</span></a></li>
				<li class="active"><a class="arbre" href="#arbre"><span>2010</span></a></li>
				<li><a class="soleil" href="#couvertureTry"><span>2014</span></a></li>
			</ul>
			<span class="timearrow"></span>
		</div> <!-- End timeline -->
	<div id="deux">
		<div class="histoire">
	        <h2>L'arbre du Try-au-Chêne</h2>

	        <p>Attenant à la chapelle, un arbre plus que centenaire faisait 
			partie du magnifique décor. &Eacute;trangement, ce n'était pas un chêne mais un 
			érable.</p>
			<p>L'arbre a été foudroyé lors d'une tempète en 2010. C'est en 2012 qu'un nouvel 
			arbre a été replanté au même endroit, devant la chapelle. Cette fois-ci, c'est 
			un chêne qui a été choisi.</p>
	        
	    	<span>Un texte de</span>
			<div class="conteur">
				<a href="#">
					<img src="img/javier.jpg" alt="avatar de javier">
					<p>Javier</p>
				</a>
			</div><!-- End conteur -->
		</div> <!-- end histoire -->
	</div> <!-- end deux-->

	

	<div id="fondationTry"></div> <!--#fondationTry-->
	<div class="timeline">
			<ul class="timenav bullets">
				<li class="active"><a class="fondation" href="#fondationTry"><span>1608</span></a></li>
				<li><a class="arbre" href="#arbre"><span>2010</span></a></li>
				<li><a class="soleil" href="#couvertureTry"><span>2014</span></a></li>
			</ul>
			<span class="timearrow"></span>
		</div> <!-- End timeline -->
	<div id="trois">
		<div class="histoire">
	        <h2>La fondation</h2>
	        <p>La Chapelle du Try au Chêne se situe au milieu des champs, 
	        face au bois de la Tassenière sur les hauteurs de Bousval, village
	        de l'entité de Genappe.</p>
	        <p>Elle a été construite par le capitaine 
	        Thierry le Jeune, seigneur de <a href="#">la Baillerie</a> en 1608. Il y a une 
	        dédicace écrite en vieux français gravée dans une pierre qui le
	         certifie.

			<p>Depuis plus de 100 ans, un arbre a été planté devant la chapelle.
			Je ne connais pas l'âge exact de celui-ci. La seule chose dont je suis
			certain, c'est que l'arbre du Try-au-chêne est un érable.
			Surprenant, n'est-ce pas?!</p>

			<p>C'est un lieu qui attire de nombreux photographes,
			 des peintres, des amateurs d'étoiles... Et plusieurs randonnées
			  proposent le détour par la chapelle.</p>

			<p>C'est un lieu très ressourçant, j'y passe souvent soit à pieds,
			 soit à vélo. Seul ou avec mes amis d'école ou des scouts.</p>
	    	
	    	<span>Un texte de</span>
			<div class="conteur">
				<a href="#">
					<img src="img/max.jpg" alt="avatar de Max">
					<p>Max</p>
				</a>
			</div><!-- End conteur -->
		</div> <!-- end histoire -->
	</div> <!-- end trois-->

		<div class="tag">
			<span>Tags</span>
			<ul>
				<li><a href="#">Genappe</a></li>
				<li><a href="#">Bousval</a></li>
				<li><a href="#">Chapelle</a></li>
				<li><a href="#">Nature</a></li>
				<li><a href="#">Photo</a></li>
				<li><a href="#">Arbre</a></li>
				<li><a href="#">Chêne</a></li>
			</ul>
		</div>
		<div id="mapRelative">
			<div id="mapFixe"></div>
		</div>	<!-- End mapRelative -->
		
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
			    <li>Chapelle</li>
			    <li>Bousval</li>	
			</ul>
			<input type="submit" id="saveStory" name="saveStory" value="Raconter votre histoire">
		</form><!-- end div wysi-->

		<div id="nextStory">
			<a id="nextLeft" href="etang-de-ways.php">
				<img src="img/etangways.jpg" alt="lien vers l'étang de ways">
				<span>Découvrir le lieu précédant</span>
				<h2>L'étang de Ways</h2>
			</a>
			<a id="nextRight" href="sucrerie.php">
				<img src="img/sucrerie/sucrerie_head2.jpg" alt="lien vers la sucrerie">
				<span class="suiv">Découvrir le lieu suivant</span>
				<h2>La sucrerie</h2>
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
			lat: 50.608112,
			lng: 4.513928,
			zoom: 17,
			styles: style,
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
	        scrollTop: $("#ancre").offset().top
	    }, 1000);
	});

	$(".arbre").click(function(e) {
		e.preventDefault();
	    $('html, body').animate({
	        scrollTop: $("#arbre").offset().top,
	    }, 1000);
	});

	$(".fondation").click(function(e) {
		e.preventDefault();
	    $('html, body').animate({
	        scrollTop: $("#fondationTry").offset().top,
	    }, 1000);
	});

	$(".soleil").click(function(e) {
		e.preventDefault();
	    $('html, body').animate({
	        scrollTop: $("#couvertureTry").offset().top,
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