<?php
//INICIO LA SESSION
session_name('sessionid');
session_start();
//error_reporting(0);
require_once('lib/common/smarty/libs/Smarty.class.php');
include_once('lib/conex.php');
$DB = NewADOConnection(DB_CONFIG);
$DB->Connect(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
if($_SERVER['REQUEST_METHOD'] == "POST"){
	
} else {
	
	$smarty = new Smarty;
	$smarty->setTemplateDir("templates");
	$smarty->display('index.tpl');
}
?>