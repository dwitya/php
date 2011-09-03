<?php 
ob_start();
session_start();

include("master/connection.php");

$username 	= mysql_real_escape_string($_POST['username']);
$pass		= mysql_real_escape_string($_POST['pass']);
$password	= md5($pass);

$query 		= mysql_query("select * from members where members.login = '$username' AND members.passwd = '$password' limit 1");

if($query)
{
	$num_rows	= mysql_num_rows($query);
	if($num_rows == 0)
	{
		// redirect ke halaman gagal
		header('location: loginFailed.php');	
		exit();	
	}
	else if($num_rows == 1)
	{
		// set session dengen user login
		$_SESSION['username'] = $username;
		// redirect ke halaman setelah login
		header('location: loginSuccess.php');
		exit();
	}
}
else
{
	die("Query failed");	
}

?>