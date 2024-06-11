<?php
session_start();
include "databaseconnection.php";


$query = "SELECT name, email, password, address, mobile FROM user";
?>
<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/jquery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-bordered" width="900px" style="text-align: center">
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Password</th>
					<th>Address</th>
					<th>Mobile</th>
				</tr>
				<?php
				$query_run = mysqli_query($conn, $query);
				if ($query_run) {
					while ($row = mysqli_fetch_assoc($query_run)){
						$name = $row['name'];
						$email = $row['email'];
						$password = $row['password'];
						$address = $row['address'];
						$mobile = $row['mobile'];
				?>
				<tr>
					<td><?php echo $name; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo $password; ?></td>
					<td><?php echo $address; ?></td>
					<td><?php echo $mobile; ?></td>
				</tr>
				<?php
					}
				} else {
					echo "<tr><td colspan='5'>No records found</td></tr>";
				}
				?>
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
</body>
</html>
