<?php
$token = random_int(100000,999999);
$i =1; 

echo $token;

while($i <= 4)
{
	$array = array(i => $i, $token);
	$i++;
}




print_r($array);

?>