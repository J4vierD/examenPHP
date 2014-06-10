<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lire | himages | TFE Xavier Delmelle</title>
<meta name="description" content="TFE de Xavier Delmelle, étudiant en web design et multimédia à l'ESIAJ/HEAJ">
<meta name="keywords" content="tfe, Genappe, histoire, photos, himages">
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
				<li><a class="active" href="#" OnClick="lieu()">Lire</a></li>
			</ul>
			
			<a class="search" href="#">Recherche</a>
			<a class="search sb-open-right" href="#">Recherche</a>
			<form class="formheader" action="#">
					<label for="search">Rechercher par mot clé</label>
					<input type="search" name="search" autofocus=""  placeholder="Entrez un mot-clé" >
			</form>
				<span id="tempslide"></span>

			<ol class="rslides" id="slider1">
				<li><a href="chapelle-try-au-chene.php"><img src="img/chapelletryauchene.jpg" alt="chapelle du try au chene"></a></li>
				<li><a href="etang-de-ways.php"><img src="img/etangways.jpg" alt="etang de ways"></a></li>
				<li><a href="sucrerie.php"><img src="img/sucrerie/sucrerie_head2.jpg" alt="la sucrerie"></a></li>
			</ol>

		</div> <!-- end header -->



		<h2>Lire leurs histoires</h2>
		
	
		
		
		<div class="histoireUne">
			<a href="chapelle-try-au-chene.php"><h2 class="titreALaUne">La Chapelle du Try-au-Chêne</h2>
			
			<p class="nombresArticles">3<span>3 histoires à découvrir</span></p>
	
			<img class="alaune" src="img/chapelletryauchene.jpg" alt="la chapelle du try au chene">
			
			<p>Il est 6h30. Alors que Bousval dort encore, je suis déjà posté devant 
				ma chapelle  préférée. Je m’attendais à observer les animaux sortant 
				du bois de la Tassenière, mais c’est vers la chapelle que le 
				spectacle se déroula.</p>

			</a>
			<a class="suite" href="chapelle-try-au-chene.php">Lire la suite</a>
			
		</div> <!-- End histoire -->

		<div class="histoireUne">
			<a href="sucrerie.php"><h2 class="titreALaUne">La sucrerie</h2>
			<p class="nombresArticles">3<span>3 histoires à découvrir</span></p>
			<img class="alaune" src="img/sucrerie/sucrerie_head2.jpg" alt="la sucrerie">
			
			<p>La sucrerie. L'indescriptible manque d'une usine qui fonctionnait 
			il y a encore 10 ans. Bien sûr, j'étais plus jeune. Bien sûr, 
			je n'habitais pas à côté et n'avais pas beaucoup de nuisance.</p>
			</a>	
			<a class="suite" href="sucrerie.php">Lire la suite</a>
			
		</div> <!-- End histoire -->

		<div class="histoireUne">
			<a href="etang-de-ways.php"><h2 class="titreALaUne">L'étang de Ways</h2>
			<p class="nombresArticles">1<span>1 histoire à découvrir</span></p>
			<img class="alaune" src="img/etangways.jpg" alt="l'étang de ways">
			
			<p>Tout à fait inattendu. Derrière des habitations mais assez reculé 
			pour se croire loin de tout, j'ai découvert un étang, l'étang de Ways.</p>
			</a>	
			<a class="suite" href="etang-de-ways.php">Lire la suite</a>
			
		</div> <!-- End histoire -->
		



	</div> <!-- End content -->
	
	<footer class="surplu">
		<h3><a href="index.php">himages</a></h3>
		<p>&copy; himages, 2014</p>
	</footer> <!-- End footer -->
	
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
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
<!-- WISY MEDIUM-->
<script src="js/medium-editor.js"></script>
<!-- TagIt-->
<script src="js/tagit/tag-it.js" type="text/javascript" charset="utf-8"></script>
<!-- Slideshow -->
<script src="js/responsiveslides.min.js"></script>
<script type="text/javascript">
$(function () {
	$("#slider1").responsiveSlides({
	speed: 800,
        nav: true,
	});
});
</script>
<!-- Recherche-->
<script type="text/javascript">
	$(document).ready(function(){
	    $('.search').click(function(){
	        $('.formheader').toggleClass('searchVisible'),
	        $('.search').toggleClass('searchVisibleBG');
	    });
})
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