<?php

session_start();

//Database Information

$dbhost = "localhost";
$dbname = "pass";
$dbuser = "root";
$dbpass = "";

//Connect to database

$conn = mysql_connect ( $dbhost, $dbuser, $dbpass)or die("Could not connect: ".mysql_error());
mysql_select_db($dbname, $conn) or die(mysql_error());

$username = $_POST['username'];
$password = $_POST['password'];

  mysql_query("UPDATE mysql.user SET Password = PASSWORD('$password') WHERE User='$username'");
  echo("Thank You. Your Password has been successfully changed.");
?>