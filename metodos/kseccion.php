<?php
error_reporting(0);
ini_set('memory_limit', '-1');
require_once('lib/common/smarty/libs/Smarty.class.php');
include_once('funciones.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$smarty = new Smarty;
	$smarty->setTemplateDir("templates/auto");
	$smarty->assign('plantilla',"auto");
	$plantilla = 'tablaresul6.tpl';
	$ObjFunciones = new FuncionesDAO();
	$valor_error = $ObjFunciones->Potencia($_REQUEST['base'], $_REQUEST['exponente']);
	$a[0] = 0.5;
	$b[0] = 2;
	$dx[0] = 0;
	$fa[0] = 0;
	$fb[0] = 0;
	$i = 0;
	$error[0] = 0;
	##F = array(a,b,xn...)
	##F = array(0,1,2....)
	$k = $_REQUEST['seccion']; //Esto quiere decir que es el numero de secciones
	for($valx = 1; $valx < $k ; $valx ++){
		$x_k[0][$valx] = 0; //Variables de x secciones
		$f_k[0][$valx] = 0; //Funciones de x secciones
		$error_k[0][$valx] = 0; //Errores de x secciones
		$response['TITULO'][$valx] = $valx;
	}
	
	for($n = 0; $n<=200; $n++){
		$dx[$n] = $ObjFunciones->funciondeltax($a[$n], $b[$n], 3);
		$fa[$n] = $ObjFunciones->funcionSeccion($a[$n]);
		$fb[$n] = $ObjFunciones->funcionSeccion($b[$n]);
		$tmp = 0;
		$arr_x[$n][$tmp] = $a[$n];
		$arr_f[$n][$tmp] = $fa[$n];
		for($valx = 1; $valx < $k ; $valx ++){
			$tmp +=1;
			$x_k[$n][$valx] = $ObjFunciones->valorxseccion($a[$n], $dx[$n], $valx);
			$f_k[$n][$valx] = $ObjFunciones->funcionSeccion($x_k[$n][$valx]);
			$arr_x[$n][$tmp] = $x_k[$n][$valx];
			$arr_f[$n][$tmp] = $f_k[$n][$valx];
			if($n>0){
				$error_k[$n][$valx] = $ObjFunciones->ValorAbsoluto($x_k[$n][$valx]-$x_k[$n-1][$valx]);
			}
		}
		
		$tmp +=1;
		$arr_x[$n][$tmp] = $b[$n];
		$arr_f[$n][$tmp] = $fb[$n];
		for ($h=0; $h < $tmp; $h++) {
			$valact = ($arr_f[$n][$h])+0;
			$valsig = ($arr_f[$n][$h+1])+0;
			$producto_f = ($valact*$valsig);
			//echo "<pre>n:".$n.", h:".$h.", valant:".$arr_f[$n][$h-1].", valact:".$valact.", valsig:".$valsig.", producto:".$producto_f.", val_x:".$arr_x[$n][$h]."</pre>";
			if($producto_f < 0){
				$a[$n+1] = $arr_x[$n][$h];
				$b[$n+1] = $arr_x[$n][$h+1];
				break;
			}
		}
		if($n>0){
			$error[$n] = $ObjFunciones->valormaximo($error_k[$n]);
		}
		$response['ARR'][$i] = array("n"=>$n, "a"=>$a[$n], "b"=>$b[$n], "dx"=>$dx[$n], "fa"=>$fa[$n], "fb"=>$fb[$n], "X"=>$x_k[$n], "FX"=>$f_k[$n], "ERROR_X"=>$error_k[$n], "error"=>$error[$n]);
		$i++;
		if($n>0 && $error[$n]<$valor_error){
			$response['RESULT'] =array("n"=>$n, "a"=>$a[$n], "b"=>$b[$n], "dx"=>$dx[$n], "fa"=>$fa[$n], "fb"=>$fb[$n], "X"=>$x_k[$n], "FX"=>$f_k[$n], "ERROR_X"=>$error_k[$n], "error"=>$error[$n]);
			break;
		}
	}
	$smarty->assign('response', $response);
	$smarty->display($plantilla);
}
?>