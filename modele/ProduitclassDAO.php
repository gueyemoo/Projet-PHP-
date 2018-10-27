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
    return $result;
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

  

}
$config = parse_ini_file('../config/config.ini');
$DAO= new ProduitDAO($config['database_path']);


?>
