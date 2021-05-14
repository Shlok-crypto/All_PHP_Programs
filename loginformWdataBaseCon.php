<?php 
	include "dbh.inc.php";
?>
<head>
<title> login form </title>
</head>
<html>
<body>

<form action =" dbh.inc.php" method="post">
<h1> login Info </h1>
Username: <input type="text" placeholder="Enter Username" name="username"><br>
Pass: <input type="password" placeholder="Enter Username" name="pass"><br>
<br>
<input type="submit" value="login">
<input type="reset" value="reset"><br>
</form>
</body>
</html>