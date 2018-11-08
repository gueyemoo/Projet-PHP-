<div id="header">
  <!-- Header de toute les vues -->
  <h1> VMS SKI
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
    <li id="nav-home"><a href="../controlleur/Acceuil.php">Accueil</a></li>
    <li id="nav-ski"><a href="../controlleur/Categorie.php?cat=ski">Ski</a></li>
    <li id="nav-snow"><a href="../controlleur/Categorie.php?cat=Snowboard">Snowboard</a></li>
    <li id="nav-acc"><a href="../controlleur/Categorie.php?cat=Accessoires">Accessoires</a></li>
    <li id="nav-vet"><a href="../controlleur/Categorie.php?cat=Vetements">Vetements</a></li>
  </ul>
  <ul>

    <?php if ($_SESSION['connecter']->id!=$idClient): ?>

      <!-- On verifie que l'utilisateur est bien connecter pour afficher "se deconneter" et "favoris" -->
      <li id="nav-vet"><a href="../controlleur/Favoris.php?id=<?php print(($_SESSION['connexion'])->id) ?>">Favoris</a></li>
      <li id="nav-vet"><a href="../controlleur/Deconnexion.php">Se déconnecter</a></li>

    <?php else: ?>
      <!-- Sinon on affiche Se connecter -->
      <li id="nav-vet"><a href="../controlleur/Connexion.php">Se Connecter</a></li>
    <?php endif; ?>
  </ul>


</div>
