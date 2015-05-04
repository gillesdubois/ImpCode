<?php

$zip = new ZipArchive;

if($zip->open('/var/www/html/TestOcs/1234/package-2.zip', ZipArchive::CREATE) == TRUE)
{
	echo "package-2.zip ouvert   ";
	$zip->addFile('test.txt', 'th.exe');
	$zip->close();
	
	$holder = fopen("/var/www/html/TestOcs/1234/info","w+");
	fwrite($holder, "Je suis une info importante !");
	
	$zip2 = new ZipArchive;
	
	if($zip2->open('/var/www/html/TestOcs/package-1.zip', ZipArchive::CREATE) == TRUE)
	{
		echo 'package-1.zip ouvert';
		$zip2 -> addEmptyDir("4321");
		$zip2 -> addFile('/var/www/html/TestOcs/1234/package-2.zip','4321/');
		$zip2 -> addFile('/var/www/html/TestOcs/1234/info','4321/');
		$zip2 -> close();
		
		$holder = fopen("/var/www/html/TestOcs/info2","w+");
		fwrite($holder, "Je suis une info importante !");
	}
	else
	{
		echo 'Impossible d&#039;ouvrir &quot;Zip.zip&quot;';
	}
	
	
}
else
{
	echo 'Impossible d&#039;ouvrir &quot;Zip.zip&quot;';
}


?>