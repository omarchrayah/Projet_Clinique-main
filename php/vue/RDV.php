<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../../css/loading.css">
    <link rel="stylesheet" href="../../css/ajout_medecin.css">
      <link rel="stylesheet" href="../../css/all.css">
  </head>
  <body  onload="rmplir_select('motif');">
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
    	<div class="form" style="width:auto; height:auto;">
    	<div class="icon" style="left: 265px;"><span><i class="fas fa-user-plus"></i></span></div>
    	<?php error_reporting(0); ?>

    <form class="" action="../controleur/controleur_RDV.php" method="post">
      <table>
        <tr>

        <td><label for="NSS">NSS</label><input type="text" name="NSS" value="" required></td>
        <td><label for="Nom_Medecin">Nom Medecin</label>
        <input type="text" name="Nom_Medecin" value="" required></td>
      </tr>
      <tr>
        <td><label for="specialite">spécialité</label>
        <input type="text" name="specialite" value="" required></td>
        <td><label for="motif">Motif</label>
        <select id="motif" class="motif" name="motif" required></td>
           </select>

      </tr>
      <tr>
        <td>

          <label for="date">date</label>
          <input type="date" name="date" value="" required>
          </td>

        <td>
          <label for="heur">heur</label>
          <input type="number" min="0" max="23" name="heur" value="" placeholder="HH" required>
        </td>
      </tr>
      <tr>
       <?php echo $contenu; ?>
      </tr>
      <tr>
        <td colspan="2"><button type="submit" name="Valider">Valider</button></td>
      </tr>

      </table>


    </form>
  </div>
  </div>
    <script type="text/javascript" src="../controleur/control_select_motif.php">

    </script>

  </body>
</html>
