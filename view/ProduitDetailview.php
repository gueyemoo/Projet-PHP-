<!DOCTYPE html>
<html>
<head>
<title>Detail du Produit</title>
<title>VMS SKI - Produit Detaille</title>
<meta http-equiv="content-type" content="text/html; charset =iso-8859-1">
<link rel="stylesheet" type="text/css" href="../view/style.css">
<style>
/* Ce son des font utilisé pour le texte */
      @font-face { font-family: Vogue; src: url('Vogue.ttf'); }
      @font-face { font-family: Office; src: url('Office.otf'); }
      @font-face { font-family: Aliens; src: url('aliens.ttf'); }
    </style>
</head>

<body>
  <div id="hd">
    <?php include('header.php') ?>
  </div>

  <div id="body">
    <div class="colonne-gauche">
      <?php include('asidePub.php') ?>
      </div>

    <div class="colonne-centre">
      <div class="LeProduit">

        <a href="../controlleur/Acceuil.php"> <img src="../modele/data/Bouton/home.png" alt="image-de-fleche-retour"> </a>

      <div class="imgProduit">
          <img src="<?=$route?>" alt="Pas d'image trouvé" style="height:400px; weight: 400px; margin-top: 70px; margin-left:5px;">
      </div>

      <div class="lesInfos" >
        <!-- On retourne les informations récuperer de l'objet produit -->
        <h1 style="color: gray;"> <?=$Produit->reference?></h1>
        <p>Categorie: <?=$Produit->categorie  ?></p>
        <p>Marque: <?=$Produit->marque  ?></p>
        <p>Disponibilite: <?=$Produit->disponibilite  ?> </p>
        <p>Taille: <?=$Produit->taille  ?> cm </p>
        <p>Vendeur:<?=$Produit->vendeur  ?></p>
        <p>Prix: <?=$Produit->prix  ?> €</p>
        <br>
        <br>
        <?php if ($Favoris??0): ?>
          <!-- On verifie si le produit est deja en favoris dans ce cas on propose de le retirer -->
          <a href="../controlleur/MettreEnFavoris.php?idProduit=<?=$Produit->id ?>&action=delete"><img src="../modele/data/Bouton/plein.png" alt="image-de-coeur-plein"></a> <br>Retirer des Favoris
        <?php elseif ($Favoris??1):  ?>
          <!-- On verifie que l'utilisateur est connecter pour mettre en favoris ou retirer des favoris sinon on lui propose de se connecter  -->
          <a href="../controlleur/Connexion.php">Connectez-vous</a> pour ajouter ce produit à vos favoris.
          <?php else: ?>
            <!-- On verifie que l'utilisateur n'a pas ce produit en favoris dans ce cas on lui propose de l'ajouter à ces favoris -->
            <a href="../controlleur/MettreEnFavoris.php?idProduit=<?=$Produit->id ?>&action=add"><img src="../modele/data/Bouton/vide.png" alt="image-de-coeur-vide"></a> <br>Ajouter aux Favoris
        <?php endif; ?>
      </div>
    </div>




    </div>
    <div class="colonne-droite">
      <?php include('asidePub.php') ?>
    </div>
  </div>

<div id="ft">
<?php include('footer.php') ?>
</div>
</body>

</html>
