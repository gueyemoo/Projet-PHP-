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
       <center>
          <div>
          <form class="connexion" action="../controlleur/Connexion.php" method="post">
            <label for="Pseudo">Pseudo </label>
            <input type="text" name="pseudo" value="" id="Pseudo">
          </div>
          <div
            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" value="" id="mdp">
          </div>
            <p><input type="submit" value="Valider"></p> <br>
          </form>
        </center>

        </div>

        <div class="colonne-droite">
          <?php include('asidePub.php') ?>
      </div>
  </div>

  <div id="ft">
  <?php include('footer.php') ?>
  </div>
</div>
</body>

</html>
