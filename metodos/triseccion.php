<?php
error_reporting(0);
require_once('lib/common/smarty/libs/Smarty.class.php');
include_once('funciones.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$smarty = new Smarty;
	$smarty->setTemplateDir("templates/auto");
	$smarty->assign('plantilla',"auto");
	$plantilla = 'tablaresul5.tpl';
	$ObjFunciones = new FuncionesDAO();
	$valor_error = $ObjFunciones->Potencia($_REQUEST['base'], $_REQUEST['exponente']);
	$a[0] = 0.5;
	$b[0] = 2;
	$dx[0] = 0;
	$x1[0] = 0;
	$x2[0] = 0;
	$fa[0] = 0;
	$fb[0] = 0;
	$fx1[0] = 0;
	$fx2[0] = 0;
	$i = 0;
	$error1[0] = 0;
	$error2[0] = 0;
	$error[0] = 0;
	$k = 3; //Esto quiere decir que es triseccion
	for($n = 0; $n<=200; $n++){
		if($n>0){
			if ($fa[$n-1]*$fx1[$n-1] <0){
				$a[$n] = $a[$n-1];
				$b[$n] = $x1[$n-1];
			}else{
				if($x1[$n-1]*$x2[$n-1] <0){
					$a[$n] = $x1[$n-1];
				}else{
					$a[$n] = $x2[$n-1];
				}
				if($fx1[$n-1]*$fx2[$n-1] <0){
					$b[$n] = $x2[$n-1];
				}else{
					$b[$n] = $b[$n-1];
				}
			}
		}
		$dx[$n] = (($b[$n]-$a[$n])/$k);
		$x1[$n] = ($a[$n]+$dx[$n]);
		$x2[$n] = ($a[$n]+(($k-1)*$dx[$n]));
		$fa[$n] = ($ObjFunciones->Exponencial($a[$n])-1/$a[$n]);
		$fb[$n] = ($ObjFunciones->Exponencial($b[$n])-1/$b[$n]);
		$fx1[$n] = ($ObjFunciones->Exponencial($x1[$n])-1/$x1[$n]);
		$fx2[$n] = ($ObjFunciones->Exponencial($x2[$n])-1/$x2[$n]);

		if($n>0){
			$error1[$n] = $ObjFunciones->ValorAbsoluto($x1[$n]-$x1[$n-1]);
			$error2[$n] = $ObjFunciones->ValorAbsoluto($x2[$n]-$x2[$n-1]);
			$arrx[$n] = array($error1[$n], $error2[$n]);
			$error[$n] = $ObjFunciones->valormaximo($arrx[$n]);
		}
		$response['ARR'][$i] = array("n"=>$n, "a"=>$a[$n], "b"=>$b[$n], "dx"=>$dx[$n], "x1"=>$x1[$n], "x2"=>$x2[$n], "fa"=>$fa[$n], "fb"=>$fb[$n], "fx1"=>$fx1[$n], "fx2"=>$fx2[$n], "error1"=>$error1[$n], "error2"=>$error2[$n], "error"=>$error[$n]);
		$i++;
		if($n>0 && $error[$n]<$valor_error){
			$response['RESULT'] = array("n"=>$n, "a"=>$a[$n], "b"=>$b[$n], "dx"=>$dx[$n], "x1"=>$x1[$n], "x2"=>$x2[$n], "fa"=>$fa[$n], "fb"=>$fb[$n], "fx1"=>$fx1[$n], "fx2"=>$fx2[$n], "error1"=>$error1[$n], "error2"=>$error2[$n], "error"=>$error[$n]);
			break;
		}
	}
	//print_r($response);
	$smarty->assign('response', $response);
	$smarty->display($plantilla);
}
?>