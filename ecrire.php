<?php
	session_start();


	if ($_SESSION['logged_in'] != "ok") {
		header("Location: connexion.php");
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ecrire | himages | TFE Xavier Delmelle</title>
<meta name="description" content="TFE de Xavier Delmelle, étudiant en web design et multimédia à l'ESIAJ/HEAJ">
<meta name="keywords" content="tfe, Genappe, histoire, photos, himages">
<meta name="author" content="Xavier Delmelle">
<meta name="viewport" content="width=device-width; initial-scale=1.0"/>

<link rel="stylesheet" type="text/css" href="css/style.css"> 

<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"> </script>
<link rel="shortcut icon" href="img/favicon.ico">
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
				<li><a class="active" href="ecrire.php">&Eacute;crire</a></li>
				<?php } ?>
				<li><a href="lire.php">Lire</a></li>
			</ul>
			
			<a class="search" href="#">Recherche</a>
			<a class="search sb-open-right" href="#">Recherche</a>
			<form class="formheader" action="#">
					<label for="search">Rechercher par mot clé</label>
					<input type="search" name="search" autofocus=""  placeholder="Entrez un mot-clé" >
			</form>
			
			<!--<h2 class="haut">&Eacute;crire votre histoire</h2>-->
			<div id="profilEcrire"></div>
			<!--<a id="start" href="#ancre"></a>-->
		</div> <!-- end header -->
		
		<h2>&Eacute;crire votre histoire</h2>

		<form id="wysi">

		<label for="choixHistoire">Choisissez</label>
		<select id="choixHistoire" name="choixHistoire">

			<option value="non">Choisissez votre lieu</option>
			<option value="non"> </option>
			<option value="non">Chapelle du Try-au-Chêne</option>
			<option value="non">La sucrerie</option>
			<option value="non">L'étang de Ways</option>
		</select>
		
		<p class="creerLieu">+ <span>Créer un nouveau lieu</span></p>
		
			<label for="nomLieu">Le nom de votre lieu</label>
			<input class="toShow" type="text"  maxlength="30" name="nomLieu" placeholder="Le nom de votre lieu" id="nomLieu">


			<div id="upload">
				<label for="fileUpl">upload</label>
				<input type="file" id="fileUpl" name="fileUpl">
				<button><img src="img/photo.svg" alt="icon photo"></button>
			</div>

			
			<label for="titre">Le titre de votre histoire</label>
			<input type="text"  maxlength="30" name="titre" placeholder="Le titre de votre histoire" id="titre">

			<div class="editable"></div><!-- End editable-->

			<label class="labelShow" for="annee">Situez votre histoire dans le temps</label>
			<input type="text"  maxlength="30" name="annee" placeholder="1989" id="annee">

			<p>Ajouter des mots-clés :</p>

			<ul id="myTags">
			    <li>Genappe</li>
			</ul>


		</form><!-- end div wysi-->


<h2 class="toShow">Localiser l'endroit</h2>
<div id="localisation">
	<form method="post" id="geocoding_form" action="#">
		<label for="address">Adresse:</label>
		<div class="input toShow">
			<input type="text" id="address" name="address" placeholder="Localiser via une adresse">
			<input type="submit" class="btn" value="Search">
		</div>

		<a href="sucrerie.php" class="save ecrire">Racontez votre histoire</a>
	</form>
	<div class="toShow" id="map"></div>
</div> <!-- end localisation -->


	</div> <!-- End content -->
	
	<footer>
		<h3><a href="index.php">himages</a></h3>
		<p>&copy; himages, 2014</p>
	</footer> <!-- End footer -->
	
</div> <!-- End container -->

<div class="sb-slidebar sb-right">
	<ul class="mobile">
		<li><a class="large" href="lire.php">Lire</a></li>
		<?php if($_SESSION['logged_in'] != "ok"){ ?>

		<li><a class="large" href="connexion.php">Connexion</a></li>
		<li><a class="large" href="inscription.php">Inscription</a></li>
		
		<?php } else{ ?>
		<li class="active"><a class="large active" href="ecrire.php">&Eacute;crire</a></li>
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
<!-- WISY MEDIUM-->
<script src="js/medium-editor.js"></script>
<script>
    var editor = new MediumEditor('.editable', {
        buttonLabels: 'fontawesome'
    });
</script>
<!-- TagIt-->
<script src="js/tagit/tag-it.js" type="text/javascript" charset="utf-8"></script>
<!-- Gmaps -->
<script src="js/gmaps.js"></script>
<script type="text/javascript">

	var map;
	    $(document).ready(function(){
			map = new GMaps({
				div: '#map',
				styles: style,
				lat: 50.610938,
				lng: 4.450161
			});var path = [[50.658641, 4.439646], 
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
		  strokeOpacity: 0.6,
		  strokeWeight: 2,
		  fillColor: 'transparent',
		  fillOpacity: 0.6
		});

		$('#geocoding_form').submit(function(e){
		    e.preventDefault();
		    GMaps.geocode({
		      address: $('#address').val().trim(),
		      callback: function(results, status){
		        if(status=='OK'){
		          var latlng = results[0].geometry.location;
		          map.setCenter(latlng.lat(), latlng.lng());
		          map.addMarker({
		            lat: latlng.lat(),
		            lng: latlng.lng(),
		            draggable: true,
		            icon: image,
					fences: [polygon],
					outside: function(marker, fence) {
						//alert('This marker has been moved outside of its fence');
					}
		          });
		        }
		      }
			});
		});

		// géolocalise l'adresse entrée dans le input
		GMaps.geocode({
		  address: $('#address').val(),
		  callback: function(results, status) {
		    if (status == 'OK') {
		      var latlng = results[0].geometry.location;
		      map.setCenter(latlng.lat(), latlng.lng());
		      map.addMarker({
		        lat: latlng.lat(),
		        lng: latlng.lng(),
		        draggable: true,
		      });
		    }
		  }
		});
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