<?php
	session_start();

	if ($_SESSION['logged_in'] != "ok") {
		header("Location: index.php");
	}

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Profil | himages | TFE Xavier Delmelle</title>
<meta name="description" content="TFE de Xavier Delmelle, étudiant en web design et multimédia à l'ESIAJ/HEAJ">
<meta name="keywords" content="tfe, Genappe, histoire, photos, himages, images">
<meta name="author" content="Xavier Delmelle">
<meta name="viewport" content="width=device-width; initial-scale=1.0"/>

<link rel="stylesheet" type="text/css" href="css/style.css"> 
<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"> </script>

<link rel="shortcut icon" href="img/favicon.ico">

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
					<a class="pseudo active" href="profil.php"><?php echo $_SESSION['username']; ?>
					<span style="background: url('img/defaut.svg') no-repeat;"></span>
					</a>
					<ul>
						<li><a class="active" href="profil.php">Mon profil</a></li>
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
			<form class="formheader" action="#">
					<label for="search">Rechercher par mot clé</label>
					<input type="search" name="search" autofocus=""  placeholder="Entrez un mot-clé" >
			</form>
			
			<div id="profilHeader"></div>
		</div> <!-- end header -->
		
		<h2 id="ancre">Profil de <?php echo $_SESSION['username']; ?></h2>
		<div class="left">
			<h2 class="titreALaUne">Activitées récentes</h2>
			<ul>
				<li class="aime">
					<p class="date"> 14 mars 2014</p>
					<?php echo $_SESSION['username']; ?> aime l'histoire  de <a href="chapelle-try-au-chene.php">&laquo; La Chapelle du Try-au-Chêne &raquo;
					<img src="img/chapelletryauchene.jpg" alt="Chapelle du Try-au-Chêne">
					</a>
				</li>
				<li class="valid">
					<p class="date"> 21 avril 2014</p>
					<?php echo $_SESSION['username']; ?> est considéré comme utilisateur fiable.
				</li>
				<li class="ecrit">
					<p class="date"> 21 avril 2014</p>
					<?php echo $_SESSION['username']; ?> a écrit l'histoire <a href="sucrerie.php">&laquo; Les plans d'avenir &raquo;
					<img src="img/sucrerie/sucrerie_head2.jpg" alt="Sucrerie vue de la reserve"></a>
				</li>
			</ul>
		</div> <!-- end left-->
		<div class="right">
			<h2 class="titreALaUne">A propos</h2>
			<ul>
				<li class="name"><?php echo $_SESSION['name']; ?></li>
				<li class="mailto"><a href="mailto:<?php echo $_SESSION['mail']; ?>"><?php echo $_SESSION['mail']; ?></a></li>
				<li class="localite"><?php echo $_SESSION['city']; ?></li>
				<?php if($_SESSION['twitter'] != ""){ ?>
				<li><a class="sociaux twitter" href="https://twitter.com/<?php echo $_SESSION['twitter']; ?>"><?php echo $_SESSION['twitter']; ?></a></li>
				<?php } else{ ?>
				<li><a class="sociaux twitter hide" href="#"></a></li>
				<?php } ?>
				<li><a class="sociaux facebook" href="https://www.facebook.com/<?php echo $_SESSION['facebook']; ?>"><?php echo $_SESSION['facebook']; ?></a></li>
			</ul>
			<h2 class="titreALaUne">Statistiques</h2>
			<ul>
				<li class="articleEcrit"><a href="#">4 articles écrit</a></li>
				<li class="articleAime"><a href="#">10 articles aimé</a></li>
				<li class="articleLu"><a href="#">14 articles lu</a></li>
			</ul>
		</div><!-- end right-->
	</div> <!-- End content -->
	
	<footer class="surpro">
		<h3><a href="index.php">himages</a></h3>
		<p>&copy; himages, 2014</p>
	</footer> <!-- End footer -->
	
</div> <!-- End container -->

<div class="sb-slidebar sb-right">
	<ul class="mobile">
		<li><a class="large" href="lire.php">Lire</a></li>
		<?php if($_SESSION['logged_in'] != "ok"){ ?>

		<li><a class="large"  href="connexion.php">Connexion</a></li>
		<li><a class="large" href="inscription.php">Inscription</a></li>
		
		<?php } else{ ?>
		<li><a class="large" href="ecrire.php">&Eacute;crire</a></li>
		<li class="membre">
			</a>
			<ul>
				<li class="active"><a class="active" href="profil.php"><span style="background: url('img/defaut.svg') no-repeat;"></span><?php echo $_SESSION['username']; ?></a></li>
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
<!-- TagIt-->
<script src="js/tagit/tag-it.js" type="text/javascript" charset="utf-8"></script>
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