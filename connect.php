<?php
//Database config
$iniParse = parse_ini_file("../capstone.ini",true);

$current = $iniParse["currentEnv"]["data"];

$db_host       = $iniParse[$current]["sever"];
$db_user       = $iniParse[$current]["user"];
$db_pass       = $iniParse[$current]["password"];
$db_database   = $iniParse[$current]["database"];

$db = new PDO('mysql:host='.$db_host.'; dbname='.$db_database,$db_user,$db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



?>