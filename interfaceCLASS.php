<?PHP

interface test
{
	public function setValue($name,$sex,$bodyCnt);
	public function getvalue();
}


class info implements test
{

public $name;
//public $age;
public $sex;
public $countt;

function setValue($name,$sex, $bodyCnt)
{
		$this->name=$name;
		$this->sex=$sex;
		$this->countt=$bodyCnt;
		//$this->age=$age;
}

function getvalue()
{
	echo "<b>Your INFO:</b> <br>";
	echo "NAME: ".$this->name."<br>";
	echo "SEX: ".$this->sex."<br>";
	echo "Hitcount: ".$this->countt."<br>";
	//echo "Age: ".$this->age."<br>";
}
 
}

$bradly = new info();
$bradly->setValue("Osama Bin Bradly","M",22);
$bradly->getvalue();
return 0;

?>