<?php
echo '
<table class="table table-dark">
    <thead>
        <tr>
            <th class="scope-col">Id Professeur</th>
            <th class="scope-col">Nom</th>
            <th class="scope-col">Prenom</th>
            <th class="scope-col">Login</th>
            <th class="scope-col">Email</th>
            <th class="scope-col">Telephone</th>
        </tr>
    </thead>
';
  foreach ($result as $unResultat) {
      echo
          "<tr>
      <td>".$unResultat['idprofesseur']."</td>
      <td>".$unResultat['nom']."</td>
      <td>".$unResultat['prenom']."</td>
      <td>".$unResultat['login']."</td>
      <td>".$unResultat['email']."</td>
      <td>".$unResultat['telephone']."</td>
    </tr>";
  }
  echo "</table>";
?>