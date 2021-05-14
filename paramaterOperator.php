<?PHP
class student
{
	public $roll;
	public $name;
	
	function __construct($a,$b)
	{
		$this->name =$a;
		$this->roll=$b;
	}
}
class studentinfo extends student
{
	public $PhoneNum;
	
	function NUMBER($num)
	{
		$this->PhoneNum=$num;
	}
}
class grades extends studentinfo
{
	public $s1;
	public $s4;
	public $s3;
	public $s2;
	function getgrades($s1,$s2,$s3,$s4)
	{
		$this->s1=$s1;
		$this->s2=$s2;
		$this->s3=$s3;
		$this->s4=$s4;
	}
}
class level extends grades
{
	public $total;
	public function position()
	{
		$this->total=(($this->s1 + $this->s2 + $this->s3 + $this->s4)/4);
		if($this->total>95)
		{
			echo "<br>";
			echo "<b>topper</b>";
		}
		else 
		{
			echo "you are a failure *_# ";
		}
	}
}
class results extends level
{
	function getOutPut()
	{
		echo "Name: ".$this->name."<br> Roll: ". $this->roll."<br>";
		echo "Mobile#: ".$this->PhoneNum."<br>";
		echo "<br>";
		echo "<b>GRADES</b> <br>PHP: ".$this->s1."<br>"."COMP: ".$this->s2."<br>"."GYM: ".$this->s3."<br>"."PE: ".$this->s4."<br>";
		echo "<br>";
		echo "AEVRAGE: ".($this->s1 + $this->s2 + $this->s3 + $this->s4)/4;
		echo "<br>";
	}
}
$obj= new results("SHLOK",28);
$obj->NUMBER(3129193341);
$obj->getgrades(95,39,88,22);
$obj->getOutPut();
$obj->position();
return 0; 



?>