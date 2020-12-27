<?php
	require_once('../modele/modele_login.php');
  $verif='';
	$contenu='';
  if(isset($_POST['login'])){
          $uname=$_POST['Username'];
          $password=$_POST['password'];
            $check=check($uname,$password);
						$verif=mysqli_num_rows($check);//retourne le nombre de lignes
						if ($verif==1) {
							if ($check) {
								while($donnees = mysqli_fetch_assoc($check))
								{
									$contenu= $donnees['Type_compte'];
								}

						}
						if ($contenu=='directeur') {
								header("location:../../pages/directeur.html")	;
								}
						elseif ($contenu=='medecin') {
							header("location:../../pages/medecin.html")	;

						}elseif ($contenu=='agent') {
						header("location:../../pages/agent.html")	;
						}else {
							$contenu="erreur s'est produit";
						}
				}
				elseif ($verif==0) {
					$contenu="Votre Nom d'utilisateur ou Mot de passe est incorrect";
				}
				  	}
  require_once('../vue/vue.php');

 ?>
