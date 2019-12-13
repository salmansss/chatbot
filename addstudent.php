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
<title>ADD STUDENT</title>
</head>

<body>


<table align=center border=4> 
<form name="f" action="addstudent.php" onsubmit="return validation();" method="post"> 

<tr><td>Name:</td> 
<td><input type="text" name="Name"/></td> 
</tr>
<tr><td>Contact:</td> 
<td><input type="text" name="Contact"/></td> 
</tr>
<tr><td>Password:</td> 
<td><input type="text" name="Password"/></td> 
</tr> 
<td><input type="Submit" value="Submit"/></td> 
</tr>
 </form>
 </table>>
 

</body>
<?php

$Name = filter_input(INPUT_POST,'Name');
$Contact = filter_input(INPUT_POST,'Contact');
$Password = filter_input(INPUT_POST,'Password');
if(!empty($Name)){
	if(!empty($Contact)){
		if(!empty($Password)){
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
	$sql = "INSERT INTO addstudent (Name,Contact,Password)
	values ('$Name','$Contact','$Password')";
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
	echo "Contact should not be empty";
	die();
}
}
else{
	echo "Password should not be empty";
	die();
}
?>