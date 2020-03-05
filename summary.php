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
	
	$defaultCurrency = $_POST['defaultCurrency'];
	$language = $_POST['language'];
	$salutation = $_POST['salutation'];
	$sourceMarket = $_POST['sourceMarket'];
	$credit = $_POST['credit'];
	$numberOfDays = $_POST['numberOfDays'];
	$creditTerm = $_POST['creditTerm'];
	$creditLimitAmount = $_POST['creditLimitAmount'];
	/*
	echo $nama.'<br/ >';
	echo $salesActivity.' '.$salesActivity.' '.$tradeshow.' '.$name.' '.$typeAccount.' '.$contactType.''.$rating.''.$industry.''.$affilation.''.$emailMarketing.'<br />';
	echo $destination.''.$targetSegment.''.$accommodation.''.$products.''.$pcAccommodation.''.$pcPcm.'<br />';
	echo $accountOwnerId.''.$accountOwnerMy.''.$accountOwnerTh.''.$accountOwnerVt.'<br />';
	echo $defaultCurrency.''.$language.''.$sourceMarket.''.$credit.''.$numberOfDays.''.$creditTerm.''.$creditLimitAmount.'<br />';
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
		<center><h3>SUMMARY</h3></center>
		<form action="controllers/proses.php" method="POST">
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
			<input type="hidden" name="defaultCurrency" value="<?php echo $defaultCurrency;?>">
			<input type="hidden" name="language" value="<?php echo $language;?>">
			<input type="hidden" name="sourceMarket" value="<?php echo $sourceMarket;?>">
			<input type="hidden" name="credit" value="<?php echo $credit;?>">
			<input type="hidden" name="numberOfDays" value="<?php echo $numberOfDays;?>">
			<input type="hidden" name="creditTerm" value="<?php echo $creditTerm;?>">
			<input type="hidden" name="creditLimitAmount" value="<?php echo $creditLimitAmount;?>">
			<input type="hidden" name="typeAccount" value="<?php echo $typeAccount;?>">
			<input type="hidden" name="eventName" value="<?php echo $eventName; ?>">
			<input type="hidden" name="salutation" value="<?php echo $salutation; ?>">
			
			<label>MEETING SUMMARY</label>
			<textarea name="meetingSummary" id="meetingSummary" rows="5" cols="40"></textarea>
			<br /><br />
			
			<label>FOLLOW UP</label>
			<textarea name="followUp" id="followUp" rows="5" cols="40"></textarea>
			<br /><br />
			
			<label>PIC</label>
			<textarea name="pic" id="pic" rows="5" cols="40"></textarea>
			<br /><br />
			
			<label>DEADLINE</label>
			<textarea name="deadLine" id="deadLine" rows="5" cols="40"></textarea>
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