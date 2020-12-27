<?php
require_once('../modele/Ajout_solde.php');
$Soldcourant="";
$contenu="";
if(isset($_GET['Id'])){
  $id=$_GET['Id'];
   $sql=getsolde($id);
   while($donnees = mysqli_fetch_assoc($sql))
   {
   $Soldcourant=$sql['solde'];
 }
 $Pay="";
 $sql2=getsolde($id);
 while($donnees = mysqli_fetch_assoc($sql2))
 {
 $Pay=$sql2['solde'];
}
if ($Pay>$Soldcourant) {
  $contenu="Vous n'avez pas assez de solde vous devez fair un depot sur votre compte";
}else {
  modifiersolde($Pay,$id);
  $sql=getsolde($id);
  while($donnees = mysqli_fetch_assoc($sql))
  {
  $Soldcourant=$sql['solde'];
  }
  echo "Votre solde courat et $Soldcourant";
}

require_once('../vue/vue_solde.php');
}
 ?>
