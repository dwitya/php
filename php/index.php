<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="../images/fav.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="../css/main.css" />

<script type="text/javascript" src="../js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="../js/jquery.validate.js"></script>
<script>
	$(document).ready(function(){
		$("#formLogin").validate();
	});
</script>
</head>

<body>
<form id="formLogin" method="post" action="loginValidate.php">
    <div id="mainPage">
    	<div id="image"></div>
        <div id="loginForm">
        	<p>
            	<label>Username</label>
                <input type="text" id="textfield" class="required form_field" name="username" />
            </p>
            <p>
            	<label>Password</label>
                <input type="password" id="textfield" class="required form_field" name="pass" />
            </p>
            <p>
				<input type="submit" name="submit" value="Submit" />
            </p>
        </div>
    </div>
    <div id="footer"></div>
</form>
</body>
</html>