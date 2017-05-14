<?php
//INICIO LA SESSION
session_name('sessionid');
session_start();
//error_reporting(0);
require_once('lib/common/smarty/libs/Smarty.class.php');
include_once('lib/conex.php');
include_once('lib/dao/usuarioDAO.php');
$DB = NewADOConnection(DB_CONFIG);
$DB->Connect(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
if($_SERVER['REQUEST_METHOD'] == "POST"){	
	$objUsuarioDAO = new UsuarioDAO($DB);
	$insert = $objUsuarioDAO->insertarUsuario($_REQUEST['usunom'], $_REQUEST['usulog'], md5($_REQUEST['usupas']));
	if($insert < 0){
		echo "ERROR";
	}else{
		echo "OK";
	}
} else {
	if ((!isset($_SESSION['USUARIO'])) || $_SESSION['USUARIO']==""){
		$usuario="";
	}else{
		$usuario = $_SESSION['USUARIO'];
	}
	$smarty = new Smarty;
	$smarty->setTemplateDir("templates/auto");
	$smarty->assign('plantilla',"auto");
	$smarty->assign('usuario',$usuario);
	$smarty->display('registro.tpl');
}
?>