<?php

	$host = 'localhost';
	$user = 'monestc_drpl1';
	$pass = '';
	$dbname = 'monestc_drpl1';
	//mengubung ke host
	$connect = mysql_connect($host, $user, $pass) or die(mysql_error());

	mysql_query('SET NAMES UTF8');
	//memilih database yang akan digunakan
	$dbselect = mysql_select_db($dbname);

	require_once $_SERVER['DOCUMENT_ROOT'].'/config.php';
	require_once BASEURL.'/helpers/helpers.php';
?>
