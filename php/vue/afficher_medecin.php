<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>afficher medecin</title>
  <link rel="stylesheet" href="../../css/table.css">
  </head>
  <body>
    <div class="contenu">

            <div id="ajouter_operations" ></div>
        <table>

                <tr>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>specialite</th>
                    <th>opérations</th>
                </tr>
                  <?php echo $contenu; ?>
        </table>


    </div>
      <script>
      function ajouter() {

        var contenu = "";

        contenu = contenu+'<form action="../controleur/controleur_update_medecin.php"method="post"><label for ="Nom_Medecin" > Nom_Medecin:</label><input type="text" name = "Nom_Medecin" id="Nom_Medecin"/> <label for="Prenom_Medecin">Prenom</label><input type="text"  name= "Prenom_Medecin" id="Prenom_Medecin" /> <label for="Specialite_Medecin">Specialite_Medecin</label> <input  type="text" name="Specialite_Medecin" id="Specialite_Medecin"  /> <input  type="hidden" name="ID" id="ID"  /><button type="submit" name="Editer" >Editer</button></form>';

        document.getElementById('ajouter_operations').innerHTML = contenu;
      }
      function rempinput(value1,value2,value3,value4){
        document.getElementById('Nom_Medecin').value=value1;
        document.getElementById('Prenom_Medecin').value=value2;
        document.getElementById('Specialite_Medecin').value=value3;
        document.getElementById('ID').value=value4;
      }
      </script>


    </body>

  </html>
