<?php

function afficherpatient(){

  $con=mysqli_connect('localhost','root','','clinique');

  $sql="select * FROM patient";
  $sql=mysqli_query($con,$sql);

  return $sql;
}
