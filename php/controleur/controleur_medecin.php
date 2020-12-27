<?php
require_once('../modele/modele_ajout_medecin.php');
$contenu="";
if(isset($_POST['Ajouter'])){
$Nom =$_POST['nom'];
$Prenom = $_POST['prenom'];
$specialite = $_POST['specialite'];
$Nom=strtolower($Nom);
$Prenom=strtolower($Prenom);
ajoutmedecin($Nom,$Prenom,$specialite);
$contenu="<div class=\"ajoutValide\" id='ajts'><span style=\"font-size: 15px;\"><i class=\"fal fa-check-circle\" style=\"\"></i> Ajouté avec succés </span></div>";
require_once('../vue/Ajout_medecin.php');
}


?>
