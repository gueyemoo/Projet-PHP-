<?php
  require_once('../modele/ProduitclassDAO.php');// inclus la class Produit DAO

  $dao = new ProduitDAO();
  $centre = array();
  $id = 1;

  $listePrix= array('- de 100€' => 100.0 ,'- de 150€' => 150.0 ,'- de 200€' => 200.0 ,'- de 250€' => 250.0 ,'- de 300€' => 300.0,'- de 400€' => 400.0 ); //Array pour le filtre du prix
  $dispo=$_GET['dispo']??"non"; //Si $dispo est vide on lui affecte 'non'

  if(isset($_GET['id']) ) {
    $id = $_GET['id'];
  }
  if(isset($_GET['prix']) ) {
    $prix = $_GET['prix'];
  }else{
    $prix=100000000000000000000; //Valeur par défaut pour inclure tout les produit sans "prendre en compte" le prix
  }

  if(isset($_GET['marque']) ) {
    $marque = $_GET['marque'];
  }else{
    $marque=''; //Valeur par défaut de la marque si celle si est vide
  }

  $dispo=$_GET['dispo']??''; // ça fonctionne comme un isset verifie si il y a quelque chose dans $dispo sinon on affecte ' ' a $dispo

  if(isset($_GET['vendeur']) ) {
    $vendeur = $_GET['vendeur'];
  }else{
    $vendeur='';//Valeur par défaut du vendeur si celle si est vide
  }


$centre=$dao->getArticleFiltre(10,$prix,$marque,$dispo,$vendeur);
  $marques = $dao->getMarques(); // On récupére tout les marques présent
  $vendeur = $dao->getVendeur(); // ON récupére tout les vendeurs présent

  $cover = '../modele/data/Images/'; //Chemin vers les images
  require_once('../view/Acceuilview.php'); //On inclue la vue de l'acceuil (modele MVC)






 ?>
