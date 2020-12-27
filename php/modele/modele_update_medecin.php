<?php






  function updat_Medecin($Nom,$Prenom,$Specialite,$ID){
    $con=mysqli_connect("localhost","root","","clinique");
// Requête de modification d'enregistrement
   $ModifierMedecin="UPDATE medecin SET  Nom_Medecin='$Nom', Prenom_Medecin='$Prenom', Specialite_Medecin='$Specialite' WHERE Id_Medecin='$ID' ";
   $con->query($ModifierMedecin);


}


?>
