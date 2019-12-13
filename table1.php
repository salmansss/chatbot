
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
<p><a href="insert1.php" class="btn btn-primary">Add New</a></p>
<h1>Data Table</h1>
<table class="table table-striped table-bordered table-hover" id="mydata">
<thead>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Email</th>
	<th>Contact</th>
	<th>Person</th>
	<th>Worktype</th>
	<th>Purpose</th>
	<th>Action</th>
	</tr>
</thead>
<tfoot>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Email</th>
	<th>Contact</th>
	<th>Person</th>
	<th>Worktype</th>
	<th>Purpose</th>
	<th>Action</th>
	</tr>
</tfoot>
<tbody>
<?php
$mysqli = new mysqli("localhost","root","","chatbot");
if($mysqli->connect_error){
	echo "Failed connect (".$mysqli->connect_errno.") ".$mysqli->connect_error;
}
$query = $mysqli->query("select id,Name,Email,Contact,Person,Worktype,Purpose,Action from visitor1");
while($row = $query->fetch_assoc()){
	?>
	<tr>
	<td><?php echo $row['id'] ?></td>
	<td><?php echo $row['Name'] ?></td>
	<td><?php echo $row['Email'] ?></td>
	<td><?php echo $row['Contact'] ?></td>
	<td><?php echo $row['Person'] ?></td>
	<td><?php echo $row['Worktype'] ?></td>
	<td><?php echo $row['Purpose'] ?></td>
		<td><?php echo $row['Action'] ?></td>
	
	<td>
	<a href="edit1.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
	<a href="http://localhost/upContact/?idx=<?php echo $row['id'] ?>" class="btn btn-warning">Delete</a>
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