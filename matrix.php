<html>
<body>

<?PHP
$matrixA = array( array(1,2,3),array(2,2,4));
$matrixB = array(array(2,2,4),array(1,1,4));
$matrixC = array();  // to store sum of the matrixA+matrixB
$matrixtranspose= array(); // to store the vlaues of the transposed matix 

for($r=0;$r<2;$r++) // Calculate and store the sums of (matrixA + matrixB) into matrixC 
{
	for($j=0;$j<3;$j++)
	{
		$matrixC[$r][$j]= $matrixA[$r][$j] + $matrixB[$r][$j];
	}
}

echo"<h2>"."MatrixA + MatrixB"."</h2>";
for($r=0;$r<2;$r++)    // print the matrixs
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

echo"<h2>"."MatrixC : Sum of MatrixA & MatrixB"."</h2>";
for($r=0;$r<2;$r++)     // print matrixC
{
	for($j=0;$j<3;$j++)
	{
		echo "<b>"." | ".$matrixC[$r][$j]." | "."</b>";     // print matrixC
	}
	echo "<br>";
}

?>