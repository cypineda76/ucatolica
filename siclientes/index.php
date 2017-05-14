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
	case 'POST':
	echo json_encode("Esto Crea");
	break;
	case 'PUT':
	echo json_encode("Esto actualiza");
	break;
	case 'DELETE':
	echo json_encode("Esto borra");
	break;
	default: //GET
	$list = $objClientesDAO->getCustomer('1018436197');
	echo $list;
	break;
}
?>