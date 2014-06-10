<?php
	session_start();

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Crédits | himages | TFE Xavier Delmelle</title>
<meta name="description" content="TFE de Xavier Delmelle, étudiant en web design et multimédia à l'ESIAJ/HEAJ">
<meta name="keywords" content="tfe, Genappe, histoire, photos, himages, images">
<meta name="author" content="Xavier Delmelle">
<meta name="viewport" content="width=device-width; initial-scale=1.0"/>

<link rel="stylesheet" type="text/css" href="css/style.css"> 
<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
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
			<form class="formheader" action="recherche.php">
					<label for="search">Rechercher par mot clé</label>
					<input type="search" name="search" autofocus=""  placeholder="Entrez un mot-clé" >
			</form>
			

		</div> <!-- end header -->
		
		<h2 id="ancre">Crédits</h2>
		<div class="left">
			<h2 class="titreALaUne">Ressources</h2>
			<ul>
				<li>Pictogramme de<a href="http://thenounproject.com/term/search/41093/">Mun May Tee</a></li>
				<li><a href="">FlickR</a></li>
				<li><a href="">Gmaps</a></li>
			</ul>
		</div> <!-- end left-->
		<div class="right">
			<h2 class="titreALaUne">Merci à </h2>
			<ul>
				<li><a href="thomasdimartino.be">Thomas Di Martino</a>pour son aide précieuse.</li>
				<li><a href="https://www.facebook.com/tscarnierephoto?fref=ts">Tristan Scarnière</a>, pour ses photos.</li>
				<li><a href="https://www.facebook.com/tmiserquephotography">Thibaut Miserque,</a>pour ses photos.</li>
			</ul>
		</div><!-- end right-->

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
		<li><a class="large" href="ecrire.php">&Eacute;crire</a></li>
		<li class="membre">
			
			</a>
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
<!-- Recherche-->
<script type="text/javascript">
	$(document).ready(function(){
	    $('.search').click(function(){
	        $('.formheader').toggleClass('searchVisible'),
	        $('.search').toggleClass('searchVisibleBG');
	    });
})
</script>
<!-- ScrollTo -->
<script type="text/javascript">
	$("#start").click(function(e) {
		e.preventDefault();
	    $('html, body').animate({
	        scrollTop: $("#ancre").offset().top
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