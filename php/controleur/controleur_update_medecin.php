<?php

//require_once('../modele/modele_afficher_patient.php');

$con=mysqli_connect("localhost","root","","clinique");
require_once('../modele/modele_update_medecin.php');

if(isset($_POST['Editer'])){


$Nom = $_POST['Nom_Medecin'];
$Prenom = $_POST['Prenom_Medecin'];
$Specialite = $_POST['Specialite_Medecin'];
$ID=$_POST['ID'];



// Requête de modification d'enregistrement
  updat_Medecin($Nom,$Prenom,$Specialite,$ID);

header("location:../controleur/controleur_afficher_medecin.php");



}
