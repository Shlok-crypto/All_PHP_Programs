<?PHP
class test
{
	public $age;
	public $name;
	
	function __construct() 
	{
		echo "<h1>Enter your Name & date of birth</h1>";
		echo "<b>Shlok"."<br>"."09,24,2001</b>";
		$this->name = "shlok"; 
	}
	function __call($objname,$agee)
	{
		if($objname=="age")
		{
			
			echo "<br>";
			echo "<br>".$this->name." you were born in: ".$agee[0];
			return $this->age = 2020-$agee[0];
		}
	}
}

$s = new test;
echo("<br>"."Your age is: ".$s->age(2001))


?>