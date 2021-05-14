<?PHP
interface grades
{
	public function grades($s1,$s2,$s3);
}

class info
{
  public $name;
  public $sex; 
  public $roll;
	function __construct($name,$roll)
	{
		$this->name=$name;
		$this->roll=$roll;
		// print the info via constructor
	echo "<b>Your INFO:</b> <br>";
	echo "NAME: ".$this->name."<br>";
	echo "SEX: ".$this->sex."<br>";
	echo "ROLL: ".$this->roll."<br>";
	}
}

class Student extends info implements grades
{
	public $s1;
	public $s2;
	public $s3;
	public $total;
	function grades($s1,$s2,$s3)
	{
		$this->s1=$s1;
		$this->s2=$s2;
		$this->s3=$s3;
		$this->total=($this->s1 + $this->s2 + $this->s3)/3 ;
		echo "<br><b>GRADES</b> <br>PHP: ".$this->s1."<br>"."COMP: ".$this->s2."<br>"."GYM: ".$this->s3."<br>";
		echo "<b>total: </b>".$this->total;
	}
}
$bradly = new Student("Osame Bin Bradly","M","9/11");
$bradly->grades(90,80,90);

return 0;

?>