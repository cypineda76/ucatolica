<?php
//error_reporting(0);
require_once('lib/common/smarty/libs/Smarty.class.php');
include_once('funciones.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$smarty = new Smarty;
	$smarty->setTemplateDir("templates/auto");
	$smarty->assign('plantilla',"auto");
	$plantilla = 'tablaresul8.tpl';
	$ObjFunciones = new FuncionesDAO();	
	$a = $_REQUEST['para'];
	$b = $_REQUEST['parb'];
	$n = $_REQUEST['parn'];
	$h = (($b-$a)/$n);
	$tottrapecio = 0;
	$totsimpson = 0;
	$totboole = 0;
	$response['TIT'] = array('a'=>$a, 'b'=>$b, 'n'=>$n, 'h'=>$h);

	$m[0] = 0;
	for($i = 1; $i<=($n+1); $i++){
		$m[$i-1];
		$xi[$i] = ($a+$m[$i-1]*$h);
		$yi[$i] = $ObjFunciones->Potencia($xi[$i], 3);
		$temp[$i] = array("it"=>$i, "xi"=>$xi[$i], "yi"=>$yi[$i]);
		$m[$i] = $i;
	}
	for($j = 1; $j<=$n; $j++){
		if($j<=$n){
			$trapecio = $ObjFunciones->trapecio($h, $yi[$j], $yi[$j+1]);
			$tottrapecio += $trapecio;
		}else{
			$trapecio = "";
		}
		$multsimpson = $ObjFunciones->multiplo($j, 2);
		if($multsimpson == 1){
			$simpson = $ObjFunciones->simpson($h, $yi[$j-1], $yi[$j], $yi[$j+1]);
			$totsimpson += $simpson;
		}else{
			$simpson = "";
		}
		$multboole = $ObjFunciones->multiplo($j, 4);
		if($multboole == 1){
			$boole = $ObjFunciones->boole($h, $yi[$j-3], $yi[$j-2], $yi[$j-1], $yi[$j], $yi[$j+1]);
			$totboole += $boole;
		}else{
			$boole = "";
		}
		$response['ARR'][] = array('it'=>$j, 'xi'=>$xi[$j], 'yi'=>$yi[$j], "trapecio"=>$trapecio, "simpson"=>$simpson, "boole"=>$boole);
		$response['TOT'] = array("trapecio"=>$tottrapecio, "simpson"=>$totsimpson, "boole"=>$totboole);
	}
	$smarty->assign('response', $response);
	$smarty->display($plantilla);
}
?>