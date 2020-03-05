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
	$salutation = $_POST['salutation'];
	$industry = $_POST['industry'];
	if($industry = 'Other'){
		$otherIndustry = $_POST['otherIndustry'];
	}
	$affilation = $_POST['affilation'];
	$emailMarketing = $_POST['emailMarketing'];
	$destination = $_POST['destination'];
	$targetSegment = $_POST['targetSegment'];
	$accommodation = $_POST['accommodation'];
	$products = $_POST['products'];
	$pcAccommodation = $_POST['pcAccommodation'];
	$pcPcm = $_POST['pcPcm'];
	
	$accountOwnerId = $_POST['accountOwnerId'];
	$accountOwnerMy = $_POST['accountOwnerMy'];
	$accountOwnerTh = $_POST['accountOwnerTh'];
	$accountOwnerVt = $_POST['accountOwnerVt'];
	/*
	echo $nama.'<br/ >';
	echo $salesActivity.' '.$salesActivity.' '.$tradeshow.' '.$name.' '.$typeAccount.' '.$contactType.''.$rating.''.$industry.''.$affilation.''.$emailMarketing.'<br />';
	echo $destination.''.$targetSegment.''.$accommodation.''.$products.''.$pcAccommodation.''.$pcPcm.'<br />';
	echo $accountOwnerId.''.$accountOwnerMy.''.$accountOwnerTh.''.$accountOwnerVt.'<br />';
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
		
		<script>
			$(document).ready(function(){
                $("#credit").change(function(){
					if($(this).val() == "Credit Limit Amount"){
						$(creditLimitAmount).show();
					} else {
						$(creditLimitAmount).hide();
					}
				});
				$(creditLimitAmount).hide();
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
		<center><h3>TOURPLAN INFORMATION</h3></center>
		<form action="summary.php" method="POST">
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
			<input type="hidden" name="accountOwnerId" value="<?php echo $accountOwnerId;?>">
			<input type="hidden" name="accountOwnerMy" value="<?php echo $accountOwnerMy;?>">
			<input type="hidden" name="accountOwnerTh" value="<?php echo $accountOwnerTh;?>">
			<input type="hidden" name="accountOwnerVt" value="<?php echo $accountOwnerVt;?>">
			<input type="hidden" name="typeAccount" value="<?php echo $typeAccount;?>">
			<input type="hidden" name="eventName" value="<?php echo $eventName; ?>">
			<input type="hidden" name="salutation" value="<?php echo $salutation; ?>">
			
			<label for="defaultCurrency">DEFAULT CURRENCY</label>
			<select id="defaultCurrency" name="defaultCurrency" id="defaultCurrency">
				<option value="">Please choose</option>
				<option value="USD">USD</option>
				<option value="EUR">EUR</option>
				<option value="MYR">MYR</option>
				<option value="IDR">IDR</option>
				<option value="CNY">CNY</option>
				<option value="SGD">SGD</option>
				<option value="THR">THR</option>
			</select>
			<br /><br />
			
			<label for="language">LANGUAGE</label>
			<select id="language" name="language" id="language">
				<option value="">Please choose</option>
				<option value="English">English</option>
				<option value="French">French</option>
				<option value="Mandarin">Mandarin</option>
				<option value="Spanish">Spanish</option>
				<option value="German">German</option>
			</select>
			<br /><br />
			
			<label for="sourceMarket">SOURCE MARKET</label>
			<select id="sourceMarket" name="sourceMarket" id="sourceMarket">
				<option value="">Please choose</option>
				<option value="Australia / New Zealand">Australia / New Zealand</option>
				<option value="CIS / Russia">CIS / Russia</option>
				<option value="East Asia">East Asia</option>
				<option value="East Europe">East Europe</option>
				<option value="Europe">Europe</option>
				<option value="France">France</option>
				<option value="Golf">Golf</option>
				<option value="Latin America">Latin America</option>
				<option value="Mediterranean">Mediterranean</option>
				<option value="Middle East">Middle East</option>
				<option value="North America">North America</option>
				<option value="Scandinavia">Scandinavia</option>
				<option value="South Africa">South Africa</option>
				<option value="South Asia">South Asia</option>
				<option value="South East Asia">South East Asia</option>
				<option value="UK">UK</option>
				<option value="Worldwide">Worldwide</option>
			</select>
			<br /><br />
			
			<label for="credit">CREDIT</label>
			<select id="credit" name="credit" id="credit">
				<option value="">Please choose</option>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
				<option value="Credit Limit Amount">Credit Limit Amount</option>
			</select>
			<!-- FOR SELECT credit -->
			<div id="creditLimitAmount">
				<label>CREDIT LIMIT AMOUNT</label>
				<input type='text' name="creditLimitAmount" id="creditLimitAmount">
			</div>
			<!-- END OF SELECT INDUSTRY -->
			<br /><br />
			
			<label for="numberOfDays">NUMBER OF DAYS</label>
			<select id="numberOfDays" name="numberOfDays" id="numberOfDays">
				<option value="">Please choose</option>
				<option value="7">7</option>
				<option value="14">14</option>
				<option value="21">21</option>
				<option value="30">30</option>
			</select>
			<br /><br />
			
			<label for="creditTerm">CREDIT TERM</label>
			<select id="creditTerm" name="creditTerm" id="creditTerm">
				<option value="">Please choose</option>
				<option value="Days Prior to Travel">Days Prior to Travel</option>
				<option value="Days After Travel">Days After Travel</option>
				<option value="Days After Invoice">Days After Invoice</option>
				<option value="of Following Month">of Following Month</option>
				<option value="of Current Month">of Current Month</option>
				<option value="of Month of Travel">of Month of Travel</option>
				<option value="of Month After Travel">of Month After Travel</option>
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