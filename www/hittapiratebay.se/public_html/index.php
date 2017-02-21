<?php
$settingsFile = "../settings.txt";
if (!(is_file($settingsFile))) die('settings.txt does not exist');
$ini = parse_ini_file($settingsFile); 
include('../../template.php');
