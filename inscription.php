<?php 
	require_once('php/db_connect.php');

	if ($_SESSION['logged_in'] == "ok") {
		header("Location: index.php");
	}
?>

<?php


if(isset($_POST['submit'])) {
    $formOK = true;
    $motif="#[^a-zA-Z'éèàê0-9 \-_ ]#";
	$motif_mail="#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#";

	if($_POST['username']=="" || $_POST['mail']=="" || $_POST['password']=="" || $_POST['repeatpassword']=="" ){
		$formOK = false;
		$error = "<p class='error'>Veuillez remplir tous les champs</p>";
	}
	if(preg_match($motif,$_POST['username'])){
		$formOK = false;
		$errorName = "<p class='error'>Votre nom d'utilisateur n'est pas valide</p>";
	}
	if(!preg_match($motif_mail,$_POST['mail'])){
		$formOK = false;
		$errorMail = "<p class='error'>Votre email n'est pas correcte, veuillez la corriger</p>";
	}
	if($_POST['password'] !== $_POST['repeatpassword']){
		$formOK = false;
		$errorRepeat = "<p class='error'>Vous n'avez pas indiquez le même mot de passe</p>";
	
	}

    if ($formOK) {
        $usr = new Users;
        $usr->storeFormValues($_POST);
        echo $usr->register($_POST);
        $nickel = "<div class='nickel'><p>Vous êtes inscrits! himages vous souhaite la bienvenue.</p><a href='connexion.php'>Vous pouvez vous connecter, maintenant.</a></div>";
		include 'php/inc/mail.php';
	}
}

?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Inscription | himages | TFE Xavier Delmelle</title>
<meta name="description" content="TFE de Xavier Delmelle, étudiant en web design et multimédia à l'ESIAJ/HEAJ">
<meta name="keywords" content="tfe, Genappe, histoire, photos, himages, images">
<meta name="author" content="Xavier Delmelle">
<meta name="viewport" content="width=device-width; initial-scale=1.0"/>

<link rel="stylesheet" type="text/css" href="css/style.css"> 
<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="img/favicon.ico">
</head>


<body>

<div id="container" class="log">
	<div id="content">
		<div id="header">
			<h1><a href="index.php">himages</a></h1>
			<ul class="desktop">
				<?php if($_SESSION['logged_in'] != "ok"){ ?>

				<li><a href="connexion.php">Connexion</a></li>
				<li><a class="active" href="inscription.php">Inscription</a></li>
				
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
			<form class="formheader log" action="#">
					<label for="search">Rechercher par mot clé</label>
					<input type="search" name="search" autofocus=""  placeholder="Entrez un mot-clé" >
			</form>
			
		</div>
		
		<form method="POST" action="#"> 
			<?php if($nickel){echo "$nickel";}?>
			<fieldset id="inscription">
				<h2>S'inscrire sur himages</h2>
				<ol>
					<li>
						<?php if($error){echo "$error";}?>
						<?php if($errorName){echo "$errorName";}?>
						<label for="username">Nom d'utilisateur</label>
						<input type="text" maxlength="30"  autofocus=""  
						name="username" placeholder="Nom d'utilisateur" id="username" 
						value="<?php if(isset($_POST['username'])) { echo $_POST['username']; } ?>" >
					</li>

					<li>
						<?php if($errorMail){echo "$errorMail";}?>
						<label for="mail">Email</label>
						<input type="text" maxlength="30"  
						name="mail" placeholder="Email" id="mail"
						value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>">
					</li>

					<li>
						<?php if($errorRepeat){echo "$errorRepeat";}?>
						<label for="password">Mot de passe</label>
						<input type="password" maxlength="30" 
						name="password" placeholder="Mot de passe" id="password">
					</li>

					<li>
						<label for="repeatpassword">Repetez le mot de passe</label>
						<input type="password" maxlength="30"  
						name="repeatpassword" placeholder=" Repetez le mot de passe" id="repeatpassword">
					</li>
				
					<input type="submit" name="submit" value="S'enregistrer">
				</ol>
				<a class="logTransversal" href="connexion.php">Vous avez déjà un compte? Connectez-vous.</a>
			</fieldset>

		</form>


	</div> <!-- End content -->
	
</div> <!-- End container -->

<div class="sb-slidebar sb-right">
	<ul class="mobile">
		<li><a class="large" href="lire.php">Lire</a></li>
		<?php if($_SESSION['logged_in'] != "ok"){ ?>

		<li><a class="large" href="connexion.php">Connexion</a></li>
		<li class="active"><a class="large active" href="inscription.php">Inscription</a></li>
		
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
		
		<?php } ?>d
		
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
