<html>
<body>
<?php
$OG = array(22,434,56,65,9,966);
$size = sizeof($OG);

echo"<b> The content of the array: </b>";
foreach($OG as $key)
{echo $key.",";}

for($i=0; $i<$size-1; $i++)  
{
 for($x=0; $x<$size-1; $x++)  
 {
     if($OG[$x]> $OG[$x+1])
	{
	  $temp=$OG[$x];
	  $OG[$x]=$OG[$x+1];
	  $OG[$x+1]=$temp;
	}
 }
}
echo"<br>"."<b> The bubble sorted array in ascending array: </b>";
foreach($OG as $key)
{echo $key.",";}

?>