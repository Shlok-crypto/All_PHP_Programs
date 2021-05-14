<?PHP
$servername = "localhost";
$username ="root";
$password = "";
$dbname ="bank";
$conn= mysqli_connect($servername,$username,$password);

//create database
$sql ="CREATE DATABASE bank";

if(mysqli_query($conn,$sql))
{
	echo "DATABASE created :)";
}
else 
{ 
	echo "error creating DATABASE ";
	mysqli_error($conn);
}

?>