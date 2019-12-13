<html>
<link href='style4.css' rel='stylesheet'>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
<ul>
<li><a >Enter your ASKED QUESTION</a></li>
<li><a href="askedquestion.php"> logout</a></li>
<ul>
<head>
<title>Insert</title>
</head>

<body>
<table align=center border=4> 
<form name="f" action="insert.php" onsubmit="return validation();" method="post"> 


<tr><td>Question:</td> 
<td><input type="text" name="Question"/></td> 
</tr>
<tr><td>Answer:</td> 
<td><input type="answer" name="Answer"/></td> 
</tr>
<tr><td>Date:</td> 
<td><input type="date" name="Date"/></td> 
</tr> 
<tr><td>Time:</td> 
<td><input type="time" name="Time"/></td> 
</tr>
<td><input type="Submit" value="Submit"/></td> 
</tr>
 </form>
 </table>

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
		$dbname ="chatbot";
		
//Create connection
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error()){
	die('Connect Error ('. mysqli_connect_errno() .')'
	. mysqli_connect_errno());
}
else{
	$sql = "INSERT INTO askedquestion (Question,Answer,Date,Time)
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


