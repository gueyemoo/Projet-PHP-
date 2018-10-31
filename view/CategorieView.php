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
          <!-- <h3 style="margin-left:20px;">Publicité</h3> -->
            <img src="../pub1.jpg" alt="1er publicité" style="height:600px; width: 150%;">
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
             <img src="../pub2.jpg" alt="2ieme publicité" style="height:600px; width: 150%;">
      </div>
  </div>

      <div id="ft">
        <div id="footer">
          <img src="../iut.png" alt="logo"/>
          <h5>© VMS SKI</h5>
        </div>
     </div>
</body>

</html>
