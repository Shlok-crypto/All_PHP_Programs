<?PHP
class one
{
	public $area;
	function area($h,$l)
	{
		echo"parent calss function called";
		$this->area=$h*$l;
		echo "area: ".$this->area;
	}
}

class Second extends one
{
	public $areaq;
	function area($h,$l)
	{
		echo"child class function called <br>";
		$this->areaq=$h*$l;
		echo "area: ".$this->areaq;
	}
}

$obj = new Second();
$obj->area(22,10);
return 0;
?>
