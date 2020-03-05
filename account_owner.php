<?php
	$nama = $_POST['nama'];
	if(empty($nama)){
		header("Location: index.php");
	} else {
		$nama = $_POST['nama'];
		$salesActivity = $_POST['salesActivity'];
		$eventName = $_POST['eventName'];
		if($salesActivity == 'salesVisit'){
			$salesVisit = $_POST['salesVisit'];
			$tradeShow = "";
		} else if($salesActivity == 'tradeShow'){
			$tradeShow = $_POST['tradeShow'];
			$salesVisit = "";
		}
	$name = $_POST['name'];
	
	$typeAccount = $_POST['typeAccount'];
	$contactType = $_POST['contactType'];
	$rating = $_POST['rating'];
	$industry = $_POST['industry'];
	if($industry = 'Other'){
		$otherIndustry = $_POST['otherIndustry'];
	}
	$affilation = $_POST['affilation'];
	$salutation = $_POST['salutation'];
	$emailMarketing = $_POST['emailMarketing'];
	$destination = $_POST['destination'];
	$targetSegment = $_POST['targetSegment'];
	$accommodation = $_POST['accommodation'];
	$products = $_POST['products'];
	$pcAccommodation = $_POST['pcAccommodation'];
	$pcPcm = $_POST['pcPcm'];
	/*
	echo $nama.'<br/ >';
	echo $salesActivity.' '.$salesActivity.' '.$tradeshow.' '.$name.' '.$typeAccount.' '.$contactType.''.$rating.''.$industry.''.$affilation.''.$emailMarketing.'<br />';
	echo $destination.''.$targetSegment.''.$accommodation.''.$products.''.$pcAccommodation.''.$pcPcm.'<br />';
	*/
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
		<center><h3>ACCOUNT OWNER</h3></center>
		<form action="tourplan_information.php" method="POST">
			<input type="hidden" name="nama" value="<?php echo $nama; ?>">
			<input type="hidden" name="salesActivity" value="<?php echo $salesActivity; ?>">
			<input type="hidden" name="salesVisit" value="<?php echo $salesVisit; ?>">
			<input type="hidden" name="tradeShow" value="<?php echo $tradeShow; ?>">
			<input type="hidden" name="name" value="<?php echo $name; ?>">
			<input type="hidden" name="contactType" value="<?php echo $contactType; ?>">
			<input type="hidden" name="rating" value="<?php echo $rating;?>">
			<input type="hidden" name="industry" value="<?php echo $industry;?>">
			<input type="hidden" name="otherIndustry" value="<?php echo $otherIndustry;?>">
			<input type="hidden" name="affilation" value="<?php echo $affilation;?>">
			<input type="hidden" name="emailMarketing" value="<?php echo $emailMarketing;?>">
			<input type="hidden" name="destination" value="<?php echo $destination;?>">
			<input type="hidden" name="targetSegment" value="<?php echo $targetSegment;?>">
			<input type="hidden" name="accommodation" value="<?php echo $accommodation;?>">
			<input type="hidden" name="products" value="<?php echo $products;?>">
			<input type="hidden" name="pcAccommodation" value="<?php echo $pcAccommodation;?>">
			<input type="hidden" name="pcPcm" value="<?php echo $pcPcm;?>">
			<input type="hidden" name="typeAccount" value="<?php echo $typeAccount;?>">
			<input type="hidden" name="eventName" value="<?php echo $eventName; ?>">
			<input type="hidden" name="salutation" value="<?php echo $salutation; ?>">
			
			<label for="accountOwnerId">ACCOUNT OWNER ID</label>
			<select id="accountOwnerId" name="accountOwnerId" id="accountOwnerId">
				<option value="">Please choose</option>
				<option value="Andi A. Rusli">Andi A. Rusli</option>
				<option value="Andrew Prosiana">Andrew Prosiana</option>
				<option value="Carla Roozen">Carla Roozen</option>
				<option value="Geoffrey Berdal">Geoffrey Berdal</option>
				<option value="Marco Degani">Marco Degani</option>
				<option value="Martini Polina">Martini Polina</option>
				<option value="Melvyn Lil">Melvyn Lil</option>
				<option value="Ricky Leo">Ricky Leo</option>
				<option value="Ricky Setiawanto">Ricky Setiawanto</option>
				<option value="Rocky Praputranto">Rocky Praputranto</option>
				<option value="Taufik Brata">Taufik Brata</option>
			</select>
			<br /><br />
			
			<label for="accountOwnerMy">ACCOUNT OWNER MY</label>
			<select id="accountOwnerMy" name="accountOwnerMy" id="accountOwnerMy">
				<option value="">Please choose</option>
				<option value="Noor M. Ismail">Noor M. Ismail</option>
			</select>
			<br /><br />
			
			<label for="accountOwnerTh">Account Owner TH</label>
			<select id="accountOwnerTh" name="accountOwnerTh" id="accountOwnerTh">
				<option value="">Please choose</option>
				<option value="Nicola Scaramuzzino">Nicola Scaramuzzino</option>
			</select>
			<br /><br />
			
			<label for="accountOwnerVt">Account Owner VT</label>
			<select id="accountOwnerVt" name="accountOwnerVt" id="accountOwnerVt">
				<option value="">Please choose</option>
				<option value="Kim Tuong Trang">Nicola Scaramuzzino</option>
			</select>
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