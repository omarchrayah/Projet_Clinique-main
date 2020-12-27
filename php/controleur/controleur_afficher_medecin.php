<?php

require_once('../modele/modele_afficher_medecin.php');

$con=mysqli_connect("localhost","root","","clinique");
$contenu="";
$sql=affichermedecin();
if ($sql) {
  while($donnees = mysqli_fetch_assoc($sql))
  {
      $contenu= $contenu."<tr><td>". $donnees['Nom_Medecin']."</td><td>".$donnees['Prenom_Medecin']."</td><td>".$donnees['Specialite_Medecin']."</td><td id=\"ID2\"><button type='button' onclick=\"ajouter();rempinput('". $donnees['Nom_Medecin']."','". $donnees['Prenom_Medecin']."','". $donnees['Specialite_Medecin']."','". $donnees['Id_Medecin']."');\">Edit</button><button
onclick=\"javascript:if(confirm('voullez-vous vraiment supprimer le Medecin ".$donnees['Nom_Medecin']."')){window.location.href='control_Supprimer_medecin.php?Id=".$donnees['Id_Medecin']."';}\">Sup.</button></td></tr>";



  }
}

require_once('../vue/afficher_medecin.php');
