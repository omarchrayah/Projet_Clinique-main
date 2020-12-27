<?php

require_once('../modele/modele_ajout_patient.php');

if(isset($_POST['Ajouter'])){
  $n=$_POST['Nom'];
  $p=$_POST['Prenom'];
  $a=$_POST['Adresse'];
  $te='0'.$_POST['Numtel'];
  $da=$_POST['Date_de_Naissance'];
  $de=$_POST['Departement_de_Naissance'];
  $pays=$_POST['Pays'];
  $nss=$_POST['NSS'];
  $n=strtolower($n);  //transformer les chaines de caracteres en miniscule
  $p=strtolower($p);
  ajoutpatient($n,$p,$a,$te,$da,$de,$pays,$nss);
  header("location:../../pages/ajout_patient.html");
}
