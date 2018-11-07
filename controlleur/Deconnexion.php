<?php
require_once('../modele/ProduitclassDAO.php');

$_SESSION['connecter'] = false;
var_dump($_SESSION);
session_destroy();
header("Location: ../controlleur/Acceuil.php");

 ?>
