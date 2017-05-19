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
	case 'GET':
		$_REQUEST['ACC'] = (isset($_REQUEST['ACC'])) ? $_REQUEST['ACC'] : "";
		switch ($_REQUEST['ACC']) {
			case 'country':
				$listcountry = $objClientesDAO->getCountry();
				echo json_encode($listcountry);
			break;
			case 'department':
				$_REQUEST['country'] = (isset($_REQUEST['country'])) ? $_REQUEST['country'] : "";
				$list = $objClientesDAO->getDepartment($_REQUEST['country']);
				echo json_encode($list);
			break;
			case 'city':
				$_REQUEST['department'] = (isset($_REQUEST['department'])) ? $_REQUEST['department'] : "";
				$list = $objClientesDAO->getCity($_REQUEST['department']);
				echo json_encode($list);
			break;
		}
	break;
}
?>