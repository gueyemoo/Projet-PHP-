<?php
  require_once('../modele/ProduitclassDAO.php');

foreach ($_POST as $key => $value) {
  print($key."   ".$value);
  ?>
<br>
  <?php

}

if ($_POST??0) {
    if (  $DAO->verifUser($_POST['pseudo'],$_POST['mdp'])) {
        print("Connexion réussi");
        header('Location:../controlleur/Acceuil.php');

    }else{
              print("Connexion échoué");
              require_once('../view/Connexionview.php');

    }
}else{
  print("n'improte quoi");
  require_once('../view/Connexionview.php');
}


 ?>
