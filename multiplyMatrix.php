<html>
<body>

<?PHP
$matrixA = array( array(1,2,3),array(2,2,4),array(2,4,1));
$matrixB = array(array(2,2,4),array(1,1,4),array(2,3,5));
$matrixC = array();  // to store sum of the matrixA+matrixB

for($r=0;$r<3;$r++) // Calculate and store the product of (matrixA * matrixB) into matrixC 
{
	for($j=0;$j<3;$j++)
	{
		for($col2=0;$col2<3;$col2++)
		$matrixC[$r][$j]+= $matrixA[$r][$col2] * $matrixB[$col2][$j];
	}
}

echo"<h2>"."MatrixA X MatrixB"."</h2>";
for($r=0;$r<3;$r++)    // print the matrixs
{
	for($j=0;$j<3;$j++)
	{
		echo "<b>"." | ".$matrixA[$r][$j]." | "."</b>";   // print matrixA
	}
	echo "   +   " ; 
	for($j=0;$j<3;$j++)
	{
		echo "<b>"." | ".$matrixB[$r][$j]." | "."</b>";  // print matrixB
	}
	echo "<br>";
}
echo"<br>";

echo"<h2>"."MatrixC : product of MatrixA & MatrixB"."</h2>";
for($r=0;$r<3;$r++)     // print matrixC
{
	for($j=0;$j<3;$j++)
	{
		echo "<b>"." | ".$matrixC[$r][$j]." | "."</b>";     // print matrixC
	}
	echo "<br>";
}
