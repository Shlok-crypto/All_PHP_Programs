<head>
<title> Highest Common Factor </title>
</head>
<html>
<body>
<form method="post">
<h1 align="left">Highest Common Factor</h1>
enter the First NUMBER : <input type"number" name="NUMone">.<br>
enter the Second NUMBER: <input type"number" name="NUMtwo">.<br>
<input type ="submit" value ="submit">.<br>
<?php

if($_POST)
{
	$num1=$_POST['NUMone'];
	$num2=$_POST['NUMtwo'];
}

  function Highest_Common_Factor($num1, $num2)
  {
    if ($num2 == 0)
      return $num1;
    return Highest_Common_Factor($num2, $num1%$num2);
  }

  echo "Highest Common Factor of $num1 and $num2 is: ".Highest_Common_Factor($num1,$num2);
?>