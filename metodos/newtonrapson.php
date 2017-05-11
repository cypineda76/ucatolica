<?php
error_reporting(1);
require_once('lib/common/smarty/libs/Smarty.class.php');
include_once('funciones.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$smarty = new Smarty;
	$smarty->setTemplateDir("templates/auto");
	$smarty->assign('plantilla',"auto");
	$plantilla = 'tablaresul3.tpl';
	$ObjFunciones = new FuncionesDAO();
	$valor_error = $ObjFunciones->Potencia($_REQUEST['base'], $_REQUEST['exponente']);
	$x[-1] = -5;
	$tmp[0] = 0;
	$maxiter = 20;
	$error[0] = 0;
	$i=0;
	$n=0;
	for($n = 0; $n<=20; $n++){
		$tmp[$n] = $x[$n-1];
		$fn = $ObjFunciones->funcionvariablereal($tmp[$n]);
		$fg = $ObjFunciones->funcionderivada($tmp[$n]);
		$x[$n] = ($tmp[$n]-($fn/$fg));
		if($n>0){
			$error[$n] = $ObjFunciones->ValorAbsoluto($tmp[$n-1]-$x[$n-1]);
		}
		$response['ARR'][$i] = array("n"=>$i, "x"=>$tmp[$n], "fn"=>$fn, "fg"=>$fg, "error"=>$error[$n]);
		if($n > 0 && $error[$n] < $valor_error){
			$response['RESULT'] = array("n"=>$i, "x"=>$tmp[$n], "fn"=>$fn, "fg"=>$fg, "error"=>$error[$n]);
			break;
		}
		$i++;
	}
	$smarty->assign('response', $response);
	$smarty->display($plantilla);
}
?>