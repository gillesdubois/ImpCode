<?php

function check($plugarray){
	
	$conn = new PDO('mysql:host=localhost;dbname=ocsweb;charset=utf8', 'ocs', 'ocs');


	foreach ($plugarray as $key => $value){
		
		$query = $conn->query("SELECT EXISTS( SELECT * FROM `plugins` WHERE name = '".$value."' ) AS name_exists");
		$anwser = $query->fetch();
		
		if($anwser[0] == false){
			require PLUGINS_DIR."PLUGIN_".$value."/install.php";
			$fonc = "plugin_version_".$value;
			var_dump($fonc);
			$infoplugin = $fonc();
			var_dump($infoplugin);
			
		}		
		
	}
	
}

?>

