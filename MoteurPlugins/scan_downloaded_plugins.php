<?php

function scan_downloaded_plugins(){
	
  // Scan plugins download directory
  $directory = PLUGINS_DL_DIR;
  $scanned_directory = array_diff(scandir($directory), array('..', '.'));
  
  // Debug purposes
  //var_dump($scanned_directory);
  
	if (!empty($scanned_directory) == true){
		foreach ($scanned_directory as $key => $value){
			install($value);
		}
	}

}

?>