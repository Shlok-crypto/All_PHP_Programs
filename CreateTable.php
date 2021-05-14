<?PHP
$servername = "localhost";
$username ="root";
$password = "";
$dbname ="bank";

$conn= mysqli_connect($servername,$username,$password,$dbname);
// CREATE TABLE Bank 
	if($conn==false)
	{ die("ERROR: COULDN'T CONNECT".mysqli_connect_error()); }
	
	$sql= "CREATE TABLE cust_info(
			Cust_id INT(20) NOT NULL PRIMARY KEY, 
			name VARCHAR(30) NOT NULL, 
			Amount INT(20) NOT NULL,
			Amount_ withdrawal INT(20),
			Balance INT(30) NOT NULL)";
			
	if(mysqli_query($conn,$sql))
	{
		echo "TABLE CREATED :)";
	}
	else 
	{
		"ERROR CREATING TABLE :( ".mysqli_error($conn); 
	}
mysqli_close($conn);
?>