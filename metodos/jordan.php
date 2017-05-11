<?php
//error_reporting(0);
require_once('lib/common/smarty/libs/Smarty.class.php');
include_once('funciones.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$ObjFunciones = new FuncionesDAO();
	$gaus = $ObjFunciones->getGaussSolution($_REQUEST['M']);
}
?>