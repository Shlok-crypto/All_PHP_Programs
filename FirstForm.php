<head>
<title> FIRST FORM </title>
</head>
<html>
<body>
<form method="post">
<h1 align="left">INFO FORM</h1>
enter your name: <input type"text" name="name">.<br>
enter your age: <input type"number" name="age">.<br>
enter your Enrolment No. : <input type"number" name="enro">.<br>
Gender: 
Male:<input type="radio" name="check">
Female:<input type="radio" name="check">
Other:<input type="radio" name="check">.<br>
pass: <input type="password" name="pass">.<br>
CITY:
<select>
<option> DC</option>.<br>
<option> TORONTO</option>
<option> CALLIFORNIA</option>
<option> OTHER</option>
</SELECT>.<br>
<br>ENTER ANY SUGGESTIONS:</br>
<TEXTAREA name="Comments" cols=30 row=4></TEXTAREA>.<br>
<input type="checkbox" name="checkbox"> you better accept the conditions :).<br>

<input type="submit" value="submit">
<input type="reset" value="reset">.<br>

</form>
</body>
</html>

<?php
if($_POST)
{
$name = $_POST['name'];
$age = $_POST['age'];
$enro = $_POST['enro'];
$pass = $_POST['pass'];

$file=fopen("formdata.txt","a");
if(file_exists($file))
{
	fwrite($file,"Name:");
	fwrite($file,$name);
	fwrite($file,"\r\nAge:");
	fwrite($file,$age);
	fwrite($file,"\r\nEnrolment No:");
	fwrite($file,$enro);
	fwrite($file,"\r\nPassword: ");
	fwrite($file,$pass);
	fwrite($file,"\r\n");
	fwrite($file,"\n");
	fclose($file);

}
echo "Name: ".$name."<br>"." Enrolment No. : ".$enro."<br>";
echo "<br>";
readfile($file);
echo " DATA HAS BEEN UPLOADED :)";

}
?>