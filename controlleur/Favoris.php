<?php
require_once('../modele/ProduitclassDAO.php');

$id=$_GET['id']??0;
if ($id) {
$LesArticlesFavoris=$DAO->getFavoris($id);
require_once('../view/Favorisview.php');
}
 ?>
