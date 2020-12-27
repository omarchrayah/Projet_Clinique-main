<?php

require_once('../modele/modele_ajoutuser.php');

if(isset($_POST['login'])){
  $u=$_POST['prenom'].".".$_POST['nom'];
  $u=strtolower($u);
  $p=$_POST['pass'];
  $t=$_POST['Type'];
  ajoutuser($u,$p,$t);
  header("location:../../pages/ajoutuser.html");
}

?>
