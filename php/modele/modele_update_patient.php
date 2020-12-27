<?php

//require_once('../modele/modele_afficher_patient.php');




  function updat_patient($Nss,$Nom,$Prenom,$Adresse_Patient,$Tel_Patient,$Date_Naissance,$Departement_Naissance,$Pays_Naissance,$ID){
    $con=mysqli_connect("localhost","root","","clinique");
// Requête de modification d'enregistrement
   $ModifierPatient="UPDATE patient SET NSS='$Nss', Nom_Patient='$Nom', Prenom_Patient='$Prenom',Adresse_Patient='$Adresse_Patient',Tel_Patient='$Tel_Patient', Date_Naissance='$Date_Naissance', Departement_Naissance='$Departement_Naissance', Pays_Naissance='$Pays_Naissance' WHERE Id_Patient='$ID' ";
   $con->query($ModifierPatient);


}


?>















 ?>
