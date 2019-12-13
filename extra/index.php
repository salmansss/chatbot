<!DOCTYPE html>
<html lang="en">
<head>
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
<p><a href="http://localhost/insert" class="btn btn-primary">Add New</a></p>
<h1>Data Table</h1>
<table class="table table-striped table-bordered table-hover" id="mydata">
<thead>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Email</th>
	<th>Phone</th>
	<th>Address</th>
	<th>Action</th>
	</tr>
</thead>
<tfoot>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Email</th>
	<th>Phone</th>
	<th>Address</th>
	<th>Action</th>
	</tr>
</tfoot>
<tbody>
<?php
$mysqli = new mysqli("localhost","root","","simpledata");
if($mydqli->connect_error){
	echo "Failed connect (".$mysqli->connect_errno.") ".$mysqli->connect_error;
}
$query = $mysqli->query("select id,name,email,phone,address from crud");
while($row = $query->fetch_assoc()){
	?>
	<tr>
	<td><?php echo $row['id'] ?></td>
	<td><?php echo $row['name'] ?></td>
	<td><?php echo $row['email'] ?></td>
	<td><?php echo $row['phone'] ?></td>
	<td><?php echo $row['address'] ?></td>
	<td>
	<a href="http://localhost/update/?idx=<?php echo $row['id'] ?>" class="btn btn-warning">Edit</a>
	<a href="http://localhost/update/?idx=<?php echo $row['id'] ?>" class="btn btn-warning">Edit</a>
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
$('#mydata').dataTable();
</script>
</body>
</html>
}
<?php
$mysqli = new mysqli("localhost","root","","simpledata");
if($mydqli->connect_error){
	echo "Failed connect (".$mysqli->connect_errno.") ".$mysqli->connect_error;
}
$query = $mysqli->query("select id,name,email,phone,address from crud");
while($row = $query->fetch_assoc()){
	?>
	<tr>
	<td><?php echo $row['id'] ?></td>
	<td><?php echo $row['name'] ?></td>
	<td><?php echo $row['email'] ?></td>
	<td><?php echo $row['phone'] ?></td>
	<td><?php echo $row['address'] ?></td>
	<td>
	<a href="http://localhost/update/?idx=<?php echo $row['id'] ?>" class="btn btn-warning">Edit</a>
	<a href="http://localhost/update/?idx=<?php echo $row['id'] ?>" class="btn btn-warning">Edit</a>
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
$('#mydata').dataTable();
</script>
</body>

}