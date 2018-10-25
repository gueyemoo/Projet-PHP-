<!DOCTYPE html>
<html>
<head>
<title>VMS SKI - Produit</title>
<meta http-equiv="content-type" content="text/html; charset =iso-8859-1">
<link rel="stylesheet" type="text/css" href="view/style.css">
<style>
      @font-face { font-family: Vogue; src: url('Vogue.ttf'); }
      @font-face { font-family: Office; src: url('Office.otf'); }
      @font-face { font-family: Aliens; src: url('aliens.ttf'); }


    </style>
</head>

<body>
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
      <form method="post" action="filtreMarque">
 <p>
    Marque :<br />
     <input type="checkbox" name="Lacoste" id="Lacoste" /> <label for="Lacoste">Lacoste</label><br />
     <input type="checkbox" name="Nike" id="Nike" /> <label for="Nike">Nike</label><br />
       <input type="checkbox" name="Adidas" id="Adidas" /> <label for="Adidas">Adidas</label><br />
     <input type="checkbox" name="Under Armor" id="Under Armor" /> <label for="Under Armor">Under Armor</label>
 </p>
</form>

<form method="post" action="filtreDisponibilite">
<p>
Disponibilite :<br />
<input type="checkbox" name="Disponibilite" id="Disponibilite" /> <label for="Lacoste">Voir aussi les articles sans stock</label><br />
</p>
</form>

<form method="post" action="filtreVendeur">
<p>
Vendeur :<br />
<input type="checkbox" name="VendeurV" id="VendeurV" /> <label for="VendeurV">Vincent</label><br />
<input type="checkbox" name="VendeurM" id="VendeurM" /> <label for="VendeurM">Mohamed</label><br />
<input type="checkbox" name="VendeurS" id="VendeurS" /> <label for="VendeurS">Sacha</label><br />


</p>
</form>

<fieldset>
  <legend><p>Prix</p></legend>
  <input type="number" id="prixMin" name="prixMin" placeholder="Min: 10" min="0" max="5000" style="width:90px;"/> <br> <br>
  <input type="number" id="prixMax" name="prixMax" placeholder="Max: 5000" min="0" max="5000" style="width: 90px;"/>
</fieldset>

      </div>

    <div class="colonne-centre">
      <div class="Produit">
        <img src="test.jpg" alt="le produit">
        <div class="Info-Produit">
          <p> SKI ALPIN TAILLE 8 </p> &nbsp;
          <p>  500 $ <p>
        </div>
      </div>
<!-- ////////////////////////////////// -->
        <div class="Produit">
          <a href="ProduitDetail.php" style="text-decoration:none"> <img src="test.jpg" alt="le produit"> </a>
          <div class="Info-Produit">
            <p> SKI NIPLA </p> &nbsp;
            <p>  1500 $ <p>
          </div>
        </div>
        <!-- ////////////////////////////////// -->
                <div class="Produit">
                  <img src="test.jpg" alt="le produit">
                  <div class="Info-Produit">
                    <p> SKI LANIP </p> &nbsp;
                    <p>  800 $ <p>
                  </div>
                </div>
                <!-- ////////////////////////////////// -->
                        <div class="Produit">
                          <img src="test.jpg" alt="le produit">
                          <div class="Info-Produit">
                            <p> SKI NPLLA </p> &nbsp;
                            <p>  100 $ <p>
                          </div>
                        </div>
                        <!-- ////////////////////////////////// -->
                                <div class="Produit">
                                  <img src="test.jpg" alt="le produit">
                                  <div class="Info-Produit">
                                    <p> SKI INPLA </p> &nbsp;
                                    <p>  5500 $ <p>
                                  </div>
                                </div>
                                <!-- ////////////////////////////////// -->
                                        <div class="Produit">
                                          <img src="test.jpg" alt="le produit">
                                          <div class="Info-Produit">
                                            <p> SKI PLANI </p> &nbsp;
                                            <p>  10500 $ <p>
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
