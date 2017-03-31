<?php

	$host = 'localhost';
	$user = 'monestc_drpl1';
	$pass = '';
	$dbname = 'monestc_drpl1';
	//mengubung ke host
	$connect = mysql_connect($host, $user, $pass) or die(mysql_error());

	//memilih database yang akan digunakan
	$dbselect = mysql_select_db($dbname);
  mysql_query('SET NAMES UTF8');

	require_once $_SERVER['DOCUMENT_ROOT'].'/config.php';
	require_once BASEURL.'/helpers/helpers.php';
?>
