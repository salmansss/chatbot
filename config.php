<?
$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname ="chatbot";
		
//Create connection
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
try{
	$dbname = new PDO($host,$dbusername,$dbpassword);
} catch(PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br/>;
	die();
}
$limit = (isset( $_ GET['limit'])) ? $_GET('limit') : 10;
$page = (isset( $_ GET['page'])) ? $_GET('page') : 1;
$links = (isset( $_ GET['links'])) ? $_GET('links') : 7;
$query = "SELECT * FROM askedquestion";

require_once 'paginator>class.php';
$paginator = new Paginator($dbname,$query);
$result = $paginator->getData($limit,$page);

?>