<?php

$xmlfile = "main_menu.xml";

if (file_exists($xmlfile)){
	$xml = simplexml_load_file($xmlfile);
}

$name = "tele_plugins";
$label = "500000";

$menu = $xml->xpath("/menu/menu-elem[attribute::id='deployment']/submenu");
$submenu = $menu['0']->addChild("menu-elem");
$submenu->addAttribute("id","ms_".$name."");
$submenu->addChild("label","g(".$label.")");
$submenu->addChild("url","ms_".$name."");

$xml->asXML($xmlfile);

?>
