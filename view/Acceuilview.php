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

                <?php endforeach; ?>
              </select>
              <br>
                  <br>
                  <label>Prix</label><br>
                  <?php
                  echo '<select name="prix">',"\n";
                  echo '<option value = "100000000" selected="selected"> tous les prix</option>';
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

                    <?php endforeach; ?>
                  </select>
                  <br><br>
                  <label for="dispo">Disponible</label>
                  <input type="checkbox" name="dispo" value="Oui" id=dispo>
                  <p><input type="submit" value="Valider"></p> <br>
            </fieldset>
            </form>
          </div>

        <div class="colonne-centre">

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
          <h3>Publicité</h3>
            <img src="../pub1.jpg" alt="1er publicité" style="height:600px; width: 150%;">
            </div>

            </div>

      </div>

      <div id="ft">
      <?php include('footer.php') ?>
      </div>

    </div>
</div>
</body>

</html>
