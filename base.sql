DROP DATABASE IF EXISTS universite;
CREATE DATABASE universite;
USE universite;

CREATE TABLE etudiant (
  idetudiant INT(5) NOT NULL AUTO_INCREMENT,
  login VARCHAR(50),
  mdp VARCHAR(50),
  nom VARCHAR(50),
  prenom VARCHAR(50),
  email Varchar(50),
  telephone INT(10),
  PRIMARY KEY (idetudiant)
);

CREATE TABLE professeur (
  idprofesseur INT(5) NOT NULL AUTO_INCREMENT,
  login VARCHAR(50),
  mdp VARCHAR(50),
  nom VARCHAR(50),
  prenom VARCHAR(50),
  email Varchar(50),
  telephone INT(10),
  PRIMARY KEY (idprofesseur)
);

CREATE TABLE location (
  idlocation INT(5) NOT NULL AUTO_INCREMENT,
  nom_equipement VARCHAR (50),
  date_debut DATE,
  date_fin DATE,
  idetudiant INT(5) NOT NULL,
  PRIMARY KEY (idlocation),
  FOREIGN KEY (idetudiant) REFERENCES etudiant(idetudiant)
);

INSERT INTO etudiant VALUES
(null, "eleve", "sorbonne", "Pomart", "Thomas", "pomart.thomas1@gmail.com", "0631390386");


CREATE VIEW emprunt AS (
  SELECT e.nom AS nom_etudiant, e.prenom AS prenom_etudiant, e.email, e.telephone, l.nom_equipement AS nom_equipement,
  l.date_debut, l.date_fin
  FROM etudiant e, location l
  WHERE e.idetudiant = l.idetudiant
);