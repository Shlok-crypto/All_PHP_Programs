<?PHP

class father
{
	function __construct()
	{
		echo "This is father class <br>";
	}
}

class child extends father
{
	function getvalue()
	{
		echo "This is child class <br>";
	}
}

$obj = new child;
$obj->getvalue();
return 0;

?>