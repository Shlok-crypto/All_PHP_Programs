<html>
<body>
<?PHP
class book()
// member varibles
var $price
var $title
// member function
function setprice($pricee)
{
	$this->$price = $pricee;
}
 function getprice()
 {
	 echo $this->.$price."<br/>";
 }
 function settitle($titlee)
 {
	 $this->$title = $titlee;
 }
 function gettitle()
 {
	 echo $this->.$title."</br>"
 }
gettitle();
setprice(22);
?>
</body>
</html>