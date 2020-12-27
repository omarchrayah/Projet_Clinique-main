<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>afficher patient</title>
  </head>
  <body>

      <fieldset>
            <legend>patients affichage</legend>

            <div id="ajouter_patient" ></div>

        <table>

                <tr>
                    <th>Nss</th>
                    <th>Nom_Patient</th>
                    <th>Prenom_Patient</th>
                    <th>Adresse_Patient</th>
                    <th>Tel_Patient</th>
                    <th>Date_Naissance</th>
                    <th>Departement_Naissance</th>
                    <th>Pays_Naissance</th>
                </tr>



                  <?php echo $contenu; ?>




        </table>







        </fieldset>

      <script>
      function ajouter() {

        var contenu = "";

        contenu = contenu+'<form action="../controleur/controleur_update_patient.php" method="post"><label for ="Nss" > Nss:</label><input type="text" name = "Nss" id="Nss"/> <label for="Nom_Patient">Nom_Patient</label><input type="text"  name= "Nom_Patient" id="Nom_Patient" /> <label for ="Prenom_Patient" > Prenom_Patient:</label><input type="text" name = "Prenom_Patient" id="Prenom_Patient"/><label for="Adresse_Patient">Adresse_Patient:</label> <input  type="text" name="Adresse_Patient" id="Adresse_Patient"  /><label for="Tel_Patient">Tel_Patient:</label> <input  type="text" name="Tel_Patient" id="Tel_Patient"  /><label for ="Date_Naissance" > date naissance :</label><input type="text" name = "Date_Naissance" id="Date_Naissance"/><label for ="Departement_Naissance" > Departement_Naissance</label><input type="text" name = "Departement_Naissance" id="Departement_Naissance"/><label for ="Pays_Naissance" > Pays Naissance :</label><input type="text" name = "Pays_Naissance" id="Pays_Naissance"/><input type="hidden" name = "IDP" id="IDP"/><button type="submit" name="Editer" >Editer </button></form>';

        document.getElementById('ajouter_patient').innerHTML = contenu;
      }
      function rempinput(value1,value2,value3,value4,value5,value6,value7,value8,value9){
        document.getElementById('Nss').value=value1;
        document.getElementById('Nom_Patient').value=value2;
        document.getElementById('Prenom_Patient').value=value3;
        document.getElementById('Adresse_Patient').value=value4;
        document.getElementById('Tel_Patient').value=value5;
        document.getElementById('Date_Naissance').value=value6;
        document.getElementById('Departement_Naissance').value=value7;
        document.getElementById('Pays_Naissance').value=value8;
        document.getElementById('IDP').value=value9;
      }
      </script>


    </body>

  </html>
