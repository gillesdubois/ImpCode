<?php

$reading = fopen('english.txt', 'a+');
$writing = fopen('english.tmp', 'w');

$replaced = false;

while (!feof($reading)) {
  $line = fgets($reading);
  if (stristr($line,'7000 monplugin')) {
    $line = "";
    $replaced = true;
  }
  fputs($writing, $line);
}
fclose($reading); fclose($writing);
// might as well not overwrite the file if we didn't replace anything
if ($replaced) 
{
  rename('english.tmp', 'english.txt');
} else {
  unlink('english.tmp');
}

?>