<?php
  require_once('../modele/ProduitclassDAO.php');

  $dao = new ProduitDAO();

  $centre = array();
  $id = 1;
  $listePrix= array('- de 100€' => 100.0 ,'- de 150€' => 150.0 ,'- de 200€' => 200.0 ,'- de 250€' => 250.0 ,'- de 300€' => 300.0,'- de 400€' => 400.0 );
  $dispo=$_GET['dispo']??"non"; //ça fonctionne comme un isset si $dispo est vide on lui affecte 'non'

  if(isset($_GET['id']) ) {
    $id = $_GET['id'];
  }
  if(isset($_GET['prix']) ) {
    $prix = $_GET['prix'];
  }else{
    $prix=100000000000000000000;
  }

  if(isset($_GET['marque']) ) {
    $marque = $_GET['marque'];
  }else{
    $marque='';
  }

  $dispo=$_GET['dispo']??''; // ça fonctionne comme un isset verifie si il y a quelque chose dans $dispo sinon on affecte ' ' a $dispo

  if(isset($_GET['vendeur']) ) {
    $vendeur = $_GET['vendeur'];
  }else{
    $vendeur='';
  }


$centre=$dao->getArticleFiltre(10,$prix,$marque,$dispo,$vendeur);
  $marques = $dao->getMarques();
  $vendeur = $dao->getVendeur();

  $cover = '../modele/data/Images/';
  require_once('../view/Acceuilview.php');






 ?>
