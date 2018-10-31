<?php
$config = parse_ini_file('../config/config.ini');
//var_dump($config);
require_once('Produitclass.php');
class ProduitDAO
{
  private $db;

  function __construct(){
    try {
      $config = parse_ini_file('../config/config.ini');

      $this->db = new PDO('sqlite:'.$config['database_path']);
    } catch (Exception $e) {
      print("Erreur: $e");
    }
  }

function read(int $id) : Produit{
  $req = "SELECT * FROM Produit WHERE id = '$id'";
  $res = $this->db->query($req);
  $result = $res->fetch();
  return $result;
}

  function get(int $id):Produit{
    $requ="SELECT * FROM Produit WHERE id='$id'";
    $res = $this->db->query($requ);
    $result = $res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Produit");

    return $result[0];
  }

  function getMarques():array{
    $requ="SELECT DISTINCT marque FROM Produit ORDER BY marque";
    $res = $this->db->query($requ);
    $result = $res->fetchAll();
    $retour = array();
    foreach ($result as $key => $value) {
      $retour[]=$value['marque'];
    }
    return $retour;
  }

  function getVendeur():array{
    $requ="SELECT DISTINCT vendeur FROM Produit ORDER BY vendeur";
    $res = $this->db->query($requ);
    $result = $res->fetchAll();
    $retour = array();
    foreach ($result as $key => $value) {
      $retour[]=$value['vendeur'];
    }
    return $retour;
  }


  function nb():int{
    $requ="SELECT count(*) FROM Produit";
    $res = $this->db->query($requ);
    $result = $res->fetch();
    return $result[0];
  }

  function getCategorie(string $cat):array{
    $requ="SELECT * FROM Produit WHERE categorie = '$cat'";
    $res = $this->db->query($requ);
    $result = $res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Produit");
    return $result;
  }

  function getArticleFiltre(int $nbArticle , float $prix, string $marque, string $dispo, string $vendeur){
    if(!isset($prix)){
      $prix=1000000000;
    }

    if(!$marque){
      $requeteMarque=" ";
    }else {
      $requeteMarque=" and marque = '$marque' ";
    }

    if($dispo==''){
      $dispo = "'Oui' or 'Non'";
      $requeteDispo='';
    }else{
      $requeteDispo= "and disponibilite ='$dispo' ";

    }

    $requetePrix= " and prix<=$prix ";

    if(!$vendeur){
      $requeteVendeur=" ";
    }else {
      $requeteVendeur=" and vendeur = '$vendeur' ";
    }



    $requ="SELECT * FROM Produit WHERE 1 ".$requeteMarque.$requeteDispo.$requetePrix.$requeteVendeur;

    //var_dump($requ); // pour voir la requete effectuer par les filtres
    $res = $this->db->query($requ);
    $result = $res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Produit");
    return $result;


  }


  function getListeObjetPartielle(int $id):array
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

}
$config = parse_ini_file('../config/config.ini');
$DAO= new ProduitDAO($config['database_path']);


?>
