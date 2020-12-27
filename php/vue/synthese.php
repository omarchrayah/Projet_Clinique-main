<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/SNT.css">
    <link rel="stylesheet" href="../../css/loading.css">
      <link rel="stylesheet" href="../../css/all.css">
    <title></title>
  </head>
  <body>
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
    <div class="head">
      <h1>Synthése</h1>
    </div>
  <form class="" action="../controleur/controleur_synthese.php" method="post">
      <div class="cherch">


    <div class="label"><label for="NSS">NSS</label></div>
      <div class="input"><input type="text" name="NSS" value="">
      <button type="submit" name="synthese">Afficher Synthese</button>
    </div>
    
    </div>
    </form>
    <table>
      <tr>
      <th>NOM</th>
      <th>Prenom</th>
      <th>Adresse_Patient</th>
      <th>Tel_Patient</th>
      <th>Date_Naissance</th>
      <th>Departement_Naissance</th>
      <th>Pays_Naissance</th>
      </tr>
      <tr>
        <?php echo $contenu; ?>
      </tr>
    </table>
    <table>
      <tr>
      <th>NOM de medecin</th>
      <th>date de RDV</th>
      <th>Heure de RDV</th>
      <th>Motif</th>
      <th>Prix</th>
      <th>Situation</th>
          </tr>
      <tr>
        <?php echo $contenu1; ?>
      </tr>
    </table>
  </body>
</html>
