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
<title>ADD QUESTION</title>
</head>

<body>
<br>
<br>
<br>
<br>
<br>
<body>
<table align=center border=4> 
<form name="f" action="addquestion.php" onsubmit="return validation();" method="post"> 

<tr><td>MainKeyword:</td> 
<td><input type="text" name="MainKeyword"/></td> 
</tr>
<tr><td>Keyword1:</td> 
<td><input type="text" name="Keyword1"/></td> 
</tr>
<tr><td>Keyword2:</td> 
<td><input type="text" name="Keyword2"/></td> 
</tr> 
<tr><td>Keyword3:</td> 
<td><input type="text" name="Keyword3"/></td> 
</tr>
<tr><td>Keyword4:</td> 
<td><input type="text" name="Keyword4"/></td> 
</tr>
<tr><td>StudentVisiable:</td> 
<td> <ul><input type="radio" name="StudentVisiable" value="YES">YES
<BR>
  <input type="radio" name="StudentVisiable" value="NO">NO
  <span class="error">* </span>
  </ul></td> 
</tr>
<tr><td>Answer:</td> 
<td> <input type="text" name="Answer"/></td> 
</tr>
<td><input type="Submit" value="Submit"/></td> 
</tr>
 </form>
 </table>>

</body>

</html>
<?php
$StudentVisiable = "";

if (empty($_POST["StudentVisiable"])) {
    $StudentVisiableErr = "StudentVisible is required";
  } else {
    $StudentVisiable = test_input($_POST["StudentVisiable"]);
  }
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$MainKeyword = filter_input(INPUT_POST,'MainKeyword');
$Keyword1 = filter_input(INPUT_POST,'Keyword1');
$Keyword2 = filter_input(INPUT_POST,'Keyword2');
$Keyword3 = filter_input(INPUT_POST,'Keyword3');
$Keyword4 = filter_input(INPUT_POST,'Keyword4');
$StudentVisiable = filter_input(INPUT_POST,'StudentVisiable');
$Answer = filter_input(INPUT_POST,'Answer');
	if(!empty($MainKeyword)){
		if(!empty($Keyword1)){
			if(!empty($Keyword2)){
				if(!empty($Keyword3)){
					if(!empty($Keyword4)){
						if(!empty($StudentVisiable)){
							if(!empty($Answer)){
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
	$sql = "INSERT INTO addquestion (MainKeyword,Keyword1,Keyword2,Keyword3,Keyword4,StudentVisiable,Answer)
	values ('$MainKeyword','$Keyword1','$Keyword2','$Keyword3','$Keyword4','$StudentVisiable','$Answer')";
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
	echo "MainKeyword should not be empty";
	die();
}
}
else{
	echo "Keyword1 not be empty";
	die();
}
}
else{
	echo "Keyword2 should not be empty";
	die();
}
}
else{
	echo "Keyword3 should not be empty";
	die();
}
}
else{
	echo "Keyword4 should not be empty";
	die();
}
}
else{
	echo "StudentVisiable should not be empty";
	die();
}
}
else{
	echo "Answer should not be empty";
	die();
}
?>


