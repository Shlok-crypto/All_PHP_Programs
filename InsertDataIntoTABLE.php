<head>
<title> Bank Account </title>
</head>
<html>
<body>
<form method="post">
<h1 align="left">Bank Account Details</h1>
enter your ID: <input type"text" name="Cust_id">.<br>
enter your name: <input type"text" name="name">.<br>
enter the Amount: <input type"number" name="Amount">.<br>
enter the Withdrawal Amount: <input type"number" name="Amount_withdrawal">.<br>
<input type="submit" value="submit">
<input type="reset" value="reset">.<br>
</form>
</body>
</html>

<?PHP
//class Bank 
class bank
{
function inputDATA()
{
 if($_POST)
 {
		$Cust_id= $_POST['Cust_id'];
		$name = $_POST['name'];
		$Amount = $_POST['Amount'];
		$Amount_withdrawal = $_POST['Amount_withdrawal'];
	$Balance= $Amount-$Amount_withdrawal;
 }
	$servername = "localhost";
	$username ="root";
	$password = "";
	$dbname ="bank";

	$conn= mysqli_connect($servername,$username,$password,$dbname);

	// insert the data into table Bank
		$sql = "INSERT INTO cust_info (Cust_id,name,Amount,Amount_ withdrawal,Balance) 
	VALUES 
		('Cust_id','name','Amount','Amount_ withdrawal','Balance')";

		if(mysqli_query($conn,$sql))
		{
			echo "Data inserted into TABLE Cust_Info"."<br>";
		}
		else {echo "ERROR: ".mysqli_error($conn);}

		mysqli_close($conn);
 
 echo"Cust_id: ".$Cust_id."<br>";
 echo"Name: ".$name."<br>";
 echo"Amount: ".$Amount."<br>";
 echo"Amount_withdrawal: ".$Amount_withdrawal."<br>";
 echo"Balance: ".$Balance."<br>";
 }
}
$obj = new bank();
$obj->inputDATA();
?>