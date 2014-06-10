<?php
// On démarre la session
session_start();

// On détruit notre session
session_destroy();

// On détruit les variables de notre session
unset($_SESSION);

// On redirige le visiteur vers la page d'accueil
header ('location: ../index.php');
?>