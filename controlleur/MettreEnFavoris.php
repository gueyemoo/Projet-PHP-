<?php
require_once('../modele/ProduitclassDAO.php');

$idProduit=$_GET['idProduit']??0;//On verifie que l'idProdit n'est pas vide sinon il vaut 0
$action=$_GET['action']??'';//On verifie que l'action n'est pas vide sinon on lui affecte ' '(vide)

if ($idProduit && $idClient) {
  if ($action=='add') { //Si l'action dans l'url vaut add
    $DAO->ajoutFavoris($idClient,$idProduit);//On ajoute l'id du client et l'id du produit dans une liste de favoris.
  }elseif ($action=='delete') {//Si l'action dans l'url vaut delete
    $DAO->deleteFavoris($idClient,$idProduit);//On supprime l'id du client et l'id du produit de la liste des favoris.
  }else {
    print("Action Erroné");
  }
}
header("Location: ../controlleur/ProduitDetailctrl.php?id=$idProduit");//On redirige vers la page du produit détaillé avec l'identifiant du produit correspondant.

 ?>
