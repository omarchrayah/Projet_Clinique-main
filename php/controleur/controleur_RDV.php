<?php


require_once('../modele/modele_RDV.php');
$con=mysqli_connect("localhost","root","","clinique");
$contenu="";
if(isset($_POST['Valider'])){
  $Nom_Medecin=$_POST['Nom_Medecin'];
  $NSS=$_POST['NSS'];
  $specialite=$_POST['specialite'];
  $Nom_Medecin=strtolower($Nom_Medecin);
  $specialite=strtolower($specialite);
  $motif=$_POST['motif'];
  $date=$_POST['date'];
  $heur=$_POST['heur'];
  $check_NSS= NSS($NSS);//veriier l'existance de NSS
  $verif=mysqli_num_rows($check_NSS);
  if($verif==1){
    $check= checkMedecin($Nom_Medecin,$specialite);//veriier l'existance du medecin
    $verif=mysqli_num_rows($check);
    if ($verif==1) {
      $check1="";
      $verif1="";
      while($donnees = mysqli_fetch_assoc($check))
      {
      $check1= checkcr($date,$heur,$donnees['Id_Medecin']);//veriier l'existance du creneaux
      $verif1=mysqli_num_rows($check1);
    }
    if ($verif1==1) {
      $check= checkMedecin($Nom_Medecin,$specialite);
      while($donnees = mysqli_fetch_assoc($check))
      {
        $check1=affichercr($date,$donnees['Id_Medecin']);
          $contenu="<td colspan=\"2\">Ce creneau n'est pas disponible ! <br> vous trouvez ci-dessous les horaires qui sont pas disponible  pour le $date :";
          while($donnees1 = mysqli_fetch_assoc($check1))
          {
            $contenu=$contenu."<br><i>-DE  ".$donnees1['de'].":00H -> ". $donnees1['a'].":00H</i>";
          }
          $contenu=$contenu."</td>";
      }

  }
        else {
          $idp="";
          while($donnees = mysqli_fetch_assoc($check_NSS))
          {
              $idp=$donnees['Id_Patient'];
          }
          $check= checkMedecin($Nom_Medecin,$specialite);
          $idmed="";
          while($donnees = mysqli_fetch_assoc($check))
          {
              $idmed=$donnees['Id_Medecin'];

          }
          ajoutRDV($date,$heur,$idp,$motif,$idmed);
          $contenu="<td colspan=\"2\">ajout avec succés</td>";
        }
    }else {
      $contenu="<td colspan=\"2\">le $specialite $Nom_Medecin n'existe pas !</td>";
    }
  }else {
    $contenu="<td colspan=\"2\">ce Nss n'existe pas !</td>";
  }



}
require_once('../vue/RDV.php');

 ?>
