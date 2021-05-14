<?PHP
$servername = "localhost";
$username ="root";
$password = "";

// create connection
$conn= mysqli_connect($servername,$username,$password);
//check connection
 if(!$conn)
 {
	 die("conncetion failed". mysql_connect_error()); 
 }
 else{echo "connection Established";}
 ?>