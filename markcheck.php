<html>
<body>
<?php

$marks=rand(10,100);

if($marks>=90){echo "distinction";} 
else if ($marks>=40 && $marks<=50) { echo "pass";} 
else if ($marks>=51 && $marks<=60) { echo "third";} 
else if ($marks>=61 && $marks<=70) { echo "second";}
else if ($marks>=71 && $marks<=89) { echo "first";} 
else echo "faill" ;

echo "<br>";
echo "the marks are: ", $marks;
?>
</body>
</html> 