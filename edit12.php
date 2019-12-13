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
//Database Connection
include 'conn.php';
//Get Id from database
if(isset($_GET['id'])){
	$sql = "SELECT * from data WHERE edit=" .$_GET['id'];
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	printf ("%s (%s)\n",$row["Name"],$row["Email"],$row["Contact"],$row["Person"],$row["Worktype"],$row["Purpose"],$row["Action"]);
	mysqli_close($conn);
}
// UpContact Information
if(isset($_POST['btn-upContact'])){
	$Name = filter_input(INPUT_POST,'Name');
	$Email = filter_input(INPUT_POST,'Email');
	$Contact = filter_input(INPUT_POST,'Contact');
	$Person = filter_input(INPUT_POST,'Person');
	$Worktype = filter_input(INPUT_POST,'Worktype');
	$Purpose = filter_input(INPUT_POST,'Purpose');
	$Action = filter_input(INPUT_POST,'Add');
	
	$update = "UPDATE data SET Name='$Name',Email='$Email',Contact='$Contact',Person='$Person',Worktype='$Worktype',Purpose='$Purpose',Action='$Action' WHERE visitordetail1=". $_GET['id'];
	$update = mysqli_query($conn ,$update);
	if(isset($sql)){
		die ("Error $sql" .mysqli_connect_error());
	}
	else
	{
		header("location: Table1.php");
	}
}
$query = $mysqli->query("select id,Name,Email,Contact,Person,Worktype,Purpose,Action from visitor1");
while($row = $query->fetch_assoc(MYSQLI_ASSOC)){
	
	
}
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
	<a href="edit12.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
	<a href="http://localhost/upContact/?idx=<?php echo $row['id'] ?>" class="btn btn-warning">Delete</a>
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
$('#mydata').Table1();
</script>
</body>
</html>
