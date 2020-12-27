<?php

require_once('../modele/modele_afficherlogin.php');
$con=mysqli_connect("localhost","root","","clinique");
$contenu2="";
$sql=afficherlogin();
if ($sql) {
  while($donnees = mysqli_fetch_assoc($sql)) //Récupère une ligne de résultat sous forme de tableau associatif
  {
      $contenu2=$contenu2."<tr><td>". $donnees['Username']."</td><td>".$donnees['Password']."</td><td>".$donnees['Type_compte']."</td>     <td><button type='button' onclick=\"ajouter();rempinput('". $donnees['Username']."','". $donnees['Password']."',
      '".$donnees['Type_compte']."');\">Editer</button></td></tr>";


  }
}

require_once('../vue/afficher_login.php');
