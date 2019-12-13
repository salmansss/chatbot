<?php

$username = filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST,'password');
if(!empty($username)){
	if(!empty($password)){
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname ="chatbot";
		
//Create connection
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error()){
	die('Connect Error ('. mysqli_connect_errno() .')'
	. mysqli_connect_errno());
}
else{
	$sql = "INSERT INTO admin2 (username,password)
	values ('$username','$password')";
	if($conn->query($sql)){
		echo "New record is inserted sucessfully";
}
else{
	echo "Error: ".$sql ."<br>". $conn->error;
}
$conn->close();
}
}
else{
	echo "Username should not be empty";
	die();
}
}
else{
	echo "Password should not be empty";
	die();
}
?>