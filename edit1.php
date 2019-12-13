<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
<title>Data table</title>
<body>

	<meta charset="utf-8">
<meta http-equiv="X-UA Compatible" content="IF=edge">
<meta name="viewport" content="width=device-width, initial-scale=1;">
<title>Bootstrap 101 Template</title>

<!-- Bootstrap-->
<link href="css/bootstrap.mtn.css" rel="stylesheet">
<link href="css/dataTable.bootstrap.min.css" rel="stylesheet">
</head>
<body>
<p><br/></p>
<div class="container">
<p><a href="edit11.php" class="btn btn-primary">Add New</a></p>
<h1>Data Table</h1>
<table class="table table-striped table-bordered table-hover" id="mydata">
<thead>
	<tr>
	<th>ID</th>
	<th>Question</th>
	<th>Answer</th>
	<th>Date</th>
	<th>Time</th>
	<th>Action</th>
	</tr>
</thead>
<tfoot>
	<tr>
	<th>ID</th>
	<th>Question</th>
	<th>Answer</th>
	<th>Date</th>
	<th>Time</th>
	<th>Action</th>
	</tr>
</tfoot>
<tbody>
<?php
//Database Connection
include 'conn.php';
//Get Id from database
if(isset($_GET['id'])){
	$sql = "SELECT * from data WHERE edit=" .$_GET['id'];
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	printf ("%s (%s)\n",$row["Question"],$row["Answer"],$row["Date"],$row["Time"]);
	mysqli_close($conn);
}
// Update Information
if(isset($_POST['btn-update'])){
	$Question = filter_input(INPUT_POST,'Question');
	$Answer = filter_input(INPUT_POST,'Answer');
	$Date = filter_input(INPUT_POST,'Date');
	$Time = filter_input(INPUT_POST,'Time');
	$update = "UPDATE data SET Question='$Question',Answer='$Answer',Date='$Date',Time='$Time' WHERE askedquestion=". $_GET['id'];
	$update = mysqli_query($conn ,$update);
	if(isset($sql)){
		die ("Error $sql" .mysqli_connect_error());
	}
	else
	{
		header("location: Table.php");
	}
}
$query = $mysqli->query("select id,Question,Answer,Date,Time from askedquestion");
while($row = $query->fetch_assoc()){
	
	
}
	?>
	<tr>
	<td><?php echo $row['id'] ?></td>
	<td><?php echo $row['Question'] ?></td>
	<td><?php echo $row['Answer'] ?></td>
	<td><?php echo $row['Date'] ?></td>
	<td><?php echo $row['Time'] ?></td>
	<td>
	<a href="edit1.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
	<a href="http://localhost/update/?idx=<?php echo $row['id'] ?>" class="btn btn-warning">Delete</a>
	</td>
	</tr>
	
</tbody>
</table>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTable.min.js"></script>
<script src="js/dataTable.bootstrap.min.js"></script>
<script>
$('#mydata').Table();
</script>
</body>
</html>
