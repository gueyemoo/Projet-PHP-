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

  function getTaille():array{
    $requ="SELECT DISTINCT taille FROM Produit WHERE taille >= 132 AND taille <= 190 ORDER BY taille";
    $res = $this->db->query($requ);
    $result = $res->fetchAll();
    $retour = array();
    foreach ($result as $key => $value) {
      $retour[]=$value['taille'];
    }
    return $retour;
  }

  function nb():int{
    $requ="SELECT count(*) FROM Produit";
    $res = $this->db->query($requ);
    $result = $res->fetch();
    return $result[0];
  }

}
$config = parse_ini_file('../config/config.ini');
$DAO= new ProduitDAO($config['database_path']);

?>
