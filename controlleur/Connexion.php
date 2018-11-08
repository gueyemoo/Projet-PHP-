<?php
  require_once('../modele/ProduitclassDAO.php');

foreach ($_POST as $key => $value) {
  print($key."   ".$value);
  ?>
<br>
  <?php

}

if ($_POST??0) {
    if (  $DAO->verifUser($_POST['pseudo'],$_POST['mdp'])) { //On vérifie si le client a saisi le bon pseudo et mot de passe
        // print("Connexion réussi");
        header('Location:../controlleur/Acceuil.php'); //On le redirige vers la page d'acceuil si reussi

    }else{
              // print("Connexion échoué");
              require_once('../view/Connexionview.php');//On le garde a la page de connexion si echec

    }
}else{
  // print("n'improte quoi");
  require_once('../view/Connexionview.php');
}


 ?>
