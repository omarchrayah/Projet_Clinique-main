<?php

require_once('../modele/modele_Supprimer_Motif.php');

if(isset($_GET['Id'])){
  $id=$_GET['Id'];
  sup_motif($id);
  header("location:controleur_affichermotif.php");
}
