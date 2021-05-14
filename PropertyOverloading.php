<?PHP 
class test
{
	public $DATA = array();

	function __set($Name,$argu)
	{
		$this->DATA[$Name]=$argu;
	}
	function __get($Name)
	{
		echo $Name."'s ".$this->DATA[$Name];
	}
	function __isset($Name)
	{
		return $this->DATA[$Name];
	}
	function __unset($Name)
	{
		unset($this->DATA[$Name]);
	}
}

$s = new test;
$s->Name="Shlok";
$s->Name;
echo"<br>";
$s->argu="ffif";
$s->argu;
echo"<br>";
$s->__set("Tom", "ADDRESS: 18909 Fountain Hill DR");
$s->__get("Tom");
return 0; 
?>

