<?php 

// A function for retrieve data from dimensional Array
function MultiArrayListing($array, $filename)
{
	
	$arrayfile = fopen($filename, "a+");
	// For Each Array Element
	foreach($array as $key => $value)
	{
		//If is array then print the array.
		if(is_array($value))
		{
			MultiArrayListing($value, $filename);
		}
		else //Else, print value !
		{
			if ($key == 'NAME'){
				$value = str_replace(" ", "-", $value);
				fputs($arrayfile, $value." ");
			}
			
		}
	}
	fclose($arrayfile);
	return $filename;
}

function XmlToTxt($xmlFile, $txtFileName){
	
	//Load xml file 
	$xml = simplexml_load_file($xmlFile);
	// Encode Xml file into Json
	$json = json_encode($xml);
	// Decode ...
	$array = json_decode($json,TRUE);
	
	$f1 = MultiArrayListing($array['CONTENT']['SOFTWARES'], $txtFileName);
	
	$file = fopen($f1, "r+");
	$get = file_get_contents($f1);
	// retrieve the softwares into a "clean" array structure.
	$exp = explode(" ", $get);
	fclose($file);
	
	unlink($f1);
	
	return $exp;
	
}

function ListRemovedSoftware($arr1, $arr2){
	
	$removesoft = "";
	
	foreach ($arr2 as $key => $value1){
		
		$find = 0;
		
		foreach ($arr1 as $key => $value2){
		
			if ($value1 == $value2){
				$find = 1;
			}		
			
		}
	
		if($find == 0){
			$removesoft = $removesoft.$value1." ";
			echo $value1."N'exsite plus ";
		}
		
	}
	
}

$arr1 = XmlToTxt("xml2.xml", "tmp.txt");
$arr2 = XmlToTxt("xml1.xml", "tmp.txt");

//Search for New installed sofware :
$added = array_diff($arr1, $arr2);
print_r($added);

echo "<br><br>";
//Search for removed software :
$removed = ListRemovedSoftware($arr1, $arr2);
print_r($removed)

?>