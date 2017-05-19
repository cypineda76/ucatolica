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
		$_REQUEST['type_document_id'] = (isset($_REQUEST['type_document_id'])) ? $_REQUEST['type_document_id'] : "";
		$_REQUEST['document'] = (isset($_REQUEST['document'])) ? $_REQUEST['document'] : "";
		$_REQUEST['firts_name'] = (isset($_REQUEST['firts_name'])) ? $_REQUEST['firts_name'] : "";
		$_REQUEST['last_name'] = (isset($_REQUEST['last_name'])) ? $_REQUEST['last_name'] : "";
		$_REQUEST['gender'] = (isset($_REQUEST['gender'])) ? $_REQUEST['gender'] : "";
		$_REQUEST['date_birth'] = (isset($_REQUEST['date_birth'])) ? $_REQUEST['date_birth'] : "";
		$_REQUEST['street'] = (isset($_REQUEST['street'])) ? $_REQUEST['street'] : "";
		$_REQUEST['code_city'] = (isset($_REQUEST['code_city'])) ? $_REQUEST['code_city'] : "";
		$_REQUEST['phone'] = (isset($_REQUEST['phone'])) ? $_REQUEST['phone'] : "";
		$_REQUEST['email'] = (isset($_REQUEST['email'])) ? $_REQUEST['email'] : "";
		$_REQUEST['company_code'] = (isset($_REQUEST['company_code'])) ? $_REQUEST['company_code'] : "";
		$_REQUEST['company_name'] = (isset($_REQUEST['company_name'])) ? $_REQUEST['company_name'] : "";
		if($_REQUEST['type_document_id'] == "" || $_REQUEST['document'] == "" || $_REQUEST['firts_name'] == "" || $_REQUEST['last_name'] == "" || $_REQUEST['gender'] == "" || $_REQUEST['date_birth'] == "" || $_REQUEST['street'] == "" || $_REQUEST['phone'] == "" || $_REQUEST['email'] == ""){
			$msn = array('val'=>406, 'msn'=>'Error! No hay parametros');
			echo json_encode($msn);
		}else{
			$DB->Execute( "begin work;" );
			$crear = $objClientesDAO->insertCustomer($_REQUEST['type_document_id'], $_REQUEST['document'], $_REQUEST['firts_name'], $_REQUEST['last_name'], $_REQUEST['gender'], $_REQUEST['date_birth'], $_REQUEST['street'], $_REQUEST['code_city'], $_REQUEST['phone'], $_REQUEST['email'], $_REQUEST['company_code'], $_REQUEST['company_name']);
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
	case 'PUT': //Actualizar
		if(!isset($_REQUEST['document'])){
			$msn = array('val'=>406, 'msn'=>'Error! No hay parametros');
			die( json_encode( $msn ) );
		}
		$DB->Execute( "begin work;" );
		$_REQUEST['document'] = (isset($_REQUEST['document'])) ? $_REQUEST['document'] : "";
		$_REQUEST['type_document_id'] = (isset($_REQUEST['type_document_id'])) ? $_REQUEST['type_document_id'] : "";
		$_REQUEST['document_mod'] = (isset($_REQUEST['document_mod'])) ? $_REQUEST['document_mod'] : "";
		$_REQUEST['firts_name'] = (isset($_REQUEST['firts_name'])) ? $_REQUEST['firts_name'] : "";
		$_REQUEST['last_name'] = (isset($_REQUEST['last_name'])) ? $_REQUEST['last_name'] : "";
		$_REQUEST['gender'] = (isset($_REQUEST['gender'])) ? $_REQUEST['gender'] : "";
		$_REQUEST['date_birth'] = (isset($_REQUEST['date_birth'])) ? $_REQUEST['date_birth'] : "";
		$_REQUEST['street'] = (isset($_REQUEST['street'])) ? $_REQUEST['street'] : "";
		$_REQUEST['phone'] = (isset($_REQUEST['phone'])) ? $_REQUEST['phone'] : "";
		$_REQUEST['email'] = (isset($_REQUEST['email'])) ? $_REQUEST['email'] : "";
		$actualizar = $objClientesDAO->updateCustomer($_REQUEST['document'], $_REQUEST['type_document_id'], $_REQUEST['document_mod'], $_REQUEST['firts_name'], $_REQUEST['last_name'], $_REQUEST['gender'], $_REQUEST['date_birth'], $_REQUEST['street'], $_REQUEST['phone'], $_REQUEST['email']);
		if($actualizar <=0){
			$DB->Execute( "rollback work;" );
			$msn = array('val'=>500, 'msn'=>'Erro! No se pudo realizar el proceso');
			die( json_encode( $msn ) );
		}
		$DB->Execute( "commit work;" );
		$msn = array('val'=>200, 'msn'=>'Solicitud Aceptada');
		echo json_encode($msn);
	break;
	case 'DELETE': //Borrar
		$_REQUEST['document'] = (isset($_REQUEST['document'])) ? $_REQUEST['document'] : "";
		if(!isset($_REQUEST['document'])){
			$msn = array('val'=>406, 'msn'=>'Error! No hay parametros');
			die( json_encode( $msn ) );
		}
		$DB->Execute( "begin work;" );
		$borrar = $objClientesDAO->deleteCustomer($_REQUEST['document']);
		if($borrar <=0){
			$DB->Execute( "rollback work;" );
			$msn = array('val'=>500, 'msn'=>'Erro! No se pudo realizar el proceso');
			die( json_encode( $msn ) );
		}
		$DB->Execute( "commit work;" );
		$msn = array('val'=>200, 'msn'=>'Solicitud Aceptada');
		echo json_encode($msn);
	break;
	default: //Consultar
		$_REQUEST['document'] = (isset($_REQUEST['document'])) ? $_REQUEST['document'] : "";
		$listacli = $objClientesDAO->getCustomer($_REQUEST['document']);
		if($listacli == ""){
			$msn = array('val'=>407, 'msn'=>'No hay Datos');
			echo json_encode($msn);
		}else{
			echo json_encode($listacli);
		}
	break;
}
?>