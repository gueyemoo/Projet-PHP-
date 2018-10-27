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
         <li id="nav-ski"><a href="#">Ski</a></li>
         <li id="nav-snow"><a href="#">Snowboard</a></li>
         <li id="nav-acc"><a href="#">Accessoires</a></li>
         <li id="nav-vet"><a href="#">Vetements</a></li>
         <li id="nav-about"><a href="#">A propos</a></li>
         <li id="nav-about"><a href="Produit.php">Test </a></li>

      </ul>

    </div>

    </div>
  <div id="body">
    <div class="colonne-gauche">
<h2>Promotion</h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
        <p>Prix: <?=$Produit->prix  ?> </p>
      </div>
    </div>
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
</body>

</html>
