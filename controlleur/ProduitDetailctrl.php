<?php
require_once('../modele/ProduitclassDAO.php');
//var_dump($DAO->nb());
$id=max(($_GET['id']??1),1);
$id=min($id,$DAO->nb());
$Produit = $DAO->get($id);
$firstId=$_GET['firstId']??1;
$route='../modele/data/Images/'.$Produit->cover;

if($idClient){
  $Favoris=$DAO->isFavoris($idClient,$id);
  // var_dump($DAO->isFavoris($idClient,$id));
}
include('../view/ProduitDetailview.php');
 ?>
