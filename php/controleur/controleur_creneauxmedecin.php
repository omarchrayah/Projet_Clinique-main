<?php
require_once('../modele/modele_creneauxmedecin.php');
if(isset($_POST['envoyer'])){
  $cre=$_POST['nbc'];

  for ($i=1; $i <=$cre ; $i++) {
    $date= $_POST["creneau_medecin_donnee_$i"];
    $de= $_POST["DE_$i"];
    $a= $_POST["A_$i"];
    $med=$_POST["medecin"];
     ajoutcreneaux($date,$de,$a,$med);

  }

  header("location:../../pages/creaneaumedecin.html");
}
//controleur_creneauxmedecin.php
