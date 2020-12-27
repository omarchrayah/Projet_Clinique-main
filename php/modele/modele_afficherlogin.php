<?php

function afficherlogin(){

  $con=mysqli_connect('localhost','root','','clinique');

  $sql="select * FROM user";
  $sql=mysqli_query($con,$sql);

  return $sql;
}
