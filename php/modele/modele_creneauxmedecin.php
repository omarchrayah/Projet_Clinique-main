<?php

function ajoutcreneaux($date,$de,$a,$nom){
  $conn=mysqli_connect("localhost","root","","clinique");
    $requ="insert into creneaux values('','$date','$de','$a',(select Id_Medecin from medecin where Nom_Medecin='$nom'));";
    $resu=mysqli_query($conn , $requ);
    mysqli_close($conn);
}
?>
