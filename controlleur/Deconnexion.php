<?php
require_once('../modele/ProduitclassDAO.php');

$_SESSION['connecter'] = false;
session_destroy();
header("Location: ../controlleur/Acceuil.php");

 ?>
