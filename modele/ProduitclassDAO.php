<?php
$config = parse_ini_file('../config/config.ini');
require_once('Produitclass.php');//On inclus la classe du produit et du client

class ProduitDAO
{
  private $db;

  function __construct(){ //Constructeur du DAO
    try {
      $config = parse_ini_file('../config/config.ini'); // Récupération des données de configuration


      $this->db = new PDO('sqlite:'.$config['database_path']);
    } catch (Exception $e) {
      print("Erreur: $e");
    }
  }

  function read(int $id) : Produit{//On verifie que l'identifiant existe
    $req = "SELECT * FROM Produit WHERE id = '$id'";
    $res = $this->db->query($req);
    $result = $res->fetch();
    return $result;
  }

  function get(int $id):Produit{//On récupere l'identifiant
    $requ="SELECT * FROM Produit WHERE id='$id'";
    $res = $this->db->query($requ);
    $result = $res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Produit");

    return $result[0];
  }

  function getMarques():array{//On récupere toutes les marques avec cette fonctions
    $requ="SELECT DISTINCT marque FROM Produit ORDER BY marque";
    $res = $this->db->query($requ);
    $result = $res->fetchAll();
    $retour = array();
    foreach ($result as $key => $value) {
      $retour[]=$value['marque'];
    }
    return $retour;
  }

  function getVendeur():array{//On récupere tous les vendeurs avec cette fonctions
    $requ="SELECT DISTINCT vendeur FROM Produit ORDER BY vendeur";
    $res = $this->db->query($requ);
    $result = $res->fetchAll();
    $retour = array();
    foreach ($result as $key => $value) {
      $retour[]=$value['vendeur'];
    }
    return $retour;
  }


  function nb():int{//Cette fonction nous permets de compter tout les produits
    $requ="SELECT count(*) FROM Produit";
    $res = $this->db->query($requ);
    $result = $res->fetch();
    return $result[0];
  }

  function getCategorie(string $cat):array{//On récupere la catégorie choisie par le client pour n'afficher que celle ci
    $requ="SELECT * FROM Produit WHERE categorie = '$cat'";
    $res = $this->db->query($requ);
    $result = $res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Produit");
    return $result;
  }

  function getArticleFiltre(int $nbArticle , float $prix, string $marque, string $dispo, string $vendeur){//Cette fonction applique les filtres saisi par le client grace a differente requête SQL
    if(!isset($prix)){
      $prix=1000000000; // Si le client ne choisit pas de filtre prix celle ci à cette valeur par défaut pour inclure tout les produits (nous somme désolé ce n'est pas très jollie..)
    }

    if(!$marque){
      $requeteMarque=" "; // Si le client ne choisit pas de filtre marque celle ci est vide
    }else {
      $requeteMarque=" and marque = '$marque' "; //Sinon on applique le filtre avec la marque choisit
    }

    if($dispo==''){
      $dispo = "'Oui' or 'Non'"; // Si le client ne choisit pas le filtre disponibilité celle ci est est vide de base
      $requeteDispo='';
    }else{
      $requeteDispo= "and disponibilite ='$dispo' "; //Sinon on applique le filtre avec oui et non (checkbox)

    }

    $requetePrix= " and prix<=$prix "; //Si le client choisit le filtre du prix on applique cette requete en SQL

    if(!$vendeur){
      $requeteVendeur=" "; //Si le client ne choisit pas de filtre vendeur celui ci est vide par défaut
    }else {
      $requeteVendeur=" and vendeur = '$vendeur' "; //Si le client choisit le filtre vendeur on applique une requete SQL avec le vendeur choisit
    }



    $requ="SELECT * FROM Produit WHERE 1 ".$requeteMarque.$requeteDispo.$requetePrix.$requeteVendeur;//Requete SQL appliqué pour les filtres
    //var_dump($requ); // pour voir la requete effectuer par les filtres
    $res = $this->db->query($requ);
    $result = $res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Produit");
    return $result;
  }


  function getListeObjetPartielle(int $id):array //Cette fonction gère le systeme de pagination
  {
    if($id == 1 )
    {
      $requ="SELECT * FROM Produit WHERE id < 20";
      $res = $this->db->query($requ);
      $result = $res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Produit");
      return $result;
    }
    elseif ($id == 91)
    {
      $requ="SELECT * FROM Produit WHERE id < 100 and id >80";
      $res = $this->db->query($requ);
      $result = $res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Produit");
      return $result;
    }
    else
    {
      $requ="SELECT * FROM Produit WHERE id < $id+10 and id > $id-10";
      $res = $this->db->query($requ);
      $result = $res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Produit");
      return $result;
    }
  }


  function verifUser(string $pseudo, string $mdp):bool{// Cette fonction verifie que l'utilisateuer a saisi le bon pseudo et mot de passe
    $requ="SELECT count(*) FROM Client WHERE pseudo='$pseudo' and mdp='$mdp'";
    $res = $this->db->query($requ);
    $result = $res->fetch();

    if($result) {    //Si Pseudo et mdp correct
      $requ2="SELECT * FROM Client WHERE pseudo='$pseudo' and mdp='$mdp'";
      $res2 = $this->db->query($requ2);
      $LeClient = $res2->fetchAll(PDO::FETCH_CLASS, "Client");

      $_SESSION['connexion']=$LeClient[0];
      $_SESSION['connecter']=true;

    }
    return $result['count(*)'];
  }

  function getFavoris(int $id):array{//Cette fonction retourne tout les favoris
    $requ="SELECT * FROM Produit WHERE id in (select idProduit from Favoris where idClient=$id)";
    $res = $this->db->query($requ);
    $result = $res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Produit");
    return $result;
  }

  function ajoutFavoris(int $idClient, int $idProduit):bool{//Cette fonction ajoute a la liste des favoris
    $requ="SELECT count(*) FROM Produit WHERE id=$idProduit";
    $res = $this->db->query($requ);
    $result = $res->fetch()['count(*)'];
    if($result){//Si le produit existe on l'ajoute
      $requ2="INSERT INTO Favoris VALUES($idClient,$idProduit) ";
      $res2 = $this->db->query($requ2);
      $result2 = $res->fetch();
    }
    return $result2;
  }


  // function ajoutClient(string $pseudo, string $mdp)
  // {
  //     $requeteSQL = 'SELECT max(id) FROM client';
  //     $reponseDeRequete=$this->db->query($requeteSQL);
  //     $max= $reponseDeRequete->fetch()[0];
  //     $idClient= intval($max)+1;
  //
  //   $requ2="INSERT INTO Client VALUES($idClient,$pseudo,$mdp)";
  //   var_dump($requ2);
  //   $res2=$this->db->query($requ2);
  //   $result2= $res2->fetch();
  //   var_dump($result2);
  // }

  function deleteFavoris(int $idClient, int $idProduit):bool{//Cette fonctionne supprime de la liste des favoris
    $requ="DELETE FROM Favoris WHERE idProduit=$idProduit AND idClient=$idClient";
    $res = $this->db->query($requ);
    $result = $res->fetch();


    return $result;
  }

  function isFavoris(int $idClient, int $idProduit):bool{//Cette fonction vérifie que le produit est dans la liste des Favoris
    $requ="SELECT count(*) FROM Favoris WHERE idClient=$idClient AND idProduit=$idProduit";
    $res = $this->db->query($requ);
    $result = $res->fetch();
    return $result['count(*)'];
  }


}//fin de classe
$config = parse_ini_file('../config/config.ini');
$DAO= new ProduitDAO($config['database_path']);
session_start();//On lance la session

$idClient=$_SESSION['connexion']->id??0;

?>
