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
      <?php include('header.php') ?>
    </div>

      <div id="body">
        <div class="colonne-gauche">
          <?php include('asidePub.php') ?>
        </div>

        <div class="colonne-centre">
          <!-- On affiche les articles favoris du client connecter  -->
          <?php foreach ($LesArticlesFavoris as $a) : ?>
            <div class="Produit">
              <a href="ProduitDetailctrl.php?id=<?=$a->id?>">
              <img src="<?='../modele/data/Images/'.$a->cover; ?>"  alt=<?=$a->reference?> style="height:185px; weight:185px;">
              </a>

                  <h4 style="width:150px; height: 25px;"><?=$a->reference ?></h4>&nbsp;
                </div>
            <?php endforeach; ?>
          <?php if (!array_key_exists($id-10,$categorie) && !array_key_exists($id+10,$categorie)){ ?>
          <?php } elseif (!array_key_exists($id-10,$categorie)) {?>
            <center> <a href="Categorie.php?id=<?=$id+10?>&cat=<?=$categorie[0]->categorie?>" > <label> Page suivante > </label> </a>
          <?php } elseif (!array_key_exists($id+10,$categorie)) { ?>
            <center> <a href="Categorie.php?id=<?=$id-10?>&cat=<?=$categorie[0]->categorie?>" > <label> < Page précédente  </label> </a>
          <?php } else { ?>
          <center> <a href="Categorie.php?id=<?=$id-10?>&cat=<?=$categorie[0]->categorie?>" > <label> < Page précédente  </label> </a>
                   <a href="Categorie.php?id=<?=$id+10?>&cat=<?=$categorie[0]->categorie?>"> <label> Page suivante > </label> </a> </center>
          <?php } ?>
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
