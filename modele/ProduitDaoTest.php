<?php
require_once('Produitclass.php');
require_once('ProduitclassDAO.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instance DAO
$DAO = new ProduitDAO($config['database_path']);

$m = $DAO->get(1);//On récupere le premier objet
var_dump($m);//On teste si le $DAO fonctionne correctement et retourner le premier objet
?>
