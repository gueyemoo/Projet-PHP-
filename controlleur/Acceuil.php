<?php
  require_once('ProduitclassDAO.php');

  $dao = new DAO();

  $promos = array(
    //mettre références des objets en promo
  )

  $centre = array();

  foreach ($promos as $reference => $value) {

    $a = $dao->read($reference,$value);
    $centre[] = $a; 
  }


 ?>



<!DOCTYPE html>
<html>

<head>
<title>VMS SKI - Acceuil</title>
<meta http-equiv="content-type" content="text/html; charset =iso-8859-1">
<link rel="stylesheet" type="text/css" href="style.css">
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
        <img src="vms50.png" alt="logo"/>
      </h1>


        <div class="recherche_p">

          <form action="/search" id="searchthis" method="get">
            <input id="search" name="q" type="text" placeholder="Que souhaitez vous rechercher ?" />
            <!-- <input id="search-btn" type="submit" value="Rechercher" /> -->
            <a href="#"><img src="rechercher38.png" alt= "rechercher"></a>
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
            CONTENU CENTRE
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
