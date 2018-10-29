<?php
  require_once('../modele/ProduitclassDAO.php');

  $dao = new ProduitDAO();

  $centre = array();
  $id = 1;
  $listePrix= array('- de 100' => 100.0 ,'- de 200' => 200.0 ,'- de 300' => 300.0 ,'- de 400' => 400.0 ,'- de 500' => 500.0 );
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


  // for ($i=$id; $i <$id+10 ; $i++) {
  // $a = $dao->get($i);
  // $centre[] = $a;
  // }

$centre=$dao->getArticleFiltre(10,$prix,$marque,$dispo);
  $marques = $dao->getMarques();

  $tailles = $dao->getTaille();

  // $tailles = $dao->getTaille();
  $cover = '../modele/data/Images/';
  //var_dump($tailles);
  require_once('../view/Acceuilview.php');

  //Test





 ?>
