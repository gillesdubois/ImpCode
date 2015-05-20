<?php

$xmlfile = "main_menu.xml";

if (file_exists($xmlfile)){
	$xml = simplexml_load_file($xmlfile);
}

$menu = $xml->addChild("menu-elem");
$menu->addAttribute("id","test");
$menu->addChild("label","g(5000)");
$menu->addChild("url","ms_test");
$menu->addChild("submenu","");

$xml->asXML($xmlfile);


$xmlfile = "main_menu.xml";

if (file_exists($xmlfile)){
	$xml = simplexml_load_file($xmlfile);
}

$mainmenu = $xml->xpath("/menu/menu-elem[attribute::id='test']/submenu");
$submenu = $mainmenu['0']->addChild("menu-elem");
$submenu->addAttribute("id","ms_test");
$submenu->addChild("label","g(5001)");
$submenu->addChild("url","ms_test");

$xml->asXML($xmlfile);
