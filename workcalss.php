<title>"Work Info"</title>
<html>
<body>
<h1>Worker Info Displayed *_*</h1>
<?PHP
class work
{
	private $name;
	private $age;
	private $joinDate;
	private $disignation;
	private $salary;
	public $hra;
	public $da;
	public $pf; 
	private $grossSalary; 
	private $NetSalary; 
	public function inputINFO($namee,$agee,$joinDatee,$disignationn,$salaryy, $hray,$day,$pfy)
	{
		$this->name=$namee;
		$this->joinDate=$joinDatee;
		$this->age=$agee;
		$ths->disignation=$disignationn;
		$this->salary=$salaryy;
		$this->har=$hray;
		$this->da=$day;
		$this->pf=$pfy;
		$this->grossSalary=(salary+har+da);
		$this->NetSalary=(grossSalary-pf);
	}
	public function printt()
	{
		echo "The name is ".$this->name."<br>";
		echo "Their age is ".$this->age."<br>";
		echo "Their join in date: ".$this->joinDate."<br>";
		echo "Their disignation is ".$this->disignation."<br>";
		echo "Their Basic salary is ".$this->salary."<br>";
		echo "HRA: ".$this->har."<br>";
		echo "DA: ".$this->da."<br>";
		echo "Their GrossSalary is ".$this->grossSalary."<br>";
		echo "Their NetSalary is ".$this->NetSalary."<br>";

	}
}

$shlok = new work;
$shlok->inputINFO("Shlok",18,"02-24-2010","Student",20000,1000,500,2000);
$shlok->printt();


?>