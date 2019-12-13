<html>
<link href='style3.css' rel='stylesheet'>
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
<title>Asked Question</title>
</head>

<body>


<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
<title>Data table</title>

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
<p><a href="insert.php" class="btn btn-primary">Add New</a></p>
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
$mysqli = new mysqli("localhost","root","","chatbot");
if($mysqli->connect_error){
	echo "Failed connect (".$mysqli->connect_errno.") ".$mysqli->connect_error;
}
$query = $mysqli->query("select id,Question,Answer,Date,Time from askedquestion");
while($row = $query->fetch_assoc()){
	?>
	<tr>
	<td><?php echo $row['id'] ?></td>
	<td><?php echo $row['Question'] ?></td>
	<td><?php echo $row['Answer'] ?></td>
	<td><?php echo $row['Date'] ?></td>
	<td><?php echo $row['Time'] ?></td>
	
	<td>
	<a href="edit1.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
	<a href="http://localhost/update/?idx=<?php echo $row['id'] ?>" class="btn btn-warning">Delete</a>
	</td>
	</tr>
	<?php
}
?>
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