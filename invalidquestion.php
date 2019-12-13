<html>
<link href='style.css' rel='stylesheet'>
<ul>
<li><a href="askedquestion.php">ASKED QUESTION</a></li>
<li><a href="invalidquestion.php">INVALID QUESTION</a>
<ul>
<li><a>Camp Sites</a></li>
<li><a>Mission &amp; Vision</a></li>
<li><a>Resource</a></li>
</ul>
</li>
<li><a href="addquestion.php">ADD QUESTION</a>
<ul>
<li><a>Activities</a></li>
<li><a>Parks</a></li>
<li><a>Canteen</a></li>
<li><a>Events</a></li>
</ul>
</li>
<li><a href="addstudent.php">ADD STUDENT</a>
<ul>
<li><a>Map</a></li>
<li><a>Directions</a></li>
</ul>
</li>
<li><a href="visitordetail.php">VISITOR DETAILS</a></li>
<ul>
<li><a href="homepage.html">LOGOUT</a></li>
</li>
</ul>
<head>
<title>Invalid Question</title>
</head>

<body>
<table align=center border=4> 
<form name="f" action="invalidquestion.php" onsubmit="return validation();" method="post"> 

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
		$dbname ="chatbot";
		
//Create connection
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error()){
	die('Connect Error ('. mysqli_connect_errno() .')'
	. mysqli_connect_errno());
}
else{
	$sql = "INSERT INTO invalidquestion (Question,Answer,Date,Time)
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



