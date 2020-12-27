<?php
require_once('connect.php');


function NSS($nom,$prenom){
  $connexion=mysqli_connect("localhost","root","","clinique");
  $resultat=$connexion->query("select * FROM patient WHERE Nom_Patient='$nom' and Prenom_Patient='$prenom';");
  return $resultat;
}



 ?>
