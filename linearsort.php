<html>
<body>
<?php

$names= array("shlok", "ansh","tom","jerry","osama","bin","bradly");

$find="bradly";

foreach($names as $key)
{
	echo "<b>$key</b>".",";
}
echo "<br>";
echo "<br>";
for($i=0; $i<sizeof($names); $i++)
{
  if($names[$i]==$find)
  echo " <b>$find</b> is persent at <b>$i</b>"."<br>";
}
