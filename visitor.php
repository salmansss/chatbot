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
<title>VISITOR</title>
</head>

<body>
<style>
input[type=text]{
	width:50%;
	border;2px solid #aaa;
	border-radius:4px;
	margin:8px 0;
	outline:none;
	padding:8px;
	box-sizzing:border-box;
	transition:.3s;
}
input[type=text]:focus{
	border-color:dodgerBlue;
	box-shadow:0 0 8px 0 dodgerBlue;
}
</style>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $visitErr = $seeErr = $contactErr = "";
$name = $email = $visit = $purpose = $see = $contact = "";


  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["contact"])) {
    $contactErr = "Contact is required";
  } else {
    $contact = test_input($_POST["contact"]);
  }
  if (empty($_POST["see"])) {
    $seeErr = "See is required";
  } else {
    $see = test_input($_POST["see"]);
  }
  if (empty($_POST["purpose"])) {
    $purpose = "";
  } else {
    $purpose = test_input($_POST["purpose"]);
  }

 

  if (empty($_POST["Visit"])) {
    $visitErr = "Visit is required";
  } else {
    $visit = test_input($_POST["visit"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<center><h2>THEEM COLLEGE OF ENGINEERING</h2></center>

<form name="f" action="visitor.php" onsubmit="return validation();" method="post"> 
  <center>Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Contact: <input type="text" name="contact">
  <span class="error"> * <?php echo $contactErr;?></span>
  <br><br>
  To See: <input type="text" name="see">
  <span class="error">* <?php echo $seeErr;?></span>
  <br><br>
  Purpose of Visit:<textarea name="purpose" rows="5" cols="40"></textarea>
  <br><br>
  Visit officially:
  <ul><input type="radio" name="visit" value="Official">Official
  <input type="radio" name="visit" value="Personal">Personal
  <span class="error">* <?php echo $visitErr;?></span>
  </ul>
  <br><br>
  <input type="submit" name="submit" value="Submit">  </center>
</form>
</body>
</html>
<?php
$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email');
$contact = filter_input(INPUT_POST,'contact');
$see = filter_input(INPUT_POST,'see');
$purpose = filter_input(INPUT_POST,'purpose');
$visit = filter_input(INPUT_POST,'visit');
if(!empty($name)){
	if(!empty($email)){
		if(!empty($contact)){
			if(!empty($see)){
				if(!empty($purpose)){
					if(!empty($visit)){
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
	$sql = "INSERT INTO visitor (name,email,contact,see,purpose,visit)
	values ('$name','$email','$contact','$see','$purpose','$visit')";
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
	echo "See should not be empty";
	die();
}
		}
else{
	echo "Purpose should not be empty";
	die();
}

}
else{
	echo "Visit should not be empty";
	die();
}
?>