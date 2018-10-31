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
      <div id="header"><h1> VMS SKI
        <img src="../vms50.png" alt="logo"/>
      </h1>


        <div class="recherche_p">

          <form action="/search" id="searchthis" method="get">
            <input id="search" name="q" type="text" placeholder="Que souhaitez vous rechercher ?" />
            <!-- <input id="search-btn" type="submit" value="Rechercher" /> -->
            <a href="#"><img src="../rechercher38.png" alt= "rechercher"></a>
           </form>
       </div>

      </div>

    <div id="BarreNav">
      <ul id="nav">
         <li id="nav-home"><a href="Acceuil.php">Accueil</a></li>
         <li id="nav-ski"><a href="Categorie.php?cat=ski">Ski</a></li>
         <li id="nav-snow"><a href="Categorie.php?cat=Snowboard">Snowboard</a></li>
         <li id="nav-acc"><a href="Categorie.php?cat=Accessoires">Accessoires</a></li>
         <li id="nav-vet"><a href="Categorie.php?cat=Vetements">Vetements</a></li>
      </ul>

    </div>

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
          <?php switch ($id) { case 1 : ?>
            <center> <a href="Acceuil.php?id=<?=$id+10?> " > <label> Page suivante > </label> </a>
          <?php break; case 10 : ?>
            <center> <a href="Acceuil.php?id=<?=$id-9?>" > <label> < Page précédente  </label> </a>
                     <a href="Acceuil.php?id=<?=$id+10?>"> <label> Page suivante > </label> </a> </center>
          <?php break; case 91 : ?>
            <center> <a href="Acceuil.php?id=<?=$id-10?>" > <label> < Page précédente  </label> </a>
          <?php break; default : ?>
          <center> <a href="Acceuil.php?id=<?=$id-10?>" > <label> < Page précédente  </label> </a>
                   <a href="Acceuil.php?id=<?=$id+10?>"> <label> Page suivante > </label> </a> </center>
          <?php break;} ?>
        </div>


        <div class="colonne-droite">
          <h3>Publicité</h3>
            <img src="../pub1.jpg" alt="1er publicité" style="height:600px; width: 150%;">
            </div>

            </div>

      </div>

    <div id="ft">
      <div id="footer">
        <img src="../iut.png" alt="logo"/>
        <h5>© VMS SKI</h5>
      </div>

    </div>
</div>
</body>

</html>
