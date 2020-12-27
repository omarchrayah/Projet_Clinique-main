<?php

function affichermotif(){

  $con=mysqli_connect('localhost','root','','clinique');

  $sql="select * FROM motif";
  $sql=mysqli_query($con,$sql);

  return $sql;
}
