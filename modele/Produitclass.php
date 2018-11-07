<?php
class Produit
{
  public $id;
  public $categorie;
  public $type;
  public $genre;
  public $prix;
  public $marque;
  public $reference;
  public $taille;
  public $vendeur;
  public $disponibilite;
  public $cover;

  function __construct(int $id=0, string $categorie="", string $type="",string $genre="", float $prix=NULL, string $marque="",
string $reference="", string $taille="", string $vendeur="", string $disponibilite="", string $cover=""){
    $this->id = $id;
    $this->categorie=$categorie;
    $this->type=$type;
    $this->genre=$genre;
    $this->prix=$prix;
    $this->marque=$marque;
    $this->reference=$reference;
    $this->taille=$taille;
    $this->vendeur=$vendeur;
    $this->disponibilite=$disponibilite;
    $this->cover=$cover;
  }
}


/**
 *
 */
class Client
{

  function __construct()
  {
    // code...
  }
}

?>
