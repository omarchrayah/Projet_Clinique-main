<?php

function sup_motif($id){
  $con=mysqli_connect('localhost','root','','clinique');
  $sql="delete FROM motif where Id_Motif=$id";
  $sql=mysqli_query($con,$sql);
}
