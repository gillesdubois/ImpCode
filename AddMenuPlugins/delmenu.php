<?php

$xmlfile = "main_menu.xml";

if (file_exists($xmlfile)){
	$xml = simplexml_load_file($xmlfile);
}

$mainmenu = $xml->xpath("/menu");

foreach ($mainmenu as $listmenu){
	
	foreach ($listmenu as $info){
		
		if ($info['id'] == 'ms_help'){
		
			$dom=dom_import_simplexml($info);
			$dom->parentNode->removeChild($dom);
			
		}
		
	}
		
}

var_dump($xml->asXML());

$xml->asXML($xmlfile);

?>