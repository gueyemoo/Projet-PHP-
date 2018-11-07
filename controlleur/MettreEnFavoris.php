<?php
require_once('../modele/ProduitclassDAO.php');

$idProduit=$_GET['idProduit']??0;
$action=$_GET['action']??'';

if ($idProduit && $idClient) {
  if ($action=='add') {
    $DAO->ajoutFavoris($idClient,$idProduit);
  }elseif ($action=='delete') {
    $DAO->deleteFavoris($idClient,$idProduit);
  }else {
    print("Action Erroné");
  }
}
header("Location: ../controlleur/ProduitDetailctrl.php?id=$idProduit");

 ?>
