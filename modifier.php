<?php
	require_once('php/db_connect.php');
	session_start();

	if ($_SESSION['logged_in'] != "ok") {
		header("Location: index.php");
	}


if(isset($_POST['submit'])) {
	
	$city = stripslashes( strip_tags( $_POST['city'] ) );
	$name = stripslashes( strip_tags( $_POST['name'] ) );
	$twitter = stripslashes( strip_tags( $_POST['twitter'] ) );
	$facebook = stripslashes( strip_tags( $_POST['facebook'] ) );


	try {
		$con = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD ); 
		$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		$sql = "UPDATE tfeusers SET city = :city, name = :name, twitter = :twitter, facebook = :facebook WHERE id = :ID";

		$stmt = $con->prepare( $sql );
		
		$stmt->bindValue("city", $city, PDO::PARAM_STR);
		$stmt->bindValue("name", $name, PDO::PARAM_STR);
		$stmt->bindValue("twitter", $twitter, PDO::PARAM_STR);
		$stmt->bindValue("facebook", $facebook, PDO::PARAM_STR);
		$stmt->bindValue("ID", $_SESSION['id'], PDO::PARAM_STR);
		$stmt->execute();
				
		$con = null;

		$_SESSION['city'] = $city;
		$_SESSION['name'] = $name;
		$_SESSION['facebook'] = $facebook;
		$_SESSION['twitter'] = $twitter;
		
	 } catch (PDOException $e) {
		 echo $e->getMessage();
	 }
	echo "<script type='text/javascript'>document.location.replace('profil.php');</script>";

}
	

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Modifier mon profil | himages | TFE Xavier Delmelle</title>
<meta name="description" content="TFE de Xavier Delmelle, étudiant en web design et multimédia à l'ESIAJ/HEAJ">
<meta name="keywords" content="tfe, Genappe, histoire, photos, himages">
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
					<a class="active pseudo" href="profil.php"><?php echo $_SESSION['username']; ?>
					<span style="background: url('img/defaut.svg') no-repeat;"></span>
					</a>
					<ul>
						<li><a href="profil.php">Mon profil</a></li>
						<li><a class="active" href="modifier.php">Modifier mon profil</a></li>
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
		
		<h2 id="ancre">Modifier votre profil</h2>
		
		<form id="modifier" action="" method="post">
            <ul class="formLeft">
                <li>
                    <label for="name">Nom complet</label>
                    <input type="text" id="name" name="name" placeholder="Votre nom complet" value="<?php echo $_SESSION['name']; ?>">
                </li>

                 <div id="upload">
					<label for="picture">Changer de photo de profil</label>
					<input type="file" id="picture" name="picture">
					<button><img src="img/photo.svg" alt="icon photo"></button>
				</div>
                <h3>Changer de mot de passe : </h3>
                <li>
                    <label for="oldpassword">Ancien mot de passe</label>
                    <input type="password" id="oldpassword">
                </li>
                <li>
                    <label for="password">Nouveau mot de passe</label>
                    <input type="password" id="password">
                </li>
               
            </ul>

            <ul class="formRight">
               
                <li>
                    <label for="lieu">Habite à</label>
                    <input type="text" id="lieu" name="city" placeholder="Votre village, ville" value="<?php echo $_SESSION['city']; ?>">
                </li>
                <h3 class="social">Réseaux sociaux</h3>
                <li class="sociaux">
                    <label for="twitter">Twitter</label>
                    <input type="text" id="twitter" placeholder="votreTwitter" name="twitter" value="<?php echo $_SESSION['twitter']; ?>">
                </li>
                <li class="sociaux">
                    <label for="facebook">Facebook</label>
                    <input type="text" id="facebook" placeholder="votre.facebook" name="facebook" value="<?php echo $_SESSION['facebook']; ?>">
                </li>

            </ul>
            <input class="save" type="submit" name="submit" value="Enregistrer les modifications">
        </form>
	</div> <!-- End content -->
	
	<footer class="surplu">
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
			<ul>
				<li><a href="profil.php"><span style="background: url('img/defaut.svg') no-repeat;"></span><?php echo $_SESSION['username']; ?></a></li>
				<li class="active"><a class="active" href="modifier.php">Modifier mon profil</a></li>
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