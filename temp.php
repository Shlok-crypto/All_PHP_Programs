<?php
$a = array(34,23,54,67);
for ($x = 0; $x <4; $x++) {
echo "$a[$x] ";
}
echo "<br>";
foreach ($a as $value) {
 echo $value." " ;
}
echo "<br>";
print_r($a);
echo "<br>";
var_dump($a);
?>
