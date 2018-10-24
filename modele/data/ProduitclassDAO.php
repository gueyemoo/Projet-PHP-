<?php
$config = parse_ini_file('../config/config.ini');
var_dump($config);
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


  function get(int $id):Produit{
    $requ="SELECT * FROM produit WHERE id='$id'";
    $res = $this->db->query($requ);
    $result = $res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Produit");

    return $result[0];
  }

  function nb():int{
    $requ="SELECT count(*) FROM produit";
    $res = $this->db->query($requ);
    $result = $res->fetch();
    return $result[0];
  }

}
//$jukebox = new MusicDAO(); doit être fait dans le constructeur

?>
