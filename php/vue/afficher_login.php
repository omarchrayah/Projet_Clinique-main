<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>afficher login</title>
  </head>
  <body>

            <h2>logins</h2>

            <div id="ajouter_logins" ></div>

        <table>

                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Type_compte</th>
                </tr>


                <?php
                 echo $contenu2;
                 ?>




        </table>
      </div>

      <script>
      function ajouter() {

        var contenu2= "";

        contenu2 = contenu2+'<form action="../controleur/controleur_update_login.php"method="post"><label for ="Username" > Username:</label><input type="text" name = "Username" id="Username"/> <label for="Password">Password</label><input type="text"  name= "Password" id="Password" /> <label for="Type_compte">Type_compte</label><input type="text"  name= "Type_compte" id="Type_compte" /><input  type="hidden" name="id_user" id="id_user"  /><button type="submit" name="Editer" >Editer</button></form>';
        document.getElementById('ajouter_logins').innerHTML = contenu2;
      }
      function rempinput(value1,value2,value3,value4){
        document.getElementById('Username').value=value1;
        document.getElementById('Password').value=value2;
        document.getElementById('Type_compte').value=value3;
        document.getElementById('id_user').value=value4;


      }
      </script>
