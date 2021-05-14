<?PHP
class studentinfo 
{
	public $name;
	public $age;
	
	function __construct($name,$age)
	{
		$this->name=$name;
		$this->age=$age;
	}
}

class info extends studentinfo
{
	public $roll;
	
	function __construct($name,$age,$roll)
	{
		parent::__construct($name,$age);
		$this->roll=$roll;
		echo "Name: ". $this->name."<br>"."Age: ".$this->age."<br>";
		echo "Roll#: ".$this->roll;
	}
}

$obj = new info("shlok",18,28);
return 0;

?>