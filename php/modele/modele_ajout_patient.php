<?php
function ajoutpatient($n,$p,$a,$te,$da,$de,$pays,$nss){
  $con=mysqli_connect("localhost","root","","clinique");
  $req="insert into patient values('','$nss','$n','$p','$a','$te','$da','$de','$pays')";
  $res=mysqli_query($con , $req);
  return $res;
  mysqli_close($con);
}
