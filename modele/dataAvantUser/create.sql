DROP TABLE if exists Produit;
CREATE TABLE Produit (
      id INTEGER PRIMARY KEY,
      categorie STRING,
      type STRING,
      genre STRING,
      prix FLOAT,
      marque STRING,
      reference STRING ,
      taille STRING,
      vendeur STRING,
      disponibilite STRING,
      cover STRING
);
DROP TABLE if exists Client;
CREATE TABLE Client (
    id INTEGER PRIMARY KEY,
    pseudo  STRING UNIQUE,
    mdp STRING
);

DROP TABLE if exists Favoris;
CREATE TABLE Favoris (
  idClient INTEGER,
  idProduit INTEGER,

  PRIMARY KEY(idClient,idProduit),
  FOREIGN KEY(idClient) REFERENCES Client(id),
  FOREIGN KEY(idProduit) REFERENCES Produit(id)
);


.separator |
.import produitDB.txt Produit
.import clientDB.txt Client
