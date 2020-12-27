<?php
function creerusername($Nom , $Prenom ,$Username){
  $con=mysqli_connect('localhost','root','','clinique');
  $sql="insert into user values('','','','')";
  mysqli_query($con,$sql);
 mysqli_close($con);
}

















 ?>
