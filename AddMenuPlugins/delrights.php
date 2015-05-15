<?php

$doc = simplexml_load_file("sadmin.xml");
//var_dump($doc);

$mypage = $doc->pages->page;

foreach ($mypage as $page){
	
	if($page == 'ms_config'){
		
		$dom=dom_import_simplexml($page);
		$dom->parentNode->removeChild($dom);
	}
	
}

var_dump($doc->asXML());


?>