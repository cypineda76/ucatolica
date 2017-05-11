<?php
    include_once('lib/param.inc.php');	
	include_once('lib/adodb/adodb.inc.php');    # Carga el codigo comun de ADOdb	
	// Parametrizacion de MySql
	if(isset($_SESSION['TIPO_USUARIO'])){
		$DBi = NewADOConnection(DB_CONFIG);
		$DBi->SetFetchMode(ADODB_FETCH_BOTH);
	    $DBi->Connect(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
   		if(!$DBi) die($DBi->ErrorMsg());
	}
?>