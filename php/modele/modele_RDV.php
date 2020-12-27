<?php

function checkMedecin($nom,$specialite){
  $con=mysqli_connect('localhost','root','','clinique');
  $sql="select * from medecin where Nom_Medecin='$nom' and Specialite_Medecin='$specialite'" ;
  $sql=mysqli_query($con,$sql);
  return $sql;
  }
function checkcr($date,$heur,$id){
  $con=mysqli_connect('localhost','root','','clinique');
  $sql="select * from creneaux where Jour='$date' and de='$heur' and Id_Medecin='$id'" ;
  $sql=mysqli_query($con,$sql);
  return $sql;
}

function affichercr($date,$id){
  $con=mysqli_connect('localhost','root','','clinique');
  $sql="select * from creneaux where Jour='$date' and Id_Medecin='$id'" ;
  $sql=mysqli_query($con,$sql);
  return $sql;
}
function NSS($NSS){
  $con=mysqli_connect('localhost','root','','clinique');
  $sql="select * from patient where NSS='$NSS'" ;
  $sql=mysqli_query($con,$sql);
  return $sql;
}
function ajoutRDV($date,$heur,$idp,$idmot,$idmed){
  $con=mysqli_connect("localhost","root","","clinique");
  $req="insert into rdv values('','$date','$heur','$idp','$idmot','$idmed','0')";
  $res=mysqli_query($con , $req);
  return $res;
  mysqli_close($con);
}


 ?>
