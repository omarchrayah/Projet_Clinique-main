<?php

function getsolde($id){

  $con=mysqli_connect('localhost','root','','clinique');

  $sql="select solde FROM compte where id_patient=(select id_patient from rdv where Id_Rdv='$id')";
  $sql=mysqli_query($con,$sql);
  return $sql;
}
function getpay($id){
  $con=mysqli_connect('localhost','root','','clinique');

  $sql="select prix FROM motif where Id_Motif=(select Id_Motif from rdv where Id_Rdv='$id')";
  $sql=mysqli_query($con,$sql);
  return $sql;
}
function modifiersolde($solde,$id){

  $con=mysqli_connect("localhost","root","","clinique");

  $req="UPDATE compte SET  Solde= Solde -'$solde' WHERE   id_patient=(select id_patient from rdv where Id_Rdv='$id') ";
  $res=mysqli_query($con , $req);
  mysqli_close($con);

}

 ?>
