<?php
//error_reporting(0);
require_once('lib/common/smarty/libs/Smarty.class.php');
include_once('funciones.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
	
	$smarty = new Smarty;
	$smarty->setTemplateDir("templates/auto");
	$smarty->assign('plantilla',"auto");
	$plantilla = 'tablaresul1.tpl';
	$ObjFunciones = new FuncionesDAO();
	$valor_error = $ObjFunciones->Potencia($_REQUEST['base'], $_REQUEST['exponente']);
	$a = -1;
	$b = 0;
	$x  = 0;
	$fa = 0;
	$fb = 0 ;
	$fx = 0 ;
	$error_temporal = 0;
	$error_calc3 = 1; 
	$arr_err = array();
	$contador = 0 ;
	$i=0;
	while($valor_error < $error_calc3 ) {
		$x = (($a+$b)/2);
		$potenciaA = $ObjFunciones->Potencia($a, 2);
		$potenciaB = $ObjFunciones->Potencia($b, 2);
		$potenciaX = $ObjFunciones->Potencia($x, 2);
		$lognatA = $ObjFunciones->LogaritmoNatural($potenciaA+1);
		$lognatB = $ObjFunciones->LogaritmoNatural($potenciaB+1);
		$lognatX = $ObjFunciones->LogaritmoNatural($potenciaX+1);
		$fa = $ObjFunciones->fnbiseccion($lognatA, $a);
		$fb = $ObjFunciones->fnbiseccion($lognatB, $b);
		$fx = $ObjFunciones->fnbiseccion($lognatX, $x);
		if($contador > 0){
			array_push($arr_err, $x);
		}

		if (count($arr_err) >=2){
			$error_calc3 = abs($arr_err[count($arr_err)-1] - $arr_err[count($arr_err) -2]);
			if ($error_calc3 < $valor_error){
				$error_temporal = $error_calc3;
				$error_calc3 = 0;
				$contador = $contador-1;
			}
		}
		if ($fa*$fx <0){
			$a = $a;
			$b = $x;
		}else{
			$a = $x;
			$b = $b;
		}
		$contador =  $contador + 1;
		$response['ARR'][$i] = array("n"=>$contador, "a"=>$a, "b"=>$b, "x"=>$x, "fa"=>$fa, "fb"=>$fb, "fx"=>$fx, "error"=>$error_temporal);
		$i++;
	}
	$response['RESULT'] = array("n"=>$contador, "a"=>$a, "b"=>$b, "x"=>$x, "fa"=>$fa, "fb"=>$fb, "fx"=>$fx, "error"=>$error_temporal);
	$smarty->assign('response', $response);
	$smarty->display($plantilla);
}
?>