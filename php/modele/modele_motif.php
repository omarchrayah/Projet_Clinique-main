<?php

function ajoutmotif($Nom_motif , $Prix_motif ,$liste_pieces,$consigne){
  $con=mysqli_connect('localhost','root','','clinique');
  $sql="insert INTO motif VALUES ('','$Nom_motif','$Prix_motif','$liste_pieces','$consigne')";
  mysqli_query($con,$sql);
mysqli_close($con);
}
