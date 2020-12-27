<?php

function sup_patient($id){
  $con=mysqli_connect('localhost','root','','clinique');
  $sql="delete FROM patient where Id_Patient=$id";
  $sql=mysqli_query($con,$sql);
}
