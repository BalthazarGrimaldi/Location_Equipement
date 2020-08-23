  <?php
  // Appel le model
require_once("model/model.php");

class controler {
    private $unModel;

    public function __construct ($server, $bdd, $user, $mdp) {
      // instantiation de la classe model
      $this->unModel = new Model ($server, $bdd, $user, $mdp);
    }

    public function selectLocation() {
      $result = $this->unModel->selectAll();

      //on peut resaliser des traitements avant affichage

      return $result;
    }

    public function insertLocation($tab) {
      $this->unModel->insertLocation($tab);
    }

    public function deleteLocation($idlocation) {
      $this->unModel->deleteLocation($idlocation);
    }

    public function verifConnexion($login, $mdp) {
      return $this->unModel->verifconnextion($login, $mdp);
    }

    public function insertProfesseur ($tab) {
        $this->unModel->insertProfesseur($tab);
    }

    public function deleteProfesseur($idprofesseur) {
        $this->unModel->deleteProfesseur($idprofesseur);
    }

    public function selectProfesseur() {
        return $this->unModel->selectProfesseur();
    }

    public function insertUser ($tab) {
        $this->unModel->insertEtudiant($tab);
    }

    public function deleteUser($idetudiant) {
        $this->unModel->deleteUtilisateur($idetudiant);
    }

    public function selectUser () {
        return $this->unModel->selectEtudiant();
    }

  }
 ?>
