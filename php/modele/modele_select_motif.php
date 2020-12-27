<?php

function select_motif(){

  $con=mysqli_connect('localhost','root','','clinique');

  $sql="select * FROM motif order by Nom_Motif";
  $sql=mysqli_query($con,$sql);

  return $sql;
}

 ?>
