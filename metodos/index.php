<?php
//error_reporting(0);
require_once('lib/common/smarty/libs/Smarty.class.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$smarty = new Smarty;
	$smarty->setTemplateDir("templates/auto");
	$smarty->assign('plantilla',"auto");
	switch ($_REQUEST['ACC']) {
		case 'VTNPARAMETROS':
			$smarty->assign('ejercicio',$_REQUEST['it']);
			$plantilla = 'parametros.tpl';
		break;
		case 'VTNPARAMETROS2':
			$smarty->assign('ejercicio',$_REQUEST['it']);
			$plantilla = 'parametros2.tpl';
		break;
		case 'VTNPARAMETROS3':
			$smarty->assign('ejercicio',$_REQUEST['it']);
			$plantilla = 'parametros5.tpl';
		break;
		case 'VTNPARAMETROS4':
			$smarty->assign('ejercicio',$_REQUEST['it']);
			$plantilla = 'parametros6.tpl';
		break;
		case 'VTNMATRIZ':
			$smarty->assign('ejercicio',$_REQUEST['it']);
			$plantilla = 'parametros3.tpl';
		break;
		case 'VTNMATRIZ2':
			$smarty->assign('ejercicio',$_REQUEST['it']);
			$plantilla = 'parametros4.tpl';
		break;
		case 'GENERARMATRIZ':
			$numfila = $_REQUEST['dimfil'];
			$numcolu = $_REQUEST['dimcol'];
			for($i = 1; $i <= $numfila; $i++ ) {
				$matriz['FIL'][$i] = 0;
				for($j = 1; $j <= $numcolu; $j++ ) {
					if($j!= $numcolu){
						$matriz['TITCOL'][$j] = 0;
					}
					$matriz['COL'][$j] = 0;
					if(isset($_REQUEST['LLENAR'])){
						$matriz['LLE'][$i][$j] = rand(0, 9);
					}else{
						$matriz['LLE'][$i][$j] = '';
					}
				}	
			}
			$smarty->assign('matriz',$matriz);
			$plantilla = 'matriz.tpl';
		break;
		case 'MATRIZAG':
			$smarty->assign('ejercicio',$_REQUEST['it']);
			$plantilla = 'paramag.tpl';
		break;
		case 'GENERARMATRIZAG':
			$numfila = $_REQUEST['dimfil'];
			$numcolu = $_REQUEST['dimcol'];
			for($i = 1; $i <= $numfila; $i++ ) {
				$matriz['FIL'][$i] = 0;
				for($j = 1; $j <= $numcolu; $j++ ) {
					$matriz['TITCOL'][$j] = 0;
					$matriz['COL'][$j] = 0;
					$m[$i][$j] = 1;
				}
			}
			$cont = 1;
			for($i = 1; $i <= count($m); $i++ ) {
				for($j = $cont; $j <= count($m[$i]); $j++ ) {
					if($i == $j){
						$matriz['LLE'][$i][$j] = '0';
					}else{
						if(isset($_REQUEST['LLENAR'])){
							$matriz['LLE'][$i][$j] = rand(0, 9);
						}else{
							$matriz['LLE'][$i][$j] = '';
						}
					}
				}
				$cont ++;
			}
			$smarty->assign('matriz',$matriz);
			$plantilla = 'matrizag.tpl';
		break;
	}
	$smarty->display($plantilla);
} else {
	$smarty = new Smarty;
	$smarty->setTemplateDir("templates/auto");
	$smarty->assign('plantilla',"auto");
	$smarty->display('index.tpl');
}
?>