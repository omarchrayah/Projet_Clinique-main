<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<title>Ajouter Medecin</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="../../css/loading.css">
		<link rel="stylesheet" href="../../css/ajout_medecin.css">
			<link rel="stylesheet" href="../../css/all.css">
    </head>
    <body onload="hiddenajts();">
			<!--loading-->
			<script type="text/javascript">
			window.addEventListener("load", function () {
				const load = document.querySelector(".loading");
				load.className += " hidden";

			});
			</script>

			<div class="loading">
			<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
			</div>
			</div>
			<!--loading-->
<div class="container">
	<div class="form">
	<div class="icon"><span><i class="fas fa-user-plus"></i></span></div>
	<?php error_reporting(0); echo $contenu; ?>
			<form id="form" action="../controleur/controleur_medecin.php" method="post">
					<table>

	<tr>
<td>
						<label for="firstname" >Nom :</label>
						<input type="text" name="nom" placeholder="entrer le nom de medecin" autocomplete="off" required>

						</td>
					</tr>
					<tr>
				<td>
						<label for="name" name=''>Prenom :</label>
						<input type="text" name="prenom" placeholder="entrer le prenom de medecin" autocomplete="off" required/>

					</td>
				</tr>
				<tr>
				<td>
            <label for="spe" >Specialite:</label>
            <input type="text" name="specialite" placeholder="entrer la specialite de medecin" autocomplete="off" required/>
					</td>
				</tr>
				<tr>
				<td style="border:none;">
					<button type="submit" id="Ajouter" name="Ajouter">Ajouter</button>
					<button type="reset" name="del" style="background:#5F7373;">Effacer</button>

				</td>
			</tr>
				</table>
			</form>
			</div>
			</div>
			<script type="text/javascript">
				function hiddenajt(){

					document.getElementById('ajts').style.display="none";
				}
				function hiddenajts(){setInterval("hiddenajt()",3000);}
			</script>
</body>
</html>
