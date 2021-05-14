<?PHP
class office
{
	public $Ename;
	public $ACCnumber;
	public $salary;
	public function __construct($name,$empoNUM,$sal)
	{
		
		$this->Ename=$name;
		$this->ACCnumber=$empoNUM;
		$this->salary=$sal;
	}
	function getValue()
	{
			echo"name: ".$this->Ename."<br>";
			echo"Employee Number: ".$this->ACCnumber."<br>";
			echo"salary: ".$this->salary."<br>";
	}
}

class teaching extends office
{
	public $desig;
	function setValue($desig)
	{
		$this->desig=$desig;
		echo"designation: ".$this->desig."<br>";
	}
}

class nonTeaching extends office
{
	public $desig;
	function setValue($desig)
	{
		$this->desig=$desig;
		echo"designation: ".$this->desig."<br>";
	}
}

echo "This is Hierarchical<br>";
$shlok = new teaching("Shlok",2233,20000);
$shlok2 = new nonTeaching("Osama Bin Bradly",4542,5000000);
$shlok->getValue();
$shlok->setValue("manager");
echo "<br>";
echo "<br>";
$shlok2->getValue();
$shlok2->setValue("TERROR");
echo"<br>end of line ";
?>