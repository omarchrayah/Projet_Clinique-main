<?php


$con=mysqli_connect("localhost","root","","clinique");
require_once('../modele/modele_update_login.php');

if(isset($_POST['Editer'])){


$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Type_compte = $_POST['Type_compte'];
$id_user=$_POST['id_user'];



// Requête de modification d'enregistrement
updat_login($Username,$Password,$Type_compte,$id_user);

header("location:../controleur/controleur_afficherlogin.php");



}
