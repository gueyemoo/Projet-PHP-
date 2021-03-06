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
          <form class="" action="Acceuil.php" method="get">

            <fieldset>
              <legend>Filtre</legend>
              <label >Marque</label><br>
              <select name = "marque">
                <option value="0" selected>Toutes les marques</option>
                <?php foreach ($marques as $m):?>
                    <option value="<?=$m?>"><?= $m ?></option>
                    <!-- on affiche les marques pour le choix des filtres-->
                <?php endforeach; ?>
              </select>
              <br>
                  <br>
                  <label>Prix</label><br>
                  <?php
                  echo '<select name="prix">',"\n";
                  echo '<option value = "100000000" selected="selected"> tous les prix</option>';
                  //On affiche les différents filtres pour le prix
                  foreach ($listePrix as $affiche => $prix)
                  {
                        echo "\t".'<option value="'.$prix .'"'.'>'. $affiche .'</option>'."\n";
                  }
                  echo '</select>',"\n";
                  ?>
                  <br>
                  <br>
                  <label>Vendeur</label><br>
                  <select name = "vendeur">
                    <option value="0" selected>Tous les vendeurs</option>
                    <?php foreach ($vendeur as $v):?>
                        <option value="<?=$v?>"><?= $v ?></option>
                        <!-- on affiche les vendeurs pour le choix des filtres -->
                    <?php endforeach; ?>
                  </select>
                  <br><br>
                  <label for="dispo">Disponible</label>
                  <input type="checkbox" name="dispo" value="Oui" id=dispo>
                  <!-- Checkbox pour que le client choisissent si il veut voir que les produits Disponible -->
                  <p><input type="submit" value="Valider"></p> <br>
            </fieldset>
            </form>
          </div>

        <div class="colonne-centre">

          <!-- On affiche tout les produits -->
          <?php foreach ($centre as $a) : ?>
            <div class="Produit">
              <a href="ProduitDetailctrl.php?id=<?=$a->id?>">
              <img src="<?='../modele/data/Images/'.$a->cover; ?>"  alt=<?=$a->reference?> style="height:185px; weight:185px;">
              </a>

                  <h4 style="width:150px; height: 25px;"><?=$a->reference ?></h4>&nbsp;
                </div>
            <?php endforeach; ?>

        </div>


        <div class="colonne-droite">
          <!-- On inclus les publicité interactive -->
          <?php include('asidePub.php') ?>
        </div>

            </div>

      </div>

      <!-- On inclus le footer -->
      <div id="ft">
      <?php include('footer.php') ?>
      </div>

    </div>
</div>
</body>

</html>
