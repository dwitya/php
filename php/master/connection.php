<?php 
	$connect	= mysql_connect("localhost", "root", "") or die(mysql_error());
	$db			= mysql_select_db("test", $connect) or die(mysql_error());
?>