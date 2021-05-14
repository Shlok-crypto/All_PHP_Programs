<html>
<body>
	<form method="POST">
				Student name:  
				<input type="text" name="stud_name"><br>
				Student Roll no: 
				<input type="number" name="stud_roll"><br>
			    C++<input type="number" name="cpp" ><br>
				DBMS:
				<input type="number" name="dbms"><br>
				php:<input type="number" name="php">
		<br>
		<input type="submit">
	</form>
	<?php
	if($_POST)
	{
		$cpp_marks=$_POST['cpp'];
		$dbms_marks=$_POST['dbms'];
		$php_marks=$_POST['php'];
		$total_marks=$cpp_marks+$dbms_marks+$php_marks;
		$percentage=($total_marks/3);
		echo("<br>Student name: ".$_POST['stud_name']);	
		echo("<br>Student rollno: ".$_POST['stud_roll']);	
		echo("<br>Total marks: ".$total_marks);
		echo("<br>Percentage: ".$percentage);

		if($percentage>90)
			echo("<br>You have got distinction");
		else
			if($percentage>80)
				echo("<br>You have got first divison");
			else
				if($percentage>50)
					echo("<br>You have passed");
				else
					if($percentage<40)
						echo("<br>You are fail");

	}
	?>
</body>
</html>