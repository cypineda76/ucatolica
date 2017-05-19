<?php
//INICIO LA SESSION
//session_name('sessionid');
//session_start();
//error_reporting(0);
require_once('lib/common/smarty/libs/Smarty.class.php');
include_once('lib/conex.php');
include_once('lib/dao/clientesDAO.php');
header('Content-Type: application/json');
$DB = NewADOConnection(DB_CONFIG);
$DB->Connect(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
$objClientesDAO = new ClientesDAO($DB);
switch ($_SERVER['REQUEST_METHOD']) {
	case 'POST': //Crear
		$_REQUEST['usunom'] = (isset($_REQUEST['usunom'])) ? $_REQUEST['usunom'] : "";
		$_REQUEST['usulog'] = (isset($_REQUEST['usulog'])) ? $_REQUEST['usulog'] : "";
		$_REQUEST['usupas'] = (isset($_REQUEST['usupas'])) ? $_REQUEST['usupas'] : "";
		$_REQUEST['document'] = (isset($_REQUEST['document'])) ? $_REQUEST['document'] : "";
		if($_REQUEST['usunom'] == "" || $_REQUEST['usulog'] == "" || $_REQUEST['usupas'] == "" || $_REQUEST['document'] == ""){
			$msn = array('val'=>406, 'msn'=>'Debe completar todos los campos');
			echo json_encode($msn);
		}else{
			$DB->Execute( "begin work;" );
			$crear = $objClientesDAO->insertUser_customer($_REQUEST['document'], $_REQUEST['usunom'], $_REQUEST['usulog'], $_REQUEST['usupas']);
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
	default: //Consultar
		$_REQUEST['usulog'] = (isset($_REQUEST['usulog'])) ? $_REQUEST['usulog'] : "";
		$_REQUEST['usupas'] = (isset($_REQUEST['usupas'])) ? $_REQUEST['usupas'] : "";
		if($_REQUEST['usulog'] != '' && $_REQUEST['usupas']!=''){
			$listausu = $objClientesDAO->getUser_customer($_REQUEST['usulog'], $_REQUEST['usupas']);
			if($listausu <= 0){
				$msn = array('val'=>406, 'msn'=>'El usuario no existe');
				echo json_encode($msn);
			}else{
				echo json_encode($listausu);
			}
		}else{
			$msn = array('val'=>500, 'msn'=>'Debe completar todos los campos');
			echo json_encode($msn);
		}
	break;
}
?>