<html>
<link href='style.css' rel='stylesheet'>
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
<li><a>CHANGE PASSWORD</a>
<ul>
<li><a>Map</a></li>
<li><a>Directions</a></li>
</ul>
</li>
<li><a>LOGOUT</a></li>
     <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Password Change</title>
     </head>
    <body>
	<br>
	<br>
	<br>
    <center><h1>Change Password</h1>

   <form method="POST" action="student.php">
    <table>
    <tr>
   <td>Enter your UserName</td>
    <td><input type="username" size="10" name="username"></td>
	</tr>
	<tr>
    <td>Enter your existing password:</td>
    <td><input type="password" size="10" name="password"></td>
    </tr>
  <tr>
    <td>Enter your new password:</td>
    <td><input type="password" size="10" name="newpassword"></td>
    </tr>
    <tr>
   <td>Re-enter your new password:</td>
   <td><input type="password" size="10" name="confirmnewpassword"></td>
    </tr>
    </table>
    <p><input type="submit" value="Update Password">
    </form>
  </center>
   </body>
    </html>
	<?php
$host = "localhost";
$dbname = "chatbot";
$dbusername = "root";
$dbpassword = "";

//Connect to database

$link= mysql_connect ("$host","$dbusername","$dbpassword")or die("Could not connect: ".mysql_error());
mysql_select_db("$dbname") or die(mysql_error());
        $username = $_POST['username'];
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
        $result = mysql_query("SELECT password FROM users WHERE login='$username'");
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        else if($password!= mysql_result($result, 0))
        {
        echo "You entered an incorrect password";
        }
        if($newpassword=$confirmnewpassword)
        $sql=mysql_query("UPDATE users SET password='$newpassword' where login='$username'");

        if($sql)
        {
        echo "Congratulations You have successfully changed your password";
        }
       else
        {
       echo "The new password and confirm new password fields must be the same";
       }

      ?>