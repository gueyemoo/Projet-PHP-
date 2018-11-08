<!DOCTYPE html>
<html>

<head>
<title>VMS SKI</title>
<meta http-equiv="content-type" content="text/html; charset =iso-8859-1">
<link rel="stylesheet" type="text/css" href="../view/style.css">
<style>
      @font-face { font-family: Vogue; src: url('Vogue.ttf'); }
      @font-face { font-family: Office; src: url('Office.otf'); }
      @font-face { font-family: Aliens; src: url('aliens.ttf'); }


    </style>
</head>

<body>

  <div id="page" class="A1">

    <div id="hd">
      <!-- On inclus l'en-tête -->
      <?php include('header.php') ?>
    </div>

      <div id="body">
        <div class="colonne-gauche">
          <!-- On affiche une publicité (parmis les 4) au hasard   -->
          <?php include('asidePub.php') ?>
          </div>

        <div class="colonne-centre">
          <!-- On affiche les produits de cette categorie -->
          <?php foreach ($centre as $a) : ?>
            <div class="Produit">
              <a href="ProduitDetailctrl.php?id=<?=$a->id?>">
              <img src="<?='../modele/data/Images/'.$a->cover; ?>"  alt=<?=$a->reference?> style="height:185px; weight:185px;">
              </a>

                  <h4 style="width:150px; height: 25px;"><?=$a->reference ?></h4>&nbsp;
                </div>
            <?php endforeach; ?>
            <center>
              <!-- Systeme de pagination -->
          <?php if (!array_key_exists($id-10,$categorie) && !array_key_exists($id+10,$categorie)){ ?>
          <?php } elseif (!array_key_exists($id-10,$categorie)) {?>
             <a href="Categorie.php?id=<?=$id+10?>&cat=<?=$categorie[0]->categorie?>" > <img src="../modele/data/Bouton/droit.png" alt="image-fleche-de-droite"> </a>
          <?php } elseif (!array_key_exists($id+10,$categorie)) { ?>
            <a href="Categorie.php?id=<?=$id-10?>&cat=<?=$categorie[0]->categorie?>" > <img src="../modele/data/Bouton/gauche.png" alt="image-fleche-de-gauche"> </a>
          <?php } else { ?>
          <a href="Categorie.php?id=<?=$id-10?>&cat=<?=$categorie[0]->categorie?>" > <img src="../modele/data/Bouton/gauche.png" alt="image-fleche-de-gauche"> </a>
                   <a href="Categorie.php?id=<?=$id+10?>&cat=<?=$categorie[0]->categorie?>"> <img src="../modele/data/Bouton/droit.png" alt="image-fleche-de-droite"> </a>
          <?php } ?>
        </center>
        </div>

        <div class="colonne-droite">
          <!-- On affiche une publicité (parmis les 4) au hasard   -->
          <?php include('asidePub.php') ?>
      </div>
  </div>

  <div id="ft">
  <?php include('footer.php') ?>
  </div>
</body>

</html>
