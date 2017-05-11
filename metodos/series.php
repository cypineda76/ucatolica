<?php
//error_reporting(0);
require_once('lib/common/smarty/libs/Smarty.class.php');
include_once('funciones.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
	
	$smarty = new Smarty;
	$smarty->setTemplateDir("templates/auto");
	$smarty->assign('plantilla',"auto");
	$plantilla = 'tablaresul.tpl';
	$ObjFunciones = new FuncionesDAO();
	$valor_error = $ObjFunciones->Potencia($_REQUEST['base'], $_REQUEST['exponente']);
	$s_n[0]=0;
	$error[0] = 0;
	$a_n = array();
	$i = 0;
	switch ($_REQUEST['ACC']) {
		case "SERIE1":
			for($n = 1; $n<=200; $n++){
				$potencia = $ObjFunciones->Potencia($n, 2);
				$a_n[$n] = (1/$potencia);
				$s_n[$n] = $ObjFunciones->serie_n($a_n[$n], $s_n[$n-1]);
				$error[$n] = $ObjFunciones->ValorAbsoluto($s_n[$n]-$s_n[$n-1]);
				$response['ARR'][$i] = array("n"=>$n, "a_n"=>$a_n[$n], "s_n"=>$s_n[$n], "error"=>$error[$n]);
				$i++;
				if($error[$n]<$valor_error){
					$response['RESULT'] = array("n"=>$n, "a_n"=>$a_n[$n], "s_n"=>$s_n[$n], "error"=>$error[$n]);
					break;
				}
			}
			$smarty->assign('imagen', 'img/serie1.png');
		break;
		case "SERIE2":
			for($n = 0; $n<=200; $n++){
				$potencia = $ObjFunciones->Potencia($n, 2);
				$a_n[$n] = (1/(1+$potencia));
				$s_n[$n] = $ObjFunciones->serie_n($a_n[$n], $s_n[$n-1]);
				$error[$n] = $ObjFunciones->ValorAbsoluto($s_n[$n]-$s_n[$n-1]);
				$response['ARR'][$i] = array("n"=>$n, "a_n"=>$a_n[$n], "s_n"=>$s_n[$n], "error"=>$error[$n]);
				$i++;
				if($error[$n]<$valor_error){
					$response['RESULT'] = array("n"=>$n, "a_n"=>$a_n[$n], "s_n"=>$s_n[$n], "error"=>$error[$n]);
					break;
				}
			}
			$smarty->assign('imagen', 'img/serie2.png');
		break;
		case "SERIE3":
			for($n = 0; $n<=200; $n++){
				$operador = ((2*$n)+1);
				$potencia1 = $ObjFunciones->Potencia(-1, $operador); // -1^(2*$n)+1
				$potencia2 = $ObjFunciones->Potencia(0.5, $operador); // 0.5^(2*$n)+1
				$factorial = $ObjFunciones->factorial($operador); //Funcion para obtener el factorial
				$a_n[$n] = (($potencia1)*($potencia2/$factorial)); // [-1^(2*$n)+1]*([0.5^(2*$n)+1]/factorial)
				$s_n[$n] = $ObjFunciones->serie_n($a_n[$n], $s_n[$n-1]);
				$error[$n] = $ObjFunciones->ValorAbsoluto($s_n[$n]-$s_n[$n-1]);
				$response['ARR'][$i] = array("n"=>$n, "a_n"=>$a_n[$n], "s_n"=>$s_n[$n], "error"=>$error[$n]);
				$i++;
				if($error[$n]<$valor_error){
					$response['RESULT'] = array("n"=>$n, "a_n"=>$a_n[$n], "s_n"=>$s_n[$n], "error"=>$error[$n]);
					break;
				}
			}
			$smarty->assign('imagen', 'img/serie3.png');
		break;
	}
	$smarty->assign('response', $response);
	$smarty->display($plantilla);
}
?>