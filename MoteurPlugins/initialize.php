<?php

define('PLUGINS_DL_DIR', '/var/lib/ocsinventory-reports/download/plugins/');
define('PLUGINS_DIR', '/usr/share/ocsinventory-reports/ocsreports/plugins/main_sections/');

require 'install.php';
require 'check.php';
require 'scan_downloaded_plugins.php';
require 'scan_plugins_dir.php';

scan_downloaded_plugins();

$forCheck = scan_for_plugins();

// Debug purposes
//var_dump($forCheck);

check($forCheck);

?>