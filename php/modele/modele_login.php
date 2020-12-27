<?php
	require_once('connect.php');


	function check($user , $password){
  		$connexion=mysqli_connect("localhost","root","","clinique");
      $resultat=$connexion->query("select * from user where Username='$user' and Password='$password';");
			//$row=mysqli_num_rows($resultat);
      //$resultat->setFetchMode(PDO::FETCH_OBJ);
    //  $verif=$resultat->fetchall();
    //  $resultat->closeCursor();
  		return $resultat;
		}
			

 ?>
