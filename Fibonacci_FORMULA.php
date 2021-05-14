<?PHP
$num;
for($i=0;$i<22;$i++)
{
	//echo("the value of i:".$i);
	$num = (pow((1+sqrt(5)),$i) - (pow((1-sqrt(5)),$i)))/(pow(2,$i)*sqrt(5)); // formula to print the FIBONACCI SEQUENCE ( (1+√5)^i - (1-√5)^i ) / (2^i(√5))
	echo($num);
	echo ",\n";
}
?>