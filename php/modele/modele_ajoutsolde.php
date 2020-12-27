<?php

function ajoutsolde($n,$m){
  $con=mysqli_connect("localhost","root","","clinique");
  $req="insert into compte values('','$m',(select Id_Patient from patient where NSS='$n'))";
  $res=mysqli_query($con , $req);
  mysqli_close($con);
}
