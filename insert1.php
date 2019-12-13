<html>
<link href='style4.css' rel='stylesheet'>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
<ul>
<li><a >Visitor</a></li>
<li><a href="visitordetail.php"> logout</a></li>
<ul>
<head>
<title>Insert</title>
</head>

<body>
<table align=center border=4> 
<form name="f" action="insert1.php" onsubmit="return validation();" method="post"> 


<tr><td>Name:</td> 
<td><input type="text" name="Name"/></td> 
</tr>
<tr><td>Email:</td> 
<td><input type="Email" name="Email"/></td> 
</tr>
<tr><td>Contact:</td> 
<td><input type="Contact" name="Contact"/></td> 
</tr> 
<tr><td>Person:</td> 
<td><input type="Person" name="Person"/></td> 
</tr>
<tr><td>Worktype:</td> 
<td><input type="text" name="Worktype"/></td> 
</tr>
<tr><td>Purpose:</td> 
<td><input type="text" name="Purpose"/></td> 
</tr>
<tr><td>Action:</td> 
<td><input type="text" name="Action"/></td> 
</tr>

<td><input type="Submit" value="Submit"/></td> 
</tr>
 </form>
 </table>

</body>

</html>
<?php
$Name = filter_input(INPUT_POST,'Name');
$Email = filter_input(INPUT_POST,'Email');
$Contact = filter_input(INPUT_POST,'Contact');
$Person = filter_input(INPUT_POST,'Person');
$Worktype = filter_input(INPUT_POST,'Worktype');
$Purpose = filter_input(INPUT_POST,'Purpose');
$Action = filter_input(INPUT_POST,'Action');


	if(!empty($Name)){
		if(!empty($Email)){
			if(!empty($Contact)){
				if(!empty($Person)){
					if(!empty($Worktype)){
						if(!empty($Purpose)){
							if(!empty($Action)){
							
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
	$sql = "INSERT INTO visitor1 (Name,Email,Contact,Person,Worktype,Purpose,Action)
	values ('$Name','$Email','$Contact','$Person','$Worktype','$Purpose','$Action')";
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
	echo "Contact should not be empty";
	die();
}
}
else{
	echo "Person should not be empty";
	die();
}
}
else{
	echo "Worktype should not be empty";
	die();
}
}
else{
	echo "Purpose should not be empty";
	die();
}
}

else{
	echo "Action should not be empty";
	die();
}
?>


