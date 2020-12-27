<?php
	require_once('../modele/modele_NSS.php');

  $contenu;
  if(isset($_POST["valider"]))
  {

  if( (!empty($_POST["Nom"])) && ( !empty($_POST["Prenom"]) ))
  {

  $nom = $_POST["Nom"];
	$prenom=$_POST["Prenom"];
	$nom=strtolower($nom);
  $prenom=strtolower($prenom);
  $result=NSS($nom,$prenom);

  if (mysqli_num_rows($result) > 0) {

      while($row = mysqli_fetch_assoc($result)) {
          $contenu = "<td colspan='2'> " . $row["NSS"]. "</td><td>". $row["Adresse_Patient"]. "</td><td>" . $row["Tel_Patient"]. " </td><td>". $row["Date_Naissance"]. "</td><td>" . $row["Departement_Naissance"]. " </td><td>". $row["Pays_Naissance"]. "</td>";
      }
  } else {
      $contenu = "<td colspan='7' class=\"erreur\">Ce Patient n'exicte pas !!</td>";
  }

  }
  else $contenu = "<td colspan='7' style=\" color:#ffa22e; font-size:20px;  \"><i class=\"far fa-exclamation-triangle\"></i> veuillez remplir la zone de recherche !</td>";
  }

require_once('../vue/Vue_NSS.php');

 ?>
