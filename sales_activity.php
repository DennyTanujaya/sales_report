<?php 
	$nama = $_POST['namaDepan'];
	if(empty($nama)){
		header("Location: index.php");
	} else {
		$nama = $_POST['namaDepan'];
		$eventName = $_POST['namaEvent'];
		//echo 'Nama:'.$nama.'<br/ >';
?>
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
		
		<script>
			$(document).ready(function(){
                $("#salesActivity").change(function(){
					if($(this).val() == "salesVisit"){
						$(salesVisit).show();
					} else {
						$(salesVisit).hide();
					}
					if($(this).val() == "tradeShow"){
						$(tradeShow).show();
					} else {
						$(tradeShow).hide();
					}
				});
				$(tradeShow).hide();
				$(salesVisit).hide();
			});
			
			$(document).ready(function(){
                $("#salutation").change(function(){
					if($(this).val() == "Mr"){
						$(mrname).show();
					} else {
						$(mrname).hide();
					}
					if($(this).val() == "Ms"){
						$(msname).show();
					} else {
						$(msname).hide();
					}
					if($(this).val() == "Mrs"){
						$(mrsname).show();
					} else {
						$(mrsname).hide();
					}
					if($(this).val() == "Dr"){
						$(drname).show();
					} else {
						$(drname).hide();
					}
					if($(this).val() == "Prof"){
						$(profname).show();
					} else {
						$(profname).hide();
					}
				});
				$(mrname).hide();
				$(mrsname).hide();
				$(msname).hide();
				$(drname).hide();
				$(profname).hide();
			});
			
		</script>
		
	</head>
	<body>
	<div id="header">
		<div id="logo">
			<img src="asset/Logo-Panorama.png" width='600px' height='150px'>
		</div>
		<div id="logo-kanan">
			SALES ACTIVITY REPORT
		</div>
	</div>
	<div id="wrapper">
		<div id='container'>
		<center><h3>Welcome to PDES Sales Report System</h3></center>
		<form action="account_information.php" method="POST">
			<input type="hidden" name="nama" value="<?php echo $nama; ?>">
			<input type="hidden" name="eventName" value="<?php echo $eventName; ?>">
			<label for="salesActivity">SALES ACTIVITY</label>
			<select id="salesActivity" name="salesActivity" id="salesActivity">
				<option value="">Please choose</option>
				<option value="salesVisit">Sales Visit</option>
				<option value="tradeShow">Trade Show</option>
			</select>
			<!-- For SELECT SALES ACTIVITY -->
			<div id="salesVisit">
				<label>SALES VISIT:</label>
				<textarea name="salesVisit" id="salesVisit" rows="5" cols="40"></textarea>
			</div>
			<div id="tradeShow">
				<label>TRADE SHOW:</label>
				<textarea name="tradeShow" id="tradeShow" rows="5" cols="40"></textarea>
			</div>
			<!-- END OF SELECT SALES ACTIVITY -->
			<br /><br />
			
			<label for="salutation">SALUTATION</label>
			<select id="salutation" name="salutation" id="salutation">
				<option value="">Please choose</option>
				<option value="Mr">Mr.</option>
				<option value="Ms">Ms.</option>
				<option value="Mrs">Mrs.</option>
				<option value="Dr">Dr.</option>
				<option value="Prof">Prof.</option>
			</select>
			<!-- For SELECT SALUTATION -->
			<div id="mrname">
				<label>Mr.</label>
				<input type='text' name="mrname" id="mrname">
			</div>
			<div id="msname">
				<label>Ms.</label>
				<input type='text' name="msname" id="msname">
			</div>
			<div id="mrsname">
				<label>Mrs.</label>
				<input type='text' name="mrsname" id="mrsname">
			</div>
			<div id="drname">
				<label>Dr.</label>
				<input type='text' name="drname" id="drname">
			</div>
			<div id="profname">
				<label>Prof.</label>
				<input type='text' name="profname" id="profname">
			</div>
			<!-- END OF SELECT SALUTATION -->
			<br /><br />
			<input type="submit" name="submit" value="Next" />
			<center><input type='button' value='Go Back' onclick="history.back(-1)" /></center>
		</form>
		</div>
	</div>
	</body>
	<script type="text/javascript" src="validasi.js"></script>
</html>
<?php } ?>