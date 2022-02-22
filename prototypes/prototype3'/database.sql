-- Création de la base de données
create database GestionEmploye;
use GestionEmploye;

-- Création de la table employé
CREATE TABLE Employes (
  Id int NOT NULL auto_increment,
  Nom varchar(255) NOT NULL,
  Prenom varchar(255) NOT NULL,
  DateNaissance date NOT NULL,
  PRIMARY KEY  (Id)
);
