<html>
<link href='style2.css' rel='stylesheet'>
<ul>
<li><a href="query.php">QUERY</a></li>
<li><a>PREVIOUS RESULT</a>
<ul>
<li><a>OUR TEAM</a></li>
<li><a>Camp Sites</a></li>
<li><a>Mission &amp; Vision</a></li>
<li><a>Resource</a></li>
</ul>
</li>
<li><a>MY ACCOUNT</a>
<ul>
<li><a>Activities</a></li>
<li><a>Parks</a></li>
<li><a>Canteen</a></li>
<li><a>Events</a></li>
</ul>
</li>
<li><a href="changepassword.php">CHANGE PASSWORD</a>
<ul>
<li><a>Map</a></li>
<li><a>Directions</a></li>
</ul>
</li>
<li><a href="homepage.html">LOGOUT</a></li>
<head>
		<title>chat-bot</title>
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/index.css" />
		
	</head>
	<body>
		<div class="container">
			<h1 class="title">College Chatbot System</h1>
			<div class="chat"></div>
			<div class="busy"></div>
			<div class="input">
				<input type="text" placeholder="please type in small letters!" />
				<a>Send</a>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
		<script type="text/javascript" src="js/chatbot.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
		<br>
<br>
<br>
<br>
<br>
<br>
<center><h1>Namastey!How may we help you?<br>
<a href="https://docs.google.com/forms/d/1hEcednXH7c0i8rxO7Lcp4NHCzW2--WzpjPP5WQEGTH8/edit">Click Here Write query here?</a></h1></center>
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
<form name="f" action="query.php" onsubmit="return validation();" method="post"> 

</form>
</body>
</html>
<?php
$Query = filter_input(INPUT_POST,'Query');
	if(!empty($Query)){
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
	$sql = "INSERT INTO query (Query)
	values ($Query)";
	if($conn->query($sql)){
		echo "New record is inserted sucessfully";
}
else{
	echo "Error: ".$sql ."<br>". $conn->error;
}
$conn->close();
}
}



?>