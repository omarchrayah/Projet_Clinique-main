<?php

require_once('../modele/modele_afficher_patient.php');

$con=mysqli_connect("localhost","root","","clinique");
$contenu="";
$sql=afficherpatient();
if ($sql) {
  while($donnees = mysqli_fetch_assoc($sql))
  {
      $contenu= $contenu."<tr><td>". $donnees['NSS']."</td><td>".$donnees['Nom_Patient']."</td><td>".$donnees['Prenom_Patient']."</td><td>". $donnees['Adresse_Patient']."</td><td>". $donnees['Tel_Patient']."</td><td>". $donnees['Date_Naissance']."</td><td>". $donnees['Departement_Naissance']."</td>
      <td>". $donnees['Pays_Naissance']."</td>     <td><button type='button' onclick=\"ajouter();rempinput('". $donnees['NSS']."','". $donnees['Nom_Patient']."','". $donnees['Prenom_Patient']."','". $donnees['Adresse_Patient']."','". $donnees['Tel_Patient']."','". $donnees['Date_Naissance']."',
      '". $donnees['Departement_Naissance']."','". $donnees['Pays_Naissance']."','". $donnees['Id_Patient']."');\">Edit</button><button
onclick=\"javascript:if(confirm('voullez-vous vraiment supprimer le patient ".$donnees['Nom_Patient']."')){window.location.href='control_Supprimer_patient.php?Id=".$donnees['Id_Patient']."';}\">Sup.</button></td></tr>";

  }
}

require_once('../vue/afficher_patient.php');
