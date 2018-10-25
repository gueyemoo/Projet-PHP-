<?php
require_once('../modele/ProduitclassDAO.php');
$config = parse_ini_file('../config/config.ini');

$LesProduits= new ProduitDAO($config['database_path']);

$id=(isset($_GET['id']))?$_GET['id']:1;
$Produit = $LesProduits->get($id);
$firstId=1;
$firstId=(isset($_GET['firstId']))?$_GET['firstId']:1;
$route='../modele/data/Images/'.$Produit->cover;

?>

<?php
include('../view/ProduitDetailview.php');
 ?>
