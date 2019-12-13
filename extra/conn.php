
<?php
$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname ="simpledata";
		
//Create connection
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
$mysqli = new mysqli("localhost","root","","simpledata");
if($mysqli->connect_error){
	echo "Failed connect (".$mysqli->connect_errno.") ".$mysqli->connect_error;
}
$query = $mysqli->query("select id,name,email,phone,address from edit");
?>