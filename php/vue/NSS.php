<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/NSS.css">
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
      <h1>Numéro de Securité Sociale ?</h1>
    </div>
    <form method="post" action="" >
        <div class="cherch">
          <div class="label"><label >Entrez le Numero de Securité Sociale:</label></div>
          <div class="input">  <input type="text" name="Nom" value="" placeholder="Nom..." style=" border-radius: 30px 0px 0px 30px; padding-right: 0px;">
            <input type="text" name="Prenom" value="" placeholder="Prenom..." style=" border-radius: 0px 30px 30px 0px; padding-left:20px;">
            <button type="submit" name="valider"> <span> <i class="far fa-search"></i></span></button>
          </div>

        </div>

      <table>
        <tr>
          <th colspan="2">NSS</th>
          <th>Adresse_Patient</th>
          <th>Tel_Patient</th>
          <th>Date_Naissance</th>
          <th>Departement_Naissance</th>
          <th>Pays_Naissance</th>
        </tr>
        <tr>
          <?php
            error_reporting(0);
            echo $contenu;

           ?>
        </tr>
      </table>

     </form>
  </body>
</html>
