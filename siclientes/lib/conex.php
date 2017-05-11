<?php
    include_once('lib/param.inc.php');	
	include_once('lib/adodb/adodb.inc.php');
	$DBi = NewADOConnection(DB_CONFIG);
	$DBi->SetFetchMode(ADODB_FETCH_BOTH);
    $DBi->Connect(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
	if(!$DBi) die($DBi->ErrorMsg());
?>