<?php
$config = parse_ini_file('../config/config.ini');
var_dump($config);
require_once('D:\Cours\PHP\Projet-PHP-\modele\Produitclass.php');
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

  function getId(int $id):Produit{
    $requ="SELECT * FROM Produit WHERE id='$id'";
    $res = $this->db->query($requ);
    $result = $res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Produit");

    return $result[0];
  }

  function getMarques():Produit{
    $requ="SELECT DISTINCT marque FROM Produit";
    $res = $this->db->query($requ);
    $result = $res->fetch();
    return $result;
  }

  function nb():int{
    $requ="SELECT count(*) FROM Produit";
    $res = $this->db->query($requ);
    $result = $res->fetch();
    return $result[0];
  }

}
//$jukebox = new MusicDAO(); doit être fait dans le constructeur

?>
