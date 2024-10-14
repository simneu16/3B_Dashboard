<?php
$tmp = basename($_SERVER['SCRIPT_NAME']);
$tmp = str_replace('.php', '', $tmp);
$pageName = ucfirst($tmp); 
 ?>