<html>
<body>
<?php
$OG = array(22,434,56,65,9,966);
$max=0;
echo "<b>contents of the array:</b>"."<br>";
foreach($OG as $key)
echo $key.",";                 // shlok 

foreach($OG as $key)
{ 
 if($key>$max) // to find the greatest num
 {
  $max=$key;
 }
}
$min=$max;

foreach($OG as $key)
{
 if($key<$min)   // to find the smallest num
 {
  $min=$key;
 }  
}
//echo "<br>"."The greatest number is "."<b>$max </b>"."<br>";
//echo "The smallest num is "."<b>$min</b>"."<br>";

sort($OG);   // sort in ascending
echo"<br>"."<b>Array sorted in ascending order:</b>"."<br>";
foreach($OG as $key){echo $key.",";}

rsort($OG);  // sort in descending
echo"<br>";
echo "<b>Array sorted in descending order:</b>"."<br>";
foreach($OG as $key){echo $key.",";}
?>