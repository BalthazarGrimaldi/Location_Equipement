<?php
  //var_dump($result);

  // affichage
  echo
  "<table class ='table table-dark'>
  <thead>
    <tr>
      <th scope='col'>id Location</th>
      <th scope='col'>Nom_equipement</th>
      <th scope='col'>Date_debut</th>
      <th scope='col'>Date_fin</th>
      <th scope='col'>Nom Utilisateur</th>
      <th scope='col'>Prénom Utilisateur</th>

    </tr>
  </thead>
  ";

  foreach ($result as $unResultat) {
    echo
    "<tr>
      <td>".$unResultat['idlocation']."</td>
      <td>".$unResultat['nom_equipement']."</td>
      <td>".$unResultat['date_debut']."</td>
      <td>".$unResultat['date_fin']."</td>
      <td>".$unResultat['nom_utilisateur']."</td>
      <td>".$unResultat['prenom_utilisateur']."</td>

    </tr>";
  }
  echo "</table>";
?>
