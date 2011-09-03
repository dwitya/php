<?php 
	session_start();
	ob_start();
	include("master/connection.php");
	
	if(isset($_SESSION['username']))
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="../css/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Member Page</title>
</head>
<body>
	<div class="wrapper">
    	<div class="header"></div>
        <div class="main_content">
            Halaman berhasil login<br />
            <a href="logout.php">Logout</a>
        </div>
        <div class="footer">Copyright <a href="www.twitter.com/dwityaPrawira">@dwityaPrawira</a></div>
    </div>    
</body>
</html>

<?php 
	}
	else
	{
		header('location: loginFailed.php');	
	}
?>