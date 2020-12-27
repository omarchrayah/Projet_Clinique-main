<?php

function updat_login($Username,$Password,$Type_compte,$id_user){
    $con=mysqli_connect("localhost","root","","clinique");
// Requête de modification d'enregistrement
   $Modifierlogin="UPDATE user SET  Username='$Username', Password='$Password', Type_compte='$Type_compte' WHERE id_user='$id_user' ";
   $con->query($Modifierlogin);


}
