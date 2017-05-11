<?php
//error_reporting(0);
require_once('lib/common/smarty/libs/Smarty.class.php');
include_once('funciones.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$smarty = new Smarty;
	$smarty->setTemplateDir("templates/auto");
	$smarty->assign('plantilla',"auto");
	$plantilla = 'tablaresul7.tpl';
	$ObjFunciones = new FuncionesDAO();
	$valor_error = $ObjFunciones->Potencia($_REQUEST['base'], $_REQUEST['exponente']);
	$xn[0] = $_REQUEST['valx'];
	$yn[0] = $_REQUEST['valy'];
	$zn[0] = $_REQUEST['valz'];
	$filax = array('X'=>$_REQUEST['M'][1][1], 'Y'=>$_REQUEST['M'][1][2], 'Z'=>$_REQUEST['M'][1][3], 'B'=>$_REQUEST['M'][1][4]);
	$filay = array('X'=>$_REQUEST['M'][2][1], 'Y'=>$_REQUEST['M'][2][2], 'Z'=>$_REQUEST['M'][2][3], 'B'=>$_REQUEST['M'][2][4]);
	$filaz = array('X'=>$_REQUEST['M'][3][1], 'Y'=>$_REQUEST['M'][3][2], 'Z'=>$_REQUEST['M'][3][3], 'B'=>$_REQUEST['M'][3][4]);
	/*$filax = array('X'=>(-7), 'Y'=>(1), 'Z'=>(-1), 'B'=>(-10.5));
	$filay = array('X'=>(2), 'Y'=>(-5), 'Z'=>(2), 'B'=>(1.1));
	$filaz = array('X'=>(2), 'Y'=>(3), 'Z'=>(-8), 'B'=>(-12.3));*/
	$i = 0;
	$errorx[0] = 0;
	$errory[0] = 0;
	$errorz[0] = 0;
	$error[0] = 0;
	$error_k[0] = 0;
	for($n = 0; $n<=12; $n++){
		if($n>0){
			$xn[$n] = (($filax['B']-($filax['Y']*$yn[$n-1]+$filax['Z']*$zn[$n-1]))/$filax['X']);
			$yn[$n] = (($filay['B']-($filay['X']*$xn[$n]+$filay['Z']*$zn[$n-1]))/$filay['Y']);
			$zn[$n] = (($filaz['B']-($filaz['X']*$xn[$n]+$filaz['Y']*$yn[$n]))/$filaz['Z']);
			$errorx[$n] = $ObjFunciones->ValorAbsoluto($xn[$n]-$xn[$n-1]);
			$errory[$n] = $ObjFunciones->ValorAbsoluto($yn[$n]-$yn[$n-1]);
			$errorz[$n] = $ObjFunciones->ValorAbsoluto($zn[$n]-$zn[$n-1]);
			$error_k[$n] = array($errorx[$n], $errory[$n], $errorz[$n]);
			$error[$n] = $ObjFunciones->valormaximo($error_k[$n]);
		}
		$response['ARR'][$i] = array("n"=>$n, "X"=>$xn[$n], "Y"=>$yn[$n], "Z"=>$zn[$n], "ERRORX"=>$errorx[$n], "ERRORY"=>$errory[$n], "ERRORZ"=>$errorz[$n], "error"=>$error[$n]);
		$i++;
		if($n>0 && $error[$n]<$valor_error){
			$response['RESULT'] = array("n"=>$n, "X"=>$xn[$n], "Y"=>$yn[$n], "Z"=>$zn[$n], "ERRORX"=>$errorx[$n], "ERRORY"=>$errory[$n], "ERRORZ"=>$errorz[$n], "error"=>$error[$n]);
			break;
		}
	}
	$smarty->assign('response', $response);
	$smarty->display($plantilla);
}
?>