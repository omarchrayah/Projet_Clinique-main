<?php


function ajoutmedecin($Nom , $Prenom , $specialite){
  $con=mysqli_connect('localhost','root','','clinique');

  $sql="insert INTO medecin VALUES ('','$Nom','$Prenom','$specialite')";
  mysqli_query($con,$sql);
mysqli_close($con);
}
 
