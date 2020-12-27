<?php

require_once('../modele/modele_affichermotif.php');
$con=mysqli_connect("localhost","root","","clinique");
$contenu1="";
$sql=affichermotif();
if ($sql) {
  while($donnees = mysqli_fetch_assoc($sql)) //Récupère une ligne de résultat sous forme de tableau associatif
  {
      $contenu1=$contenu1."<tr><td>". $donnees['Nom_Motif']."</td><td>".$donnees['Prix_Motif']."</td><td>".$donnees['liste_pieces']."</td><td>".$donnees['consigne']."</td><td><button onclick=\"javascript:if(confirm('voullez-vous vraiment supprimer le motif ".$donnees['Nom_Motif']."')){window.location.href='control_Supprimer_Motif.php?Id=".$donnees['Id_Motif']."';}\">Sup.</button></td></tr>";


  }
}

require_once('../vue/afficher_motif.php');
?>
