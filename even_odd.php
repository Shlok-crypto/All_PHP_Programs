
<form method='post'>
enter a number:<input type "number" name="number">
<input type="submit" value="Submit">

</form>

<?php
if($_POST)
{
	$number= $_POST['number'];
	
	if(($number%2)==0)
	{
	   echo $number." number is even"."<br>";
	}
	else echo "its an odd number";


}
?>