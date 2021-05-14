<?PHP
$servername="localhost";
$userid="root";
$password="";
$dbname="logininfo"

$con = mysqli_connect($servername, $userid, $password);

if(!$con)
{
	die("could not connect".mysqli_error());
}
mysql_select_db($dbname,$con);
$sql= "INSERT INTO `userinfo`(`user`, `pass`) VALUES ('$_POST[username]','$_POST[pass]')";
if(!mysql_query($sql,$con))
{
	die("ERROR: ".mysql_error($con))));
}
echo "record added";
mysql_close($con); 