<?php
require_once('../modele/ProduitclassDAO.php');

$id=$_GET['id']??0;//On verifie que id n'est pas vide sinon il vaut 0
if ($id) {
$LesArticlesFavoris=$DAO->getFavoris($id);//On récupere tout les articles qui sont en favoris
require_once('../view/Favorisview.php');//On redirige vers la vue des Favoris
}
 ?>
