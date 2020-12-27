<?php

require_once('../modele/modele_Supprimer_patient.php');

if(isset($_GET['Id'])){
  $id=$_GET['Id'];
  sup_patient($id);
  header("location:controleur_afficher_patient.php");
}
