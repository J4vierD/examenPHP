<?php

require_once('php/db_connect.php');
   

$username = htmlspecialchars(trim($_POST['username']));
$password = htmlspecialchars(trim($_POST['password']));


$password = md5($password);


try {
	$log = "SELECT * FROM tfeusers WHERE username='$username' AND password='$password' ";
	$count=$db->exec($log);
	echo "<br>"; 
}

catch(PDOException $e) {
	echo 'Erreur : '.$e->getMessage();
}

?>
