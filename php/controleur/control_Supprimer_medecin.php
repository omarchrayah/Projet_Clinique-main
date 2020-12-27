<?php

require_once('../modele/modele_Supprimer_medecin.php');

if(isset($_GET['Id'])){
  $id=$_GET['Id'];
  sup_medecin($id);
  header("location:controleur_afficher_medecin.php");
}
