<?php

$xmlfile = "main_menu.xml";

if (file_exists($xmlfile)){
	$xml = simplexml_load_file($xmlfile);
}

$menu = $xml->addChild("menu-elem");
$menu->addAttribute("id","ms_plugins_name");
$menu->addChild("label","g(50000)");
$menu->addChild("url","ms_plugins_name");

$xml->asXML($xmlfile);

$xmlfile = "urls.xml";

if (file_exists($xmlfile)){
	$xml = simplexml_load_file($xmlfile);
}

$urls = $xml->addChild("url");
$urls->addAttribute("key","ms_plugins_name");
$urls->addChild("value","plugin_exmple");
$urls->addChild("directory","ms_plugins_name");

$xml->asXML($xmlfile);

$xmlfile = "sadmin.xml";

if (file_exists($xmlfile)){
	$xml = simplexml_load_file($xmlfile);
}

$xml->pages->addChild("page","ms_plugin_name");

$xml->asXML($xmlfile);

?>