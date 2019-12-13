<!DOCTYPE html>
<html>
<link href='style5.css' rel='stylesheet'>
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
<title>Change Password</title>
<style type="text/css">
fieldset {
	width:500px;
	border:5px dashed #CCCCCC;
	margin:0 auto;
	border-radius:5px;
}

legend {
	color: blue;
	font-size: 25px;
}

dl {
	float: right;
	width: 390px;
}

dt {
	width: 180px;
	color: brown;
	font-size: 19px;
}

dd {
	width:200px;
	float:left;
}

dd input {
	width: 200px;
	border: 2px dashed #DDD;
	font-size: 15px;
	text-indent: 5px;
	height: 28px;
}

.btn {
	color: #fff;
	background-color: dimgrey;
	height: 38px;
	border: 2px solid #CCC;
	border-radius: 10px;
	float: right;
}

</style>
</head>

<body>
	<fieldset>
		<legend>Change Password</legend>
	<?php 
		$mysqli = new mysqli("localhost","root","","chatbot");
		if(isset($_POST['RE_Password']))
		{
		$Password=$_POST['Password'];
		$NEW_Password=$_POST['NEW_Password'];
		$RE_Password=$_POST['RE_Password'];
		$chg_pwd=mysqli_query("select * from changepassword where id='2'");
		$chg_pwd1=mysqli_fetch_array($chg_pwd);
		$data_pwd=$chg_pwd1['student'];
		if($data_pwd==$Password){
		if($new_pass==$RE_Password){
			$update_pwd=mysqli_query("update changepassword set password='$NEW_Password' where id='2'");
			echo "<script>alert('Update Sucessfully'); window.location='changepassword.php'</script>";
		}
		else{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='changepassword.php'</script>";
		}
		}
		else
		{
		echo "<script>alert('Your old password is wrong'); window.location='changepassword.php'</script>";
		}}
	?>
	
	<form method="post">
		<dl>
			<dt>
				Old Password
			</dt>
				<dd>
					<input type="password" name="old_pass" placeholder="Old Password..." value="" required />
				</dd>
		</dl>
		<dl>
			<dt>
				New Password
			</dt>
				<dd>
					<input type="password" name="new_pass" placeholder="New Password..." value=""  required />
				</dd>
		</dl>
		<dl>
			<dt>
				Retype New Password
			</dt>
				<dd>
					<input type="password" name="re_pass" placeholder="Retype New Password..." value="" required />
				</dd>
		</dl>
		
		<p align="center">
			<input type="submit" class="btn" value="Reset Password" name="re_password" />
		</p>
	</form>
	</fieldset>
</body>
</html>