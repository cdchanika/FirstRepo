<?php 

class Candidate{
	private $NIC = null;
	private $Name = "";
	
	public function __construct($nic){
		$this->NIC = $nic;
	}
	
	public function setName($name){
		$this->Name = $name;
	}
	
	public function getName(){
		echo $this->Name;
	}
	
	public function getNIC(){
		echo $this->NIC;
	}
	
}
?>
<?php
$user = 'root';
$pass = '';
$db = 'system';
//$db = new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");
$connect = mysqli_connect('localhost',$user,$pass) or die("Unable to connect");
$select_db = mysqli_select_db($connect,$db) or die("Unable to connect");

$c1 = new Candidate(1234);
$c1->setName("Kasun");
$c1->getName();
$c1->getNIC();

$query = mysqli_query($connect,"INSERT INTO candidate VALUES('1234','Kasun pawithra')");
?>