<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>himages | TFE Xavier Delmelle</title>
<meta name="description" content="TFE de Xavier Delmelle, étudiant en web design et multimédia à l'ESIAJ/HEAJ">
<meta name="keywords" content="tfe, Genappe, histoire, photos, himages">
<meta name="author" content="Xavier Delmelle">
<meta name="viewport" content="width=device-width; initial-scale=1.0"/>

<link rel="stylesheet" type="text/css" href="css/style.css"> 
<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="img/favicon.ico">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

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
				<li><a href="lire.php">Lire</a></li>
			</ul>

			<a class="search" href="#">Recherche</a>
			<a class="search sb-open-right" href="#">Recherche</a>
			<a id="start-index" href="#ancre"></a>
				<form class="formheader" action="#">
					<label for="search">Rechercher par mot clé</label>
					<input type="search" name="search" autofocus=""  placeholder="Entrez un mot-clé" >
			</form>

			<div id="ways">
				<div id="begin">
				<p class="accroche">Un lieu,</p>
				<p class="accroche">son histoire,</p>
				<p class="accroche"><span>Votre histoire...</span></p>

				<ul class="buttonStart">
					<li><a class="random" href="#" OnClick="lieu()">Découvrir</a></li>
					<li><a href="ecrire.php">&Eacute;crire</a></li>
				</ul>
			</div> <!-- end begin -->
			</div> <!-- end div ways -->

		</div> <!-- end header -->

		<div class="timeline">
				<ul class="timenav bullets">
					<li class="active waysBull"><a class="futur" href="#"><span>1992</span></a></li>
					<li class="active waysBull"><a class="futur" href="#"><span>2014</span></a></li>
				</ul>
				<span class="timearrow"></span>
		</div> <!-- End timeline -->

		<div id="first">
		<h2 id="ancre">Ways, son histoire, mon histoire...</h2>
		<div class="histoire">

			<p>L'église St Martin se situe au cœur du village de Ways, 
				entité de Genappe. Elle fut construite en 1767 et classée 
				aux monuments historiques depuis 1963. Elle fait face à une 
				grande prairie qui donne au village de Ways son caractère 
				champêtre.</p>
				
			<p>Proche de l'église, un ancien béguinage et sa chapelle ont été édifiés 
				entre 1205 et 1210. Sur la chapelle, vous trouverez une Coquille St Jacques, 
				symbole du pèlerinage de Compostelle.</p>
				<img  class="grid2" src="img/chapelleWays.jpg" alt="la chapelle de ways">
				<img class="grid" src="img/coquille.jpg" alt="coquille st jacques">
			<p>De nombreuses promenades vous feront découvrir fermes, châteaux, 
			anciens moulins, maisons typiques et autres trésors de la nature
			 comme la Dyle et ses abords qui abritent une richesse en 
			 biodiversité. </p>
			 <p>En hiver, lors des journées enneigées, la prairie en face de l'église
			  devient un champ de bonhommes de neige et une piste de luge pour petits et grands.<br /> 
				En été, elle fait place à la brocante
				de la célèbre Ducasse de Ways. Une fête de village qui réunit jeunes
				et moins jeunes de Genappe, dans une ambiance familiale hors du 
				commun.</p>
				<img src="img/egliseWays.jpg" alt="Eglise de ways">
			<p>Et c'est dans ce beau village que ma famille et moi, âgé de 
				trois ans, nous avons élu domicile. J'y ai fait de belles 
				rencontres, découvert des lieux que j'apprécie dans Ways et 
				ses environs.</p>
			<p>Si vous aussi vous avez un lieu qui vous plaît, 
				racontez-nous son histoire et ce qu'il représente dans 
				votre vie.</p>

			<span>Un texte de</span>
			<div class="conteur">	
				<a href="#">
					<img src="img/javier.jpg" alt="avatar de Javier">
					<p>Javier</p>
				</a>
			</div><!-- End conteur -->
		</div> <!-- End histoire -->
		</div>

		<h2>Découvrir les lieux de Genappe &amp; leurs histoires</h2>

		<div id="mapRelativeIndex">
			<div id="mapFixe"></div>
		</div><!-- End mapRelative -->
	

		<div class="recherche">
			<div class="histoire ">
				<h2>Rechercher une histoire dans Genappe</h2>
				<form action="#">
					<label for="search">Rechercher par mot clé</label>
					<input type="search" name="search"  placeholder="Entrez un mot-clé" >
				</form>
			</div> <!-- End histoire -->
	</div> <!-- End recherche -->
	
	<div id="domicile">

		<div class="histoire">
			<form action="#" method="post">
				<fieldset id="inscription">
					<h2>himages se déplace chez vous!</h2>
					
					<ol>
						<li>
							<p>Connaissez-vous quelqu'un qui aimerait raconter une histoire?
								 Vous préférez raconter oralement votre histoire?</p>
							<p>Les membres d'himages se déplacent afin de vous écouter et transmettre vos récits sur le site.</p>
							<p>Contactez-nous!</p>

						</li>
						<li class="floatInput">
							<label for="name">Je suis</label>
							<input type="text" id="name" name="nom" value="" placeholder="Henry">
						</li>	

						<li class="floatInput">
							<label for="email">Mon email est</label>
							<input type="text" id="email" name="courriel" value="" placeholder="henry@monemail.be">
						</li>	

						<li>
							<label for="message">J'ai une histoire à raconter,</label>
							<textarea id="message"  placeholder="mais je préfère la raconter oralement." name="message"></textarea>
						</li>
					</ol>

					<input type="submit" value="Envoyer la demande">
				</fieldset>
			</form>
		</div>
	</div>
	
	<footer class="inde">
		<h3><a href="index.php">himages</a></h3>
		<p>&copy; himages, 2014</p>
	</footer><!-- End footer -->
	</div>
</div> <!-- End container -->

<div class="sb-slidebar sb-right">
	<ul class="mobile">
		<li><a class="large" href="lire.php">Lire</a></li>
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
		<input type="text" name="search" id="search" autocomplete="off" tabindex="1" placeholder="Recherche">
	</fieldset>
</div> <!-- End slidebar -->





<!-- jQuery -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
<!-- Script general -->
<script src="js/script.js"></script>
<!-- PARALAX -->
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<!-- WISY MEDIUM-->
<script src="js/medium-editor.js"></script>
<!-- TagIt-->
<script src="js/tagit/tag-it.js" type="text/javascript" charset="utf-8"></script>
<!-- Gmaps -->
<script src="js/gmaps.js"></script>
<script type="text/javascript">

	$(document).ready(function () {
    
		map = new GMaps({
			div: '#mapFixe',
			lat: 50.610938,
			lng: 4.450161,
			styles: style,
			zoom: 12,
			scrollwheel: false,
			swipe: false,
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
		  fillOpacity: 0.1
		});
});
	
</script>

<!-- lien hasard -->
<script type="text/javascript">
	function variable(url) {
    	window.location=url;
  	} 
	function lieu() { 
		var a; 
		a = 1+Math.round(Math.random()*3); 
		if (a==1) 
		  variable("sucrerie.php");
		if (a==2) 
		  variable("etang-de-ways.php"); 
		if (a==3) 
		  variable("chapelle-try-au-chene.php");
	}
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