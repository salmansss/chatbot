<?php
// regular expression
//^
extract($_POST);
if(isset($save))
{
$pattern="//";
if(preg_match($pattern,$n))
{
	echo "string matched"
}
else
{
	echo= "not matched"
}
}
?>
<html>
<head>
<title>Regaular Expreesion</title>
</head>
<body>
	<form method="POST">
	<input type="text" name="n" /><br>
	<input type="submit" name="save" value="submit" />
	</form>
</body>
</html>