<?php
function ajoutuser($u,$p,$t){
  $con=mysqli_connect("localhost","root","","clinique");
  $req="insert into user values('','$u','$p','$t')";
  $res=mysqli_query($con , $req);
  mysqli_close($con);
}

  ?>
