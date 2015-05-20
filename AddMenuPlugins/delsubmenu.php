<?php

$xmlfile = "main_menu.xml";
		
	if (file_exists($xmlfile)){
		$xml = simplexml_load_file($xmlfile);
	}
		
$menu = $xml->xpath("/menu/menu-elem[attribute::id='config']/submenu");
		
	foreach ($menu as $submenu){
			
		foreach ($submenu as $info){
				
			if ($info['id'] == 'ms_users'){
					
				$dom=dom_import_simplexml($info);
				var_dump($dom->getNodePath());
				$dom->parentNode->removeChild($dom);
					
			}
				
		}
			
	}

$xml->asXML($xmlfile);

?>