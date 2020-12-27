<?php
$conn=mysqli_connect("localhost","root","","user");
if(isset($_POST["valider"]))
{ 

if(!empty($_POST["numero"]))
{

$numero_ss = $_POST["numero"];

$mysqli = new mysqli("localhost", "root", "", "user");

if (!$conn) {
    echo "Erreur de Connexion";
}

$sql = "SELECT nom_patient, prenom_patient FROM patient WHERE nss='$numero_ss'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        echo "Nom: " . $row["nom_patient"]. " " . $row["prenom_patient"]. " <br>";
    }
} else {
    echo "ce nss nexiste pas";
}

mysqli_close($conn);
}
else echo "Toutes les cases du formulaire ne sont pas remplies";
}
?>
