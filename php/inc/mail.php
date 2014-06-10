<?php
session_start();
$destinataire = $_POST['username'];
$mail = $_POST['mail'];// Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "Bonjour, Quelqu'un (avec un peu de chance, vous) vient juste de créer un compte sur xavier-delmelle.be/himages.
Nous vous souhaitons la bienvenue! L'équipe himages";
$message_html = "<html><head></head><body>Bonjour ".$destinataire.",<br /><br/>Quelqu'un (avec un peu de chance, vous) vient 
juste de cr&eacute;er un compte sur <a href='http://xavier-delmelle.be/himages'>xavier-delmelle.be/himages</a>.<br />
Nous vous souhaitons la bienvenue!<br /><br /> L&#145;&eacute;quipe himages
</body></html>";
//==========
 
//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = "Bienvenue sur himages !";
//=========
 
//=====Création du header de l'e-mail.
$header = "From: \"himages\"<postmaster@xavier-delmelle.be>".$passage_ligne;
$header.= "Reply-to: \"himages\" <postmaster@xavier-delmelle.be>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 
//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========
 
//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);
//==========
?>