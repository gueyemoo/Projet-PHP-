<?php
require_once('../modele/ProduitclassDAO.php');

$dao = new ProduitDAO();
$centre = array();
$marques = $dao->getMarques();
$cover = '../modele/data/Images/';
$categorie = $dao->getCategorie($_GET['cat']);
$id = 1;


if(isset($_GET['id']) ) {
  $id = $_GET['id'];
}

if (sizeof($categorie)<10)
for ($i=0; $i <sizeof($categorie) ; $i++) {
$a = $categorie[$i];
$centre[] = $a;
}
elseif (sizeof($categorie)<$id+10) {
  for ($i=$id; $i <sizeof($categorie) ; $i++) {
  $a = $categorie[$i];
  $centre[] = $a;
  }
}
else {
  for ($i=$id; $i <$id+10 ; $i++) {
  $a = $categorie[$i];
  $centre[] = $a;
  }
}


require_once('../view/CategorieView.php');

 ?>
