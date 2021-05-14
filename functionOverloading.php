<?PHP 
class test
{
	public $sum ;

	function __call($methodName,$argu)
	{
		if($methodName=="SUM")
		{
			echo "<br>";
			echo "The Sum is: ".$this->SUMM($argu);
		}
		else
		{
			echo "<b>Wrong Method Called *_*</b>"."<br>";
		}
	}
	 function SUMM($argu)
	{
		$sum=0;
		foreach($argu as $key)
		{
			$sum += $key;
		}
		return $sum; 
	}

}

$s = new test;
$s->hello("shlok");
$s->SUM(10,20,30,40,50);

return 0; 
?>

