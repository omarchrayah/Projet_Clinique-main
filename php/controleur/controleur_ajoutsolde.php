<?php

require_once('../modele/modele_ajoutsolde.php');

if(isset($_POST['ok'])){
$n =$_POST['NSS'];
$m = $_POST['montant'];


ajoutsolde($n,$m);

header("location:../../pages/ajoutsolde.html");

}
?>
