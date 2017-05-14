<?php
//INICIO LA SESSION
session_name('sessionid');
session_start();
//error_reporting(0);
require_once('lib/common/smarty/libs/Smarty.class.php');
include_once('lib/conex.php');
include_once('lib/dao/usuarioDAO.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$smarty = new Smarty;
	$smarty->setTemplateDir("templates/auto");
	$smarty->assign('plantilla',"auto");
	switch ($_REQUEST['ACC']) {
		case 'LOGIN':
			$DB = NewADOConnection(DB_CONFIG);
			$DB->Connect(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
			$objusuarioDAO = new usuarioDAO($DB);
			$login = strtolower(trim($_REQUEST['usr']));
      		$password=md5($_REQUEST['pas']);
      		$validar = $objusuarioDAO->iniciarsesion($login, $password);
      		if($validar > 0){
      			$datos = $objusuarioDAO->datosusuario($login);
      			$_SESSION['CODUSU'] = $datos['usucod'];
      			$_SESSION['NOMUSU'] = $datos['usunom'];
      			$_SESSION['USUARIO'] = $login;
      			echo json_encode(1);
      		}else{
      			echo json_encode(0);
      		}
		break;
	}
	
} else {
	$smarty = new Smarty;
	if ((!isset($_SESSION['USUARIO'])) || $_SESSION['USUARIO']==""){
		$smarty->setTemplateDir("templates/".PLANTILLA);
		$smarty->assign('plantilla',PLANTILLA);
		$smarty->display('ingreso.tpl');
	} else {
	    header("Location: index.php");
	    exit(0);
	}
}
?>