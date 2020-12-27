<?php

//require_once('../modele/modele_afficher_patient.php');

$con=mysqli_connect("localhost","root","","clinique");
require_once('../modele/modele_update_patient.php');

if(isset($_POST['Editer'])){

$Nss =$_POST['Nss'];
$Nom = $_POST['Nom_Patient'];
$Prenom = $_POST['Prenom_Patient'];
$Adresse_Patient = $_POST['Adresse_Patient'];
$Tel_Patient = $_POST['Tel_Patient'];
$Date_Naissance = $_POST['Date_Naissance'];
$Departement_Naissance = $_POST['Departement_Naissance'];
$Pays_Naissance = $_POST['Pays_Naissance'];
$ID=$_POST['IDP'];




// fonction pour la modification
  updat_patient($Nss,$Nom,$Prenom,$Adresse_Patient,$Tel_Patient,$Date_Naissance,$Departement_Naissance,$Pays_Naissance,$ID);

header("location:../controleur/controleur_afficher_patient.php");



}
