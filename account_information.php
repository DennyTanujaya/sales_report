<?php
	$nama = $_POST['nama'];
	if(empty($nama)){
		header("Location: index.php");
	} else {
		$nama = $_POST['nama'];
		$eventName = $_POST['eventName'];
		$salesActivity = $_POST['salesActivity'];
		
		$salutation = $_POST['salutation'];
		if($salesActivity == 'salesVisit'){
			$salesVisit = $_POST['salesVisit'];
			$tradeShow = "";
		} else if($salesActivity == 'tradeShow'){
			$tradeShow = $_POST['tradeShow'];
			$salesVisit = "";
		}
		
	//echo $nama.'<br/ >';
	$mrname = $_POST['mrname'];
	$msname = $_POST['msname'];
	$mrsname = $_POST['mrsname'];
	$drname = $_POST['drname'];
	$profname = $_POST['profname'];
	//echo $salutation;
	if(!empty($mrname)){
		$name = $mrname;
	} else if (!empty($msname != '')){
		$name = $msname;
	} else if (!empty($mrsname != '')){
		$name = $mrsname;
	} else if (!empty($drname != '')){
		$name = $drname;
	} else if (!empty($profname != '')){
		$name = $profname;
	}
	
	//echo $salesActivity.''.$salesVisit.' '.$tradeShow.' '.$name;
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
                $("#industry").change(function(){
					if($(this).val() == "Other"){
						$(otherIndustry).show();
					} else {
						$(otherIndustry).hide();
					}
				});
				$(otherIndustry).hide();
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
		<center><h3>ACCOUNT & CONTACT INFORMATION</h3></center>
		<form action="interested_in.php" method="POST">
			<input type="hidden" name="nama" value="<?php echo $nama; ?>">
			<input type="hidden" name="salesActivity" value="<?php echo $salesActivity; ?>">
			<input type="hidden" name="salesVisit" value="<?php echo $salesVisit; ?>">
			<input type="hidden" name="tradeShow" value="<?php echo $tradeShow; ?>">
			<input type="hidden" name="name" value="<?php echo $name; ?>">
			<input type="hidden" name="eventName" value="<?php echo $eventName; ?>">
			<input type="hidden" name="salutation" value="<?php echo $salutation; ?>">
			<label for="typeAccount">TYPE ACCOUNT</label>
			<select id="typeAccount" name="typeAccount" id="typeAccount">
				<option value="">Please choose</option>
				<option value="New Account">New Account</option>
				<option value="New Lead">New Lead</option>
				<option value="Existing Account">Existing Account</option>
			</select>
			<br /><br />
			
			<label for="contactType">CONTACT TYPE</label>
			<select id="contactType" name="contactType" id="contactType">
				<option value="">Please choose</option>
				<option value="Owner / CEO / Managing Director">Owner / CEO / Managing Director</option>
				<option value="Business Development Director">Business Development Director</option>
				<option value="Business Development Manager">Business Development Manager</option>
				<option value="Business Development Officer">Business Development Officer</option>
				<option value="Operation Director">Operation Director</option>
				<option value="Operations Manager">Operations Manager</option>
				<option value="Operation Officer">Operation Officer</option>
				<option value="Product Director">Product Director</option>
				<option value="Product Manager">Product Manager</option>
				<option value="Product Officer">Product Officer</option>
				<option value="Reservations Manager">Reservations Manager</option>
				<option value="Reservations Officer">Reservations Officer</option>
				<option value="Sales & Marketing Director">Sales & Marketing Director</option>
				<option value="Sales & Marketing Manager">Sales & Marketing Manager</option>
				<option value="Sales & Marketing Officer">Sales & Marketing Officer</option>
			</select>
			<br /><br />
			
			<label for="rating">RATING</label>
			<select id="rating" name="rating" id="rating">
				<option value="">Please choose</option>
				<option value="Hot">Hot</option>
				<option value="Warm">Warm</option>
				<option value="Cold">Cold</option>
			</select>
			<br /><br />
			
			<label for="industry">INDUSTRY</label>
			<select id="industry" name="industry" id="industry">
				<option value="">Please choose</option>
				<option value="Accommodation">Accommodation</option>
				<option value="Activity Provider">Activity Provider</option>
				<option value="Corporate Travel">Corporate Travel</option>
				<option value="Cruise Company">Cruise Company</option>
				<option value="Government">Government</option>
				<option value="Guide / Tour Leader">Guide / Tour Leader</option>
				<option value="Media">Media</option>
				<option value="MICE">MICE</option>
				<option value="Museum / Site">Museum / Site</option>
				<option value="OTA">OTA</option>
				<option value="Restaurant / Bar">Restaurant / Bar</option>
				<option value="Travel Agent">Travel Agent</option>
				<option value="Transportation">Transportation</option>
				<option value="Tour Operator">Tour Operator</option>
				<option value="Other">Other</option>
			</select>
			<!-- FOR SELECT INDUSTRY -->
			<div id="otherIndustry">
				<label>Other</label>
				<input type='text' name="otherIndustry" id="otherIndustry">
			</div>
			<!-- END OF SELECT INDUSTRY -->
			<br /><br />
			
			<label for="affilation">AFFILATION</label>
			<select id="affilation" name="affilation" id="affilation">
				<option value="">Please choose</option>
				<option value="ABTA">ABTA</option>
				<option value="ASITA">ASITA</option>
				<option value="ASTA">ASTA</option>
				<option value="IAGTO">IAGTO</option>
				<option value="PATA">PATA</option>
				<option value="USTOA">USTOA</option>
				<option value="Virtuose">Virtuose</option>
				<option value="Ensemble Travel Group">Ensemble Travel Group</option>
				<option value="Traveller Made">Traveller Made</option>
				<option value="Signature Travel Network">Signature Travel Network</option>
			</select>
			<br /><br />
			
			<label for="emailMarketing">EMAIL MARKETING</label>
			<select id="emailMarketing" name="emailMarketing" id="emailMarketing">
				<option value="">Please choose</option>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
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