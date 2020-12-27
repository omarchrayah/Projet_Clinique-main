<?php
require_once('../modele/modele_motif.php');
$motifcont="";
$motifcons="";
if(isset($_POST['ajout1'])){
  $x=$_POST['liste_pieces'];
  $y=$_POST['consigne'];
  $Nom_Motif =$_POST["Nom_Motif"];
  $Prix_Motif = $_POST["Prix_Motif"];
  for ($i=1; $i<=$x ; $i++) {
    $liste_pieces=$_POST["liste_pieces$i"];
    $motifcont= $motifcont."<br>-$liste_pieces";

    }
    //echo $motifcont;
  for ($j=1; $j<=$y ; $j++) {
    $liste_consigne=$_POST["liste_consigne$j"];
    $motifcons= $motifcons."<br>-$liste_consigne";

  }
  ajoutmotif($Nom_Motif,$Prix_Motif,$motifcont,$motifcons);
    header("location:../../pages/ajout_motif.html");
}
   //echo $motifcons;
