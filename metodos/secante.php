<?php
//error_reporting(0);
require_once('lib/common/smarty/libs/Smarty.class.php');
include_once('funciones.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$smarty = new Smarty;
	$smarty->setTemplateDir("templates/auto");
	$smarty->assign('plantilla',"auto");
	$plantilla = 'tablaresul2.tpl';
	$ObjFunciones = new FuncionesDAO();
	$valor_error = $ObjFunciones->Potencia($_REQUEST['base'], $_REQUEST['exponente']);
	$a[0] = 1;
	$b[0] = 2;
	$fa[0] = 0;
	$fb[0] = 0;
	$m[0] = 0;
	$x[0] = 0;
	$fx[0] = 0;
	$i = 0;
	$error[0] = 0;
	for($n = 0; $n<=200; $n++){
		if($n>0){
			if ($fa[$n-1]*$fx[$n-1] <0){
				$a[$n] = $a[$n-1];
				$b[$n] = $x[$n-1];
			}else{
				$a[$n] = $x[$n-1];
				$b[$n] = $b[$n-1];
			}
		}
		$fa[$n] = $ObjFunciones->fnSecante($ObjFunciones->LogaritmoNatural($ObjFunciones->Potencia($a[$n], 2)+1), $ObjFunciones->Exponencial($a[$n]), $ObjFunciones->Coseno($a[$n]));
		$fb[$n] = $ObjFunciones->fnSecante($ObjFunciones->LogaritmoNatural($ObjFunciones->Potencia($b[$n], 2)+1), $ObjFunciones->Exponencial($b[$n]), $ObjFunciones->Coseno($b[$n]));
		$m[$n] = (($fb[$n]-$fa[$n])/($b[$n]-$a[$n]));
		$x[$n] = ($a[$n]-($fa[$n]/$m[$n]));
		$fx[$n] = $ObjFunciones->fnSecante($ObjFunciones->LogaritmoNatural($ObjFunciones->Potencia($x[$n], 2)+1), $ObjFunciones->Exponencial($x[$n]), $ObjFunciones->Coseno($x[$n]));
		if($n>0){
			$error[$n] = $ObjFunciones->ValorAbsoluto($x[$n]-$x[$n-1]);
		}
		$response['ARR'][$i] = array("n"=>$n, "a"=>$a[$n], "b"=>$b[$n], "x"=>$x[$n], "fa"=>$fa[$n], "fb"=>$fb[$n], "fx"=>$fx[$n], "m"=>$m[$n], "error"=>$error[$n]);
		$i++;
		if($n>0 && $error[$n]<$valor_error){
			$response['RESULT'] = array("n"=>$n, "a"=>$a[$n], "b"=>$b[$n], "x"=>$x[$n], "fa"=>$fa[$n], "fb"=>$fb[$n], "fx"=>$fx[$n], "m"=>$m[$n], "error"=>$error[$n]);
			break;
		}
	}
	$smarty->assign('response', $response);
	$smarty->display($plantilla);
}
?>