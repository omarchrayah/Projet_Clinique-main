<?php
require_once('../modele/modele_synthese.php');
$contenu="";
$contenu1="";

if(isset($_POST['synthese'])){
$NSS =$_POST['NSS'];
$check_NSS= NSS($NSS);//veriier l'existance de NSS
$verif=mysqli_num_rows($check_NSS);
if($verif==1){
  while($row = mysqli_fetch_assoc($check_NSS)) {
      $contenu = "<td> " . $row["Nom_Patient"]. "</td><td>". $row["Prenom_Patient"]. "</td><td>". $row["Adresse_Patient"]. "</td><td>" . $row["Tel_Patient"]. " </td><td>". $row["Date_Naissance"]. "</td><td>" . $row["Departement_Naissance"]. " </td><td>". $row["Pays_Naissance"]. "</td>";
  }
  $check_NSS=checkRDV($NSS);
  $verif=mysqli_num_rows($check_NSS);
  if($verif==0){$contenu1="<td colspan='5'>il y'a pas de rendez vous pour ce NSS</td>";}else {
    while($row = mysqli_fetch_assoc($check_NSS)) {
      $idmed= $row["id_medecin"];
      $check_med=affichemedecin($idmed);
        while($row1 = mysqli_fetch_assoc($check_med)) {
          $idmot= $row["id_motif"];
          $check_mot=affichemotif($idmot);
            while($row2 = mysqli_fetch_assoc($check_mot)) {
            $retVal = ($row["payer"]==0) ? "<button style='position: inherit; height: 33px;background: #e22c19;border: none;' onclick=\"javascript:if(confirm('voullez-vous vraiment payer ".$row2["Prix_Motif"]."')){window.location.href='control_Solde_patient.php?Id=".$row["Id_Rdv"]."';}\">Payer.</button>" : "payé" ;
          $contenu1="<td> " . $row1["Nom_Medecin"]. "</td><td>". $row["Date"]. "</td><td>". $row["Heure"]. "</td><td>". $row2["Nom_Motif"]. "</td><td>". $row2["Prix_Motif"]. "</td><td>". $retVal. "</td><td>";

        }}

  }}
  }else {
  $contenu="<td colspan='7'>Ce NSS n'existe pas!</td>";
  $contenu1="<td colspan='5'>il y'a pas de rendez vous pour ce NSS</td>";
}}



require_once('../vue/synthese.php');
 ?>
