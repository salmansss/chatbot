
<?php
$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname ="data";
		
//Create connection
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
$mysqli = new mysqli("localhost","root","","data");
if($mysqli->connect_error){
	echo "Failed connect (".$mysqli->connect_errno.") ".$mysqli->connect_error;
}
$query = $mysqli->query("select id,Question,Answer,Date,Time from edit");
?>