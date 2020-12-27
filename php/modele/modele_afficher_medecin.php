<?php

function affichermedecin(){

  $con=mysqli_connect('localhost','root','','clinique');

  $sql="select * FROM medecin";
  $sql=mysqli_query($con,$sql);

  return $sql;
}
