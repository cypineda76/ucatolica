<?php
//INICIO LA SESSION
session_name('sessionid');
session_start();
//error_reporting(0);
require_once('lib/common/smarty/libs/Smarty.class.php');
include_once('lib/conex.php');
include_once('lib/dao/clientesDAO.php');
$DB = NewADOConnection(DB_CONFIG);
$DB->Connect(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
$objClientesDAO = new ClientesDAO($DB);
if($_SERVER['REQUEST_METHOD'] == "POST"){
	switch ($_REQUEST['ACC']) {
		case 'LOGIN':
			$login = strtolower(trim($_REQUEST['user_login']));
			$password=$_REQUEST['user_pass'];
			$validar = $objClientesDAO->getUser_admin($login, $password);
			if($validar <= 0){
				$msn = array('val'=>406, 'msn'=>'El usuario no existe');
				echo json_encode($msn);
			}else{
				$_SESSION['CODUSU'] = $validar[0]['user_id'];
				$_SESSION['NOMUSU'] = $validar[0]['user_name'];
				$_SESSION['USUARIO'] = $login;
				$msn = array('val'=>200, 'msn'=>'Solicitud Aceptada');
				echo json_encode($msn);
			}
		break;
		case 'NEWUSER':
			$_REQUEST['user_name'] = (isset($_REQUEST['user_name'])) ? $_REQUEST['user_name'] : "";
			$_REQUEST['user_login'] = (isset($_REQUEST['user_login'])) ? $_REQUEST['user_login'] : "";
			$_REQUEST['user_pass'] = (isset($_REQUEST['user_pass'])) ? $_REQUEST['user_pass'] : "";
			if($_REQUEST['user_name'] == "" || $_REQUEST['user_login'] == "" || $_REQUEST['user_pass'] == ""){
				$msn = array('val'=>406, 'msn'=>'Debe completar todos los campos');
				echo json_encode($msn);
			}else{
				$DB->Execute( "begin work;" );
				$crear = $objClientesDAO->insertUser_admin($_REQUEST['user_name'], $_REQUEST['user_login'], $_REQUEST['user_pass']);
				if($crear <=0){
					$DB->Execute( "rollback work;" );
					$msn = array('val'=>500, 'msn'=>'Erro! No se pudo realizar el proceso');
					die( json_encode( $msn ) );
				}
				$DB->Execute( "commit work;" );
				$msn = array('val'=>200, 'msn'=>'Solicitud Aceptada');
				echo json_encode($msn);
			}
		break;
	}
	
} else {
	if ((!isset($_SESSION['USUARIO'])) || $_SESSION['USUARIO']==""){
		$smarty = new Smarty;
		$smarty->setTemplateDir("templates");
		$smarty->display('login.tpl');
	}else{
		$usuario = $_SESSION['USUARIO'];
		$smarty = new Smarty;
		$smarty->setTemplateDir("templates");
		$smarty->display('index.tpl');
	}
}
?>