<!DOCTYPE html>
<html>
<head>
<title>Detail du Produit</title>
<title>VMS SKI - Produit Detaille</title>
<meta http-equiv="content-type" content="text/html; charset =iso-8859-1">
<link rel="stylesheet" type="text/css" href="../view/style.css">
<style>
      @font-face { font-family: Vogue; src: url('Vogue.ttf'); }
      @font-face { font-family: Office; src: url('Office.otf'); }
      @font-face ../m{ font-family: Aliens; src: url('aliens.ttf'); }


    </style>
</head>

<body>
  <div id="hd">
    <?php include('header.php') ?>
  </div>

  <div id="body">
    <div class="colonne-gauche">
      <!-- <h3 style="margin-left:20px;">Publicité</h3> -->
        <img src="../pub1.jpg" alt="1er publicité" style="height:600px; width: 150%;">
      </div>

    <div class="colonne-centre">
      <div class="LeProduit">


      <div class="imgProduit">
          <img src="<?=$route?>" alt="Pas d'image trouvé" style="height:400px; weight: 400px; margin-top: 70px; margin-left:5px;">
      </div>

      <div class="lesInfos" >

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
          <a href="../controlleur/MettreEnFavoris.php?idProduit=<?=$Produit->id ?>&action=delete">Retirer Favoris</a>
          <?php else: ?>
            <a href="../controlleur/MettreEnFavoris.php?idProduit=<?=$Produit->id ?>&action=add">Ajout Favoris</a>

        <?php endif; ?>
      </div>
    </div>




    </div>
    <div class="colonne-droite">
      <h3>Publicité</h3>
      <img src="../pub1.jpg" alt="1er publicité" style="height:600px; width: 150%;">
    </div>
  </div>

<div id="ft">
<?php include('footer.php') ?>
</div>
</body>

</html>
