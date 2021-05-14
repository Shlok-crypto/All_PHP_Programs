<head>
<title> FACTORIAL</title>
</head>
<html>
<body>
<form method="post">
<h1 align="left">FACTORIAL_shlok</h1>
enter the number: 
<input type="number"name="number">.<br>
<input type="submit"value="submit">.<br>

</form>
<?php
   
    $number = $_POST['number'];
    $fact=1;
    $i=1;
    for($i;$i<=$number;$i++)
    {
        $fact=$fact*$i;
    }
   
    echo "The factorial of $number is $fact";

?>

//shlok 