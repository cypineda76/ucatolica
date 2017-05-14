<?php
//INICIO LA SESSION
session_name('sessionid');
session_start();
//error_reporting(0);
require_once('lib/common/smarty/libs/Smarty.class.php');
include_once('lib/conex.php');
include_once('lib/dao/articulosDAO.php');
$DB = NewADOConnection(DB_CONFIG);
$DB->Connect(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$smarty = new Smarty;
	$smarty->setTemplateDir("templates/auto");
	$smarty->assign('plantilla',"auto");
	switch ($_REQUEST['ACC']) {
		
	}
	$smarty->display($plantilla);
} else {
	if ((!isset($_SESSION['USUARIO'])) || $_SESSION['USUARIO']==""){
		$usuario="";
	}else{
		$usuario = $_SESSION['USUARIO'];
	}
	$objArticulosDAO = new ArticulosDAO($DB);
	$noticias = $objArticulosDAO->getArticulosHome('PRINCIPAL');
	$smarty = new Smarty;
	$smarty->setTemplateDir("templates/auto");
	$smarty->assign('plantilla',"auto");
	$smarty->assign('usuario',$usuario);
	$smarty->assign('noticias',$noticias);
	$smarty->display('index.tpl');
}
?>