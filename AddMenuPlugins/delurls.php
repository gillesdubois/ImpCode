<?php

$xmlfile = "urls.xml";

if (file_exists($xmlfile)){
	$xml = simplexml_load_file($xmlfile);
}

foreach ($xml as $value){

	if( $value['key'] == "ms_users" ){
		
		$dom=dom_import_simplexml($value);
		var_dump($dom->getNodePath());
		$dom->parentNode->removeChild($dom);
	}
}

$xml->asXML($xmlfile);

?>