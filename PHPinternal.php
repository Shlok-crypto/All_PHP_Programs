
<head>
<title> PHP Internal </title>
</head>
<html>
<body>
<form method="post"> 
<h1 align="left">PHP Internal</h1>
Student Name: <input type"text" name="name">.<br>
Student Roll No: <input type"number" name="enro">.<br>
C++:<input type"number" name="C++">.<br>
DBMS:<input type"number" name="DBMS">.<br>
PHP:<input type"number" name="PHP">.<br>
<input type="submit" value="submit">.<br>
<?PHP
if($_POST)  // retrives the data from the FORM into local varibles *_*
{
$name = $_POST['name'];
$enro = $_POST['enro'];
$c = $_POST['C++'];
$dbms = $_POST['DBMS'];
$php = $_POST['PHP'];  // This is Shlok's Project. You better not copy. 
}
$total = $c+$dbms+$php; // gets the total marks in each subject
echo "Total Marks ".$total."<br>"; 

$marks = $total/3; // this will get the persentage
if($marks>=90){echo "%age: ".$marks." Distinction";} 
else if ($marks>=80 && $marks<90) { echo "%age: ".$marks." First Division";} 
else if ($marks>=50 && $marks<80) { echo "%age: ".$marks." Pass";} 
else if ($marks>=40 && $marks<50) { echo "%age: ".$marks." Faill";} 
echo "<br>";
?>