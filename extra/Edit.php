<html>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
<head>
<title>Insert</title>
</head>

<body>
<table align=center border=4> 
<form name="f" action="Edit.php" onsubmit="return validation();" method="post"> 

<tr><td>Name:</td> 
<td><input type="text" name="name"/></td> 
</tr>
<tr><td>Email:</td> 
<td><input type="text" name="email"/></td> 
</tr>
<tr><td>Phone:</td> 
<td><input type="text" name="phone"/></td> 
</tr> 
<tr><td>Address:</td> 
<td><input type="text" name="address"/></td> 
</tr>
<td><input type="Submit" value="Submit"/></td> 
</tr>
 </form>
 </table>>

</body>

</html>
<?php
$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email');
$phone = filter_input(INPUT_POST,'phone');
$address = filter_input(INPUT_POST,'address');
	if(!empty($name)){
		if(!empty($email)){
			if(!empty($phone)){
				if(!empty($address)){
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname ="simpledata";
		
//Create connection
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
try {
    
    // set the mysqli error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE crud SET name='' WHERE id=2";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(mysqliException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

if(mysqli_connect_error()){
	die('Connect Error ('. mysqli_connect_errno() .')'
	. mysqli_connect_errno());
}
else{
	$sql = "Update INTO crud (name,email,phone,address)
	values ('$name','$email','$phone','$address')";
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
	echo "Name should not be empty";
	die();
}
}
else{
	echo "Email should not be empty";
	die();
}
}
else{
	echo "Phone should not be empty";
	die();
}
}
else{
	echo "Address should not be empty";
	die();
}
?>


 