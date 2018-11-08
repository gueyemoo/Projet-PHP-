<?php
require_once('../modele/ProduitclassDAO.php');

$_SESSION['connecter'] = false; // On tourne la session connecter à faux(elle est a true si client connecter)
session_destroy(); //On détruit la session
header("Location: ../controlleur/Acceuil.php"); //On redirige vers l'acceuil

 ?>
