<?php
require_once('Produitclass.php');
require_once('ProduitclassDAO.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instace DAO
$DAO = new ProduitDAO($config['database_path']);

$m = $DAO->get(1);
var_dump($m);
?>
