<?php
require_once('../modele/ProduitclassDAO.php');
$id=max(($_GET['id']??1),1);
$id=min($id,$DAO->nb());
$Produit = $DAO->get($id); //On recupere l'identifiant du produit
$firstId=$_GET['firstId']??1;
$route='../modele/data/Images/'.$Produit->cover;//On recupere le chemin vers l'image

if($idClient){
  $Favoris=$DAO->isFavoris($idClient,$id);//On verifie que le produit est dans la liste des favoris
}
include('../view/ProduitDetailview.php');//On inclus la vue du produit détaillé
 ?>
