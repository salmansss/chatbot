<html>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
<head>
<title>Insert</title>
</head>

<body>
<table align=center border=4> 
<form name="f" action="Edit.php" onsubmit="return validation();" method="post"> 

<tr><td>Question:</td> 
<td><input type="text" name="Question"/></td> 
</tr>
<tr><td>Answer:</td> 
<td><input type="text" name="Answer"/></td> 
</tr>
<tr><td>Date:</td> 
<td><input type="text" name="Date"/></td> 
</tr> 
<tr><td>Time:</td> 
<td><input type="text" name="Time"/></td> 
</tr>
<td><input type="Submit" value="Submit"/></td> 
</tr>
 </form>
 </table>>

</body>

</html>
<?php
$Question = filter_input(INPUT_POST,'Question');
$Answer = filter_input(INPUT_POST,'Answer');
$Date = filter_input(INPUT_POST,'Date');
$Time = filter_input(INPUT_POST,'Time');
	if(!empty($Question)){
		if(!empty($Answer)){
			if(!empty($Date)){
				if(!empty($Time)){
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname ="data";
		
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
	$sql = "Update INTO askedquestion (Question,Answer,Date,Time)
	values ('$Question','$Answer','$Date','$Time')";
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
	echo "Question should not be empty";
	die();
}
}
else{
	echo "Answer should not be empty";
	die();
}
}
else{
	echo "Date should not be empty";
	die();
}
}
else{
	echo "Time should not be empty";
	die();
}
?>


 