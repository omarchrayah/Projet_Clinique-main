  function videselect(s1){
	var   testselect = document.getElementById(s1);
	testopts = testselect.getElementsByTagName('option');
	while(testopts[1]) { testselect.removeChild(testopts[1]); }}
  function rmplir_select(s2){
    videselect(s2);
					var select = document.getElementById(s2);
          <?php
          require_once('../modele/modele_select_motif.php');
          $sql=select_motif();
          if ($sql) {
            while($donnees = mysqli_fetch_assoc($sql))
            {
		echo '  var newOption = new Option (\''.$donnees['Nom_Motif'].'\',\''.$donnees['Id_Motif'].'\');select.options.add (newOption);';
	}
}
 echo "}";

?>
