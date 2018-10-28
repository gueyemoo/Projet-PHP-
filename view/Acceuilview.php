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
         <li id="nav-about"><a href="#">À propos</a></li>
         <li id="nav-about"><a href="Produit.php">Test </a></li>

      </ul>

    </div>

    </div>

      <div id="body">
        <div class="colonne-gauche">
          <form class="" action="Acceuil.php" method="get">

            <fieldset>
              <legend>Filtre</legend>
              <label>Marque</label><br>
              <select>
                <?php foreach ($marques as $m => $value):?>
                    <option> <?= $value[0]?>
                <?php endforeach; ?>
              </select>
                  <br>
                  <label>Taille</label><br>
                  <?php
                  $selected = '';
                  echo '<select name="taille">',"\n";
                  echo '<option selected="selected"> </option>';
                  foreach ($tailles as $t => $taille)
                  {
                        echo "\t".'<option value="'.$taille .'"'. $selected .'>'. $taille .'</option>'."\n";
                        $selected='';
                  }
                  echo '</select>',"\n";
                  ?>



                  <p><input type="submit" value="Valider"></p>
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
           <h2>Publicité</h2>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

            </div>

      </div>

    <div id="ft">
      <div id="footer"> FOOTER</div>
    </div>
</div>
</body>

</html>
