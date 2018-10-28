<?php
  require_once('../modele/ProduitclassDAO.php');

  $dao = new ProduitDAO();

  $centre = array();
  $id = 1;

  if(isset($_GET['id']) ) {
    $id = $_GET['id'];
  }


  for ($i=$id; $i <$id+10 ; $i++) {
  $a = $dao->get($i);
  $centre[] = $a;
  }


  $marques = $dao->getMarques();

  $tailles = $dao->getTaille();


  // $tailles = $dao->getTaille();
  $cover = '../modele/data/Images/';
  //var_dump($tailles);
  require_once('../view/Acceuilview.php');
 ?>
