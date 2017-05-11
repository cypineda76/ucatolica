<?php
error_reporting(0);
require_once('lib/common/smarty/libs/Smarty.class.php');
include_once( 'lib/common/charts/Highchart.php' );
include_once('funciones.php');
include_once('linear_regression.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$smarty = new Smarty;
	$smarty->setTemplateDir("templates/auto");
	$smarty->assign('plantilla',"auto");
	$plantilla = 'tablaresul9.tpl';
	$ObjFunciones = new FuncionesDAO();
	$h = $_REQUEST['parh'];
	$xi[1]	= $_REQUEST['parx'];
	$yi[1]	= $_REQUEST['pary'];
	$i = 1;
	$iteraciones = 1000;
	switch ($_REQUEST['parrk']) {
		case '1':
			for($n = 1; $n<=$iteraciones; $n++){
				if($n > 1){
					$xi[$n] = $ObjFunciones->suma($xi[$n-1], $h);
					$yi[$n] = $ObjFunciones->suma($yi[$n-1], $k[$n-1]*$h);
				}
				//if($xi[$n]<2){
					$k[$n] = $xi[$n]*$yi[$n];
					$arr[$n] = array('i'=>$i, 'x'=>$xi[$n], 'y'=>$yi[$n], 'k'=>$k[$n]);
				//}
				$i++;
				/*if($xi[$n]>=2){
					$arr[$n] = array('i'=>$i, 'x'=>$xi[$n], 'y'=>$yi[$n], 'k'=>'');
					break;
				}*/
			}
		break;
		case '2':
			for($n = 1; $n<=$iteraciones; $n++){
				if($n > 1){
					$xi[$n] = $ObjFunciones->suma($xi[$n-1], $h);
					$yi[$n] = $ObjFunciones->suma($yi[$n-1], $k[$n-1]*$h);
				}
				//if($xi[$n]<2){
					$k1[$n] = $xi[$n]*$yi[$n];
					$k2[$n] = (($ObjFunciones->suma($xi[$n], $h))*($ObjFunciones->suma($yi[$n], $h*$k1[$n])));
					$k[$n] = (($k1[$n]+$k2[$n])/2);
					$arr[$n] = array('i'=>$i, 'x'=>$xi[$n], 'y'=>$yi[$n], 'k1'=>$k1[$n], 'k2'=>$k2[$n], 'k'=>$k[$n]);
				//}
				$i++;
				/*if($xi[$n]>=2){
					$arr[$n] = array('i'=>$i, 'x'=>$xi[$n], 'y'=>$yi[$n], 'k1'=>'', 'k2'=>'', 'k'=>'');
					break;
				}*/
			}
		break;
		case '3':
			for($n = 1; $n<=$iteraciones; $n++){
				if($n > 1){
					$xi[$n] = $ObjFunciones->suma($xi[$n-1], $h);
					$yi[$n] = $ObjFunciones->suma($yi[$n-1], $k[$n-1]*$h);
				}
				//if($xi[$n]<2){
					$k1[$n] = $xi[$n]*$yi[$n];
					$k2[$n] = (($ObjFunciones->suma($xi[$n], $h/2))*($ObjFunciones->suma($yi[$n], $h*$k1[$n]/2)));
					$k3[$n] = $ObjFunciones->multiplicacion($ObjFunciones->suma($xi[$n], $h), $ObjFunciones->suma($ObjFunciones->resta($yi[$n], $h*$k1[$n]), $ObjFunciones->multiplicacion($ObjFunciones->multiplicacion(2,$h),$k2[$n])));
					$k[$n] = (($k1[$n]+4*$k2[$n]+$k3[$n])/6);
					$arr[$n] = array('i'=>$i, 'x'=>$xi[$n], 'y'=>$yi[$n], 'k1'=>$k1[$n], 'k2'=>$k2[$n], 'k3'=>$k3[$n], 'k'=>$k[$n]);
				//}
				$i++;
				/*if($xi[$n]>=2){
					$arr[$n] = array('i'=>$i, 'x'=>$xi[$n], 'y'=>$yi[$n], 'k1'=>'', 'k2'=>'', 'k3'=>'', 'k'=>'');
					break;
				}*/
			}
		break;
		case '4':
			for($n = 1; $n<=$_REQUEST['parn']; $n++){
				if($n > 1){
					$xi[$n] = $ObjFunciones->suma($xi[$n-1], $h);
					$yi[$n] = $ObjFunciones->suma($yi[$n-1], $k[$n-1]*$h);
				}
				//if($xi[$n]<2){
					$k1[$n] = $xi[$n]*$yi[$n];
					$k2[$n] = (($ObjFunciones->suma($xi[$n], $h/2))*($ObjFunciones->suma($yi[$n], $k1[$n]*$h/2)));
					$k3[$n] = (($ObjFunciones->suma($xi[$n], $h/2))*($ObjFunciones->suma($yi[$n], $k2[$n]*$h/2)));
					$k4[$n] = (($ObjFunciones->suma($xi[$n], $h))*($ObjFunciones->suma($yi[$n], $k3[$n]*$h)));
					$k[$n] = (($k1[$n]+2*$k2[$n]+2*$k3[$n]+$k4[$n])/6);
					$arr[$n] = array('i'=>$i, 'x'=>$xi[$n], 'y'=>$yi[$n], 'k1'=>$k1[$n], 'k2'=>$k2[$n], 'k3'=>$k3[$n], 'k4'=>$k4[$n], 'k'=>$k[$n]);
				//}
				$i++;
				//if($xi[$n]>=2){
					//$arr[$n] = array('i'=>$i, 'x'=>$xi[$n], 'y'=>$yi[$n], 'k1'=>'', 'k2'=>'', 'k3'=>'', 'k4'=>'', 'k'=>'');
					//break;
				//}
			}
		break;
	}
	
	foreach ($arr as $key => $value) {
		$xs[] = $value['x'];
		$ys[] = $value['y'];
	}
	//#########################charts#########################
    $chart = new Highchart();
	$chart->chart = array('renderTo' => 'grafica', 'type' => 'scatter');
	$chart->xAxis->categories = $xs;
	$chart->series[] = array('data' => $ys);
	$res8=$chart->render("char");
	$smarty->assign('response', $arr);
	$smarty->assign('rk', $_REQUEST['parrk']);
	$smarty->assign('graf', $res8);
	$smarty->display($plantilla);
}
?>