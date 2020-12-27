<?php

function sup_medecin($id){
  $con=mysqli_connect('localhost','root','','clinique');
  
  $sql="delete FROM medecin where Id_Medecin=$id";
  $sql=mysqli_query($con,$sql);
}
