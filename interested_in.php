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
	$salutation = $_POST['salutation'];
	$rating = $_POST['rating'];
	$industry = $_POST['industry'];
	if($industry = 'Other'){
		$otherIndustry = $_POST['otherIndustry'];
	}
	$affilation = $_POST['affilation'];
	$emailMarketing = $_POST['emailMarketing'];
	/*
	echo $nama.'<br/ >';
	echo $salesActivity.' '.$salesActivity.' '.$name.' '.$typeAccount.' '.$contactType.''.$rating.''.$industry.''.$affilation.''.$emailMarketing;
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
		<center><h3>INTERESTED IN</h3></center>
		<form action="account_owner.php" method="POST">
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
			<input type="hidden" name="typeAccount" value="<?php echo $typeAccount;?>">
			<input type="hidden" name="eventName" value="<?php echo $eventName; ?>">
			<input type="hidden" name="salutation" value="<?php echo $salutation; ?>">
			
			<label for="destination">DESTINATION</label>
			<select id="destination" name="destination" id="destination">
				<option value="">Please choose</option>
				<option value="Indonesia">Indonesia</option>
				<option value="Malaysia">Malaysia</option>
				<option value="Thailand">Thailand</option>
				<option value="Vietnam">Vietnam</option>
				<option value="Cambodia">Cambodia</option>
			</select>
			<br /><br />
			
			<label for="targetSegment">TARGET SEGMENT</label>
			<select id="targetSegment" name="targetSegment" id="targetSegment">
				<option value="">Please choose</option>
				<option value="FIT">FIT</option>
				<option value="MICE">MICE</option>
				<option value="Group Series">Group Series</option>
				<option value="Ad-Hoc Groups">Ad-Hoc Groups</option>
			</select>
			<br /><br />
			
			<label for="accommodation">ACCOMMODATION</label>
			<select id="accommodation" name="accommodation" id="accommodation">
				<option value="">Please choose</option>
				<option value="Hotel">Hotel</option>
				<option value="Resort">Resort</option>
				<option value="Villa">Villa</option>
				<option value="Boutique Style">Boutique Style</option>
				<option value="3-Star">3-Star</option>
				<option value="4-Star">4-Star</option>
				<option value="5-Star Premium">5-Star Premium</option>
				<option value="5-Star Deluxe">5-Star Deluxe</option>
			</select>
			<br /><br />
			
			<label for="products">PRODUCTS & SERVICES</label>
			<select id="products" name="products" id="products">
				<option value="">Please choose</option>
				<option value="Cooking Class">Cooking Class</option>
				<option value="Cruises">Cruises</option>
				<option value="Culture & Traditional Life Style">Culture & Traditional Life Style</option>
				<option value="Day Tours">Day Tours</option>
				<option value="Diving">Diving</option>
				<option value="Fishing">Fishing</option>
				<option value="Flash Sales">Flash Sales</option>
				<option value="Golf">Golf</option>
				<option value="Multi Island Tours">Multi Island Tours</option>
				<option value="Shocking Offers">Shocking Offers</option>
				<option value="SIC Tours">SIC Tours</option>
				<option value="SIC Transfer">SIC Transfer</option>
				<option value="Spa">Spa</option>
				<option value="Tailor-made Experiences">Tailor-made Experiences</option>
				<option value="Trekking">Trekking</option>
				<option value="Packages">Packages</option>
				<option value="Private Transfer">Private Transfer</option>
				<option value="Wildlife">Wildlife</option>
				<option value="Yoga Class">Yoga Class</option>
			</select>
			<br /><br />
			
			<label for="pcAccommodation">PC ACCOMMODATION</label>
			<select id="pcAccommodation" name="pcAccommodation" id="pcAccommodation">
				<option value="">Please choose</optionpc>
				<option value="A1 (20)">A1 (20)</option>
				<option value="A2 (17)">A2 (17)</option>
				<option value="A3 (15)">A3 (15)</option>
				<option value="A4 (12)">A4 (12)</option>
				<option value="A5 (10)">A5 (10)</option>
				<option value="A6 (8)">A6 (8)</option>
				<option value="A7 (5)">A7 (5)</option>
				<option value="A8 (2)">A8 (2)</option>
			</select>
			<br /><br />
			
			<label for="pcPcm">PC PCM</label>
			<select id="pcPcm" name="pcPcm" id="pcPcm">
				<option value="">Please choose</optionpc>
				<option value="O1 (35)">O1 (35)</option>
				<option value="O2 (30)">O2 (30)</option>
				<option value="O3 (25)">O3 (25)</option>
				<option value="O4 (15)">O4 (15)</option>
				<option value="O5 (15)">O5 (15)</option>
				<option value="O6 (12)">O6 (12)</option>
				<option value="O7 (8)">O7 (8)</option>
				<option value="O8 (5)">O8 (5)</option>
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