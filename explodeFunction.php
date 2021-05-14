<?PHP

$string = "Shlok Toamr,19,Amity, Have A Good Day *_*";

$arrayy=(explode(',',$string));

print_r($arrayy);

echo "<br>";
echo "<br>";
$toString = implode(" ",$arrayy);
echo $toString;
$datee=date(d/m/y,[24092020]);
echo $datee;


?>