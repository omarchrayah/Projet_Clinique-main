<?php

function NSS($NSS){
  $con=mysqli_connect('localhost','root','','clinique');
  $sql="select * from patient where NSS='$NSS'" ;
  $sql=mysqli_query($con,$sql);
  return $sql;
}
function checkRDV($NSS){
  $con=mysqli_connect('localhost','root','','clinique');
  $sql="select * from rdv where Id_Patient=(select Id_Patient from patient where NSS='$NSS')" ;
  $sql=mysqli_query($con,$sql);
  return $sql;
}

function affiche_synthese($idp)
{
  $con=mysqli_connect('localhost','root','','clinique');
  $sql="select * from rdv where id_patient='$idp'" ;
  $sql=mysqli_query($con,$sql);
  return $sql;
}
function solde($idp){
  $con=mysqli_connect('localhost','root','','clinique');
  $sql="select * from compte where id_patient='$idp'" ;
  $sql=mysqli_query($con,$sql);
  return $sql;
}
function effectuer_paiement($idp,$sold)
{
  $con=mysqli_connect('localhost','root','','clinique');
  $sql="update compte set Solde=Solde-'$sold' where id_patient='$idp' " ;
  $sql=mysqli_query($con,$sql);

}
function affichemedecin($idmed){
  $con=mysqli_connect('localhost','root','','clinique');
  $sql="select * from medecin where Id_Medecin='$idmed'" ;
  $sql=mysqli_query($con,$sql);
  return $sql;
}
function affichemotif($idmot){
  $con=mysqli_connect('localhost','root','','clinique');
  $sql="select * from motif where Id_Motif='$idmot'" ;
  $sql=mysqli_query($con,$sql);
  return $sql;
}

 ?>
