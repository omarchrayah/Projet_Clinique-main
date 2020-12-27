<?php
function getconnect(){
$connexion= mysqli_connect("localhost","root","","estclock");
 return $connexion;
}
 ?>
