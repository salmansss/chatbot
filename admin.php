<html>
<link href='style.css' rel='stylesheet'>
<ul>
<li><a href="http://theemcoe.org/about.html">ABOUT</a></li>
<li><a href="student.php">STUDENT</a>
<ul>
<li><a>OUR TEAM</a></li>
<li><a>Camp Sites</a></li>
<li><a href="http://theemcoe.org/vision.html">Mission &amp; Vision</a></li>
<li><a href="Student Corner<svg class="icon icon-angle-down" aria-hidden="true" role="img"> <use href="#icon-angle-down" xlink:href="#icon-angle-down"></use> </svg></a>
<ul class="sub-menu">
	<li id="menu-item-31" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31"><a href="https://drive.google.com/open?id=0B7_SN3ULA_M_fmc0Rkg2bnZRdnl3blktUEhhWWFiQkpXdDdEb0QxZDk3Z0Vmcms3ejJvbEE">Project Files</a></li>
	<li id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20"><a href="http://goo.gl/forms/0vZ7uDL3to">Train Concession</a></li>
	<li id="menu-item-109" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-109"><a href="https://drive.google.com/drive/folders/0B4dTTaCxQJ2tZ1lCM21VbFVJMW8?usp=sharing">University Question Papers</a></li>
	<li id="menu-item-110" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-110"><a href="http://mechbook.theemmech.in">MechBook</a></li>
	<li id="menu-item-110" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-110"><a href="extra.html">Extra</a></li>
	</ul>
</li></a></li>
</ul>
</li>
<li><a href="visitor.php">VISITOR</a>
<ul>
<li><a>Activities</a></li>
<li><a>Parks</a></li>
<li><a href="canteen.jpg">Canteen</a></li>
<li><a>Events</a></li>
<li><a href="https://muquestionpapers.com/">Download paper</a></li>
</ul>
</li>
<li><a href="query.php">CHATBOT</a>
<ul>
<li><a href="boisarmap.gif">Map</a></li>
<li><a href="https://www.bing.com/maps?q=boisar+direction&FORM=HDRSC4">Directions</a></li>
<li><a href="http://www.photos.theemmech.in/">Photo Gallery</a></li>
</ul>
</li>
<li><a href="faculty.php">FACULTY</a></li>
<ul>
<li><a href="admin.php">ADMIN</a></li>
</li>
</ul>
<head>
<title>ADMIN</title>
</head>

<body>

<script language="javascript"> 
function validation() 
{ 
var x=f.un.value; 
var len=x.length; 
var val=x.charCodeAt(0); 
var p=f.pw.value; 
var c=f.cpw.value;  
if(len<6 || x=='' || x==null)  
{ 
alert("check your username ! It must be minimum 6 characters"); 
if(val<65 || val>90 && val<97 || val>122) 
alert("username must begin with an alphabet"); 
return false; 
} 
else if(p=='' || c=='' || p.length<6 || c.length<6 || p!=c) 
{ 
alert("Password and Confirm Password should be same and greater than 6 characters!"); 
return false; 
} 
</script> 
<h2>About ADMIN</h2>
<p>Hey there!i'm your superman<br>
Always to the rescue<br>
"Well most of the time P"</p>
<center><form name="f" action="admin.php" onsubmit="return validation();" method="post"> 
Username : <input type="text" name="username"><br><br>
Password : <input type="password" name="password"><br><br>
 <a href="askedquestion.php"><input type="submit" name="Submit"></a><br><br>
 <p>
 <a href="askedquestion.php">
 <img src="5.jpg" alt="Direction" height"30" width="100"></a>
 </form></center>
</body>
</html>
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