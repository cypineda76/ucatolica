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
	$objArticulosDAO = new ArticulosDAO($DB);
	$update = $objArticulosDAO->updateArticulo($_REQUEST['artcod'], $_REQUEST['artnom'], $_REQUEST['artsec'], $_REQUEST['artdes'], $_REQUEST['artimg'], $_REQUEST['artpri'] );
	if($update < 0){
		echo "ERROR";
	}else{
		echo "OK";
	}
} else {
	$objArticulosDAO = new ArticulosDAO($DB);
	$noticias = $objArticulosDAO->getArticulosHome('PRINCIPAL');
	$detalle = $objArticulosDAO->getNoticia($_REQUEST['it']);
	$smarty = new Smarty;
	$smarty->setTemplateDir("templates/auto");
	$smarty->assign('plantilla',"auto");
	$smarty->assign('det',$detalle);
	$smarty->display('editar.tpl');
}
?>