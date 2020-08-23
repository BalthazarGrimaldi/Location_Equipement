<?php
class Model {
  private $unPdo;
  public function __construct($server, $bdd, $user, $mdp) {
    $this->unPdo = null;
      try {
      // connection a la base de donnee en utilisant PDO
      $this->unPdo = new PDO ("mysql:host=".$server.";dbname=".$bdd,$user,$mdp);
    }
    catch(PDOExeption $exp) {
      echo "Erreur de connection à la base de données.";

      // afficher le message d'erreur php
      echo $exp->getMessage();
    }
  }

  public function selectAll() {
      if($this->unPdo != null) {
      // selection de toutes les données
        $requete="select * from location;";
      // preparation de la requete avant execution
      $select = $this->unPdo->prepare($requete);
      // exection de la requete
      $select->execute();

      // extraction des données
      $result = $select->fetchAll();
    }
    return $result;
  }
  public function insertLocation($tab){
    if($this->unPdo!=null){
      $requete="insert into location values(null,:nom_equipement, :date_debut, :date_fin, :nom_utilisateur, :prenom_utilisateur)";
      $donnees=array(":nom_equipement"=>$tab['nom_equipement'], ":date_debut"=>$tab['date_debut'], ":date_fin"=>$tab['date_fin'], ":nom_utilisateur"=>$tab['nom_utilisateur'], ":prenom_utilisateur"=>$tab['prenom_utilisateur']);
      $insert=$this->unPdo->prepare($requete);
      $insert->execute($donnees);
    }
  }


  // supprimer données
  public function deleteLocation ($idlocation) {
    if ($this->unPdo != null) {
      $requete = "delete from location where idlocation = ".$idlocation.";";
      $donnees = array(":idlocation"=>$idlocation);
      $delete = $this->unPdo->prepare($requete);
      $delete->execute($donnees);
    }
  }

  public function verifconnextion ($login, $mdp) {
    if ($this->unPdo != null) {
      $requete = "select * from etudiant where login = :login and mdp = :mdp;";
      $donnees = array(":login"=>$login, ":mdp"=>$mdp);
      $select = $this->unPdo->prepare($requete);
      $select->execute($donnees);
      $result = $select->fetch();
      return $result;
    }
  }

  public function redirect() {
    header('../gestionevenement.php');
  }

  public function insertProfesseur($tab){
    if($this->unPdo!=null){
      $requete="insert into professeur values(null,:login, :mdp, :nom, :prenom, :email, :telephone)";
      $donnees=array(":login"=>$tab['login'], ":mdp"=>$tab['mdp'], ":nom"=>$tab['nom'], ":prenom"=>$tab['prenom'], ":email"=>$tab['email'], ":telephone"=>$tab['telephone']);
      $insert=$this->unPdo->prepare($requete);
      $insert->execute($donnees);
    }
  }


  public function deleteProfesseur($idprofesseur){
    if($this->unPdo!= null){
      $requete="delete from professeur where idprofesseur = :idprofesseur;";
      $donnees=array(":idprofesseur"=>$idprofesseur);
      $delete=$this->unPdo->prepare($requete);
      $delete->execute($donnees);

    }
  }

  public function selectProfesseur(){
    $requete="select * from professeur;";
    //preparation de la requete avant execution
    $select= $this->unPdo->prepare($requete);
    //execution de la requete
    $select->execute();
    //extraction des données
    $resultats = $select->fetchAll();
    return $resultats;
  }


  public function selectEtudiant() {
    $requete="select * from etudiant;";
    // preparation de la requete avant execution
    $select=$this->unPdo->prepare($requete);
    // execution de la requete
    $select->execute();
    //extraction des données
    $resultats = $select->fetchAll();
    return $resultats;
  }

  public function insertEtudiant($tab){
    if($this->unPdo!=null){
      $requete="insert into etudiant values(null,:login, :mdp, :nom, :prenom, :email, :telephone)";
      $donnees=array(":login"=>$tab['login'], ":mdp"=>$tab['mdp'], ":nom"=>$tab['nom'], ":prenom"=>$tab['prenom'], ":email"=>$tab['email'], ":telephone"=>$tab['telephone']);
      $insert=$this->unPdo->prepare($requete);
      $insert->execute($donnees);
    }
  }

  public function deleteUtilisateur($idetudiant){
    if($this->unPdo!= null){
      $requete="delete from etudiant where idetudiant = :idetudiant;";
      $donnees=array(":idetudiant"=>$idetudiant);
      $delete=$this->unPdo->prepare($requete);
      $delete->execute($donnees);

    }
  }


  // fin de la classe
}
?>
