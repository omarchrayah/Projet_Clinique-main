<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="../../css/login.css">
    <title></title>
  </head>
  <body>

<div class="container">
  <div class="form">

  <?php
    echo "<div class='alert'>$contenu </div>";
  ?>
<form id="form" action="" method="post">
  <table>


<tr><td> <label for="user">Nom de utilisateur</label></td></tr>
  <tr><td><input type="text" id="user" name="Username" value="" placeholder='entrer votre login' required></td></tr>

<tr><td><label for="pwd" >Mot de passe</label></td></tr>
<tr><td> <input type="password" name="password" id="pwd" value="" required></td></tr>


<tr><td style="position:relative;"> <button type="submit" name="login"> Login </button>  <button type="reset" name="reset">Effacer</button></td></tr>



  </table>
</form>
</div>
</div>

  </body>
</html>
