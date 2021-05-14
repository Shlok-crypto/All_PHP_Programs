<?PHP
$matrixC = array( array("Tom","Osama","Shlok"), array("Jerry","Bin Bradly","Tomar"));
$matrixtranspose = array();

echo"<h2>"."MatrixC :"."</h2>";
for($r=0;$r<2;$r++)     // print matrixC
{
	for($j=0;$j<3;$j++)
	{
		echo "<b>"." | ".$matrixC[$r][$j]." | "."</b>";     // print matrixC
	}
	echo "<br>";
}


for($r=0;$r<2;$r++)     // transpose matrix
{
	for($c=0;$c<3;$c++)
	{
		$matrixtranspose[$c][$r]=$matrixC[$r][$c];   // values of r = c and c = r for the new transpose array. 
	}
}

echo "<h2>"."Transepose MatrixC"."</h2>";
for($r=0;$r<3;$r++)     // print transpose matrix 
{
	for($j=0;$j<2;$j++)
	{
		echo "<b>"." | ".$matrixtranspose[$r][$j]." | "."</b>";     // print matrixtranspose
	}
	echo "<br>";
}


?>