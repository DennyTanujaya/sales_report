<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Sales Report System</title>
		<link rel='stylesheet' type='text/css' href='asset/css/style.css' />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel='stylesheet' type='text/css' href='asset/css/styleProses.css' />
	</head>
	<body>
	<div id="header">
		<div id="logo">
			<img src="asset/Logo-Panorama.png" width='600px' height='150px'>
		</div>
		<!--
		<div id="logo-kanan">
			SALES ACTIVITY REPORT
		</div>
		-->
	</div>
	<div id="wrapper">
		<div id='container'>
			<center><h3>Welcome to PDES Sales Report System</h3></center>
			<form action="sales_activity.php" method="POST">
				<label for="nama">Creator Name</label>
				<input type="text" name="namaDepan" id="namaDepan">
				<br /><br />
				<label for="nama">Event Name</label>
				<input type="text" name="namaEvent" id="namaEvent">
				<br /><br />
				<input type="submit" name="submit" value="Next" />
			</form>
		</div>
		
		<center><h3>Databases</h3></center>
		<table align="center">
			<thead>
				<th>Event Name</th>
				<th>Name</th>
				<th>Sales Activity</th>
				<th>Date</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				include("config/connection.php");
				$conn = opencon();
				$sql="SELECT * FROM report ORDER BY date ASC";
				$result=mysqli_query($conn,$sql);
				while($row = mysqli_fetch_assoc($result)) {
					$id = $row['id'];
			?>
				<tr>
					<td><?php echo $row['eventName']; ?></td>
					<td><?php echo $row['salutation'].". ".$row['name']; ?></td>
					<td><?php echo $row['salesActivity']; ?></td>
					<td><?php echo $row['date']; ?></td>
					<td><a href="view.php?id=<?php echo $id; ?>"><img src="asset/look.png" width="20px" height="20px" /></a></td>
				</tr>
				
			<?php } ?>
			</tbody>
		</table>
	</div>
	</body>
	<script type="text/javascript" src="validasi.js"></script>
</html>