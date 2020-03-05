<?php
	$id = $_GET['id'];
	if(empty($id)){
		header("Location: index.php");
	} else {
		include("config/connection.php");
		$conn = opencon();
		
		$sql="SELECT * FROM report WHERE id='$id'";
		$result=mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		$nama = $row['nama'];
		$salesActivity = $row['salesActivity'];
		if($salesActivity == 'salesVisit'){
			$salesVisit = $row['salesVisit'];
			$tradeShow = "";
		} else if($salesActivity == 'tradeShow'){
			$tradeShow = $row['tradeShow'];
			$salesVisit = "";
		}
	$name = $row['name'];

	$eventName = $row['eventName'];
	$typeAccount = $row['typeAccount'];
	$salutation = $row['salutation'];
	$contactType = $row['contactType'];
	$rating = $row['rating'];
	$industry = $row['industry'];
	if($industry = 'Other'){
		if(!empty($row['otherIndustry'])){
			$otherIndustry = $row['otherIndustry'];
		}
	}
	$affilation = $row['affilation'];
	$emailMarketing = $row['emailMarketing'];
	$destination = $row['destination'];
	$targetSegment = $row['targetSegment'];
	$accommodation = $row['accommodation'];
	$products = $row['products'];
	$pcAccommodation = $row['pcAccommodation'];
	$pcPcm = $row['pcPcm'];
	
	$accountOwnerId = $row['accountOwnerId'];
	$accountOwnerMy = $row['accountOwnerMy'];
	$accountOwnerTh = $row['accountOwnerTh'];
	$accountOwnerVt = $row['accountOwnerVt'];
	
	$defaultCurrency = $row['defaultCurrency'];
	$language = $row['language'];
	$sourceMarket = $row['sourceMarket'];
	$credit = $row['credit'];
	$numberOfDays = $row['numberOfDays'];
	$creditTerm = $row['creditTerm'];
	if(!empty($row['creditLimitAmount'])){
		$creditLimitAmount = $row['creditLimitAmount'];
	} else {
		$creditLimitAmount = "";
	}
	
	$meetingSummary = $row['meetingSummary'];
	$followUp = $row['followUp'];
	$pic = $row['pic'];
	$deadLine = $row['deadLine'];
/*
$nama = "Denni Tanudjaja"; $salesActivity = "salesVisit"; $name = "Ricky Setiawan"; $typeAccount = "Contoh Type Account"; $contactType = "Contoh Contact Type"; $rating = "Contoh Rating";
$industry = "Other"; $otherIndustry = "Contoh Other Industry"; $affilation = "Contoh Affilation"; $emailMarketing = "Contoh Email Marketing"; $destination = "Contoh Destination";
$targetSegment = "Contoh Target Segmen"; $accommodation = "Contoh Accommodation"; $products = "Contoh Products"; $pcAccommodation = "Contoh PC Accommodation"; $pcPcm = "Contoh PC PCM";
$accountOwnerId = "Rocky"; $defaultCurrency = "USD"; $language = "English"; $sourceMarket = "Contoh Source Market"; $credit = "Contoh Credit"; $numberOfDays = "Contoh Number Of Days";
$creditTerm = "Contoh Credit Term"; $creditLimitAmount = "Contoh Credit Limit Amount"; $meetingSummary = "Contoh Meeting Summary"; $followUp = "Contoh Follow Up"; $pic = "Contoh PIC";
$deadLine = "Contoh DeadLine"; $salesVisit = "Contoh Sales Visit";
*/
if(empty($row['accountOwnerId'])){
	$accountOwnerId = '';
} else {
	$accountOwnerId = $row['accountOwnerId'];
}

if(empty($row['accountOwnerMy'])){
	$accountOwnerMy = '';
} else {
	$accountOwnerMy = $row['accountOwnerMy'];
}

if(empty($row['accountOwnerTh'])){
	$accountOwnerTh = '';
} else {
	$accountOwnerTh = $row['accountOwnerTh'];
}

if(empty($row['accountOwnerVt'])){
	$accountOwnerVt = '';
} else {
	$accountOwnerVt = $row['accountOwnerVt'];
}

date_default_timezone_set('Asia/Jakarta');
$waktuSekarang = $row['date'];
$date = new DateTime($waktuSekarang);
$date = $date->format("d/m/Y");

	
	
		
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Sales Report System</title>
		<link rel='stylesheet' type='text/css' href='asset/css/styleProses.css' />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div id="header">
		<div id="logo">
			<img src="asset/Logo-Panorama.png" width='500px' height='200px'>
		</div>
		<div id="logo-kanan">
			<p id="logo-kanan-sales">SALES ACTIVITY REPORT<br /></p>
			<p id="logo-kanan-name">By <?php echo $nama; ?> on <?php echo $date;?></p>
		</div>
	</div>
	<div id="header1">
	<!--
		<div id="idcard">
			<img src="../asset/name-card.png" width="500px" height="300px">
		</div>
	-->
		<div id="salesActivity">
			<b><h3>SALES ACTIVITY:</h3></b>
			<h4>
				<?php
					if($salesActivity == "salesVisit"){
						echo "SALES VISIT<br />".$salesVisit;
					} else if($salesActivity == "tradeShow"){
						echo "TRADE SHOW<br/>".$tradeShow;
					}
				?>
			</h4>
			<div id="salutation">
				<h4>SALUTATION:</h4>
				<p><?php echo $salutation.'. '.$name; ?></p>
			</div>
		</div>
	</div>
	<div id="wrapper">
		<div id='container'>
			<center id="block"><h3 style="color:white">ACCOUNT & CONTACT INFORMATION</h3></center>
			<center><?php echo $typeAccount; ?></center>
			<div class="garis_horizontal"></div>
			<br />
			<label>CONTACT TYPE:</label> <?php echo $contactType; ?>
			<br />
			<div class="garis_horizontal"></div>
			<br />
			<label>RATING:</label> <?php echo $rating; ?>
			<br />
			<div class="garis_horizontal"></div>
			<br />
			<label>INDUSTRY:</label> <?php echo $industry; ?>
			<br />
			<div class="garis_horizontal"></div>
			<br />
			<label>AFFILATION:</label> <?php echo $affilation; ?>
			<br />
			<div class="garis_horizontal"></div>
			<br />
			<label>EMAIL MARKETING:</label> <?php echo $emailMarketing; ?>
			<br /><br />
			
			<center id="block"><h3 style="color:white">INTERESTED IN</h3></center>
			
			<label>DESTINATION:</label> <?php echo $destination; ?>
			<br />
			<div class="garis_horizontal"></div>
			<br />
			<label>TARGET SEGMENT:</label> <?php echo $targetSegment; ?>
			<br />
			<div class="garis_horizontal"></div>
			<br />
			<label>ACCOMODATION:</label> <?php echo $accommodation; ?>
			<br />
			<div class="garis_horizontal"></div>
			<br />
			<label>PRODUCTS & SERVICES:</label> <?php echo $products; ?>
			<br />
			<div class="garis_horizontal"></div>
			<br />
			<label>PC ACCOMMODATION:</label> <?php echo $pcAccommodation; ?>
			<br />
			<label>PC PCM:</label> <?php echo $pcPcm; ?>
			<br /><br />
			<div class="garis_horizontal"></div>
			<center id="block"><h3 style="color:white">ACCOUNT OWNER</h3></center>
			
			<label>ACCOUNT OWNER ID:</label> 
			<?php 
				if($accountOwnerId != ""){
					echo $accountOwnerId;
				} else {
					echo "-";
				}
			?>
			<br /><br />
			
			<label>ACCOUNT OWNER MY:</label> 
			<?php 
				if($accountOwnerMy != ""){
					echo $accountOwnerMy;
				} else {
					echo "-";
				}
			?>
			<br /><br />
			
			<label>ACCOUNT OWNER TH:</label> 
			<?php 
				if($accountOwnerTh != ""){
					echo $accountOwnerTh;
				} else {
					echo "-";
				}
			?>
			<br /><br />
			
			<label>ACCOUNT OWNER VT:</label> 
			<?php 
				if($accountOwnerVt != ""){
					echo $accountOwnerVt;
				} else {
					echo "-";
				}
			?>
			<br /><br />
			
			<center id="block"><h3 style="color:white">TOURPLAN INFORMATION</h3></center>

			<label>DEFAULT CURRENCY:</label> <?php echo $defaultCurrency; ?>
			<br />
			<div class="garis_horizontal"></div>
			<br />
			<label>LANGUAGE:</label> <?php echo $language; ?>
			<br />
			<div class="garis_horizontal"></div>
			<br />
			<label>SOURCE MARKET:</label> <?php echo $sourceMarket; ?>
			<br />
			<div class="garis_horizontal"></div>
			<br />
			<label>CREDIT:</label> <?php echo $credit; ?>
			<br />
			
			<label>NUMBER OF DAYS:</label> <?php echo $numberOfDays; ?>
			<br />
			
			<label>CREDIT TERM:</label> <?php echo $creditTerm; ?>
			<br /><br />
			
			<center id="block"><h3 style="color:white">MEETING SUMMARY</h3></center>
			<p><?php echo $meetingSummary; ?></p>
			<br /><br />
			<!--
			<center id="block"><h3 style="color:white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			FOLLOW UP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			PIC &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			DEADLINE</h3></center>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="garis_verikal"></div>
			<div class="garis_horizontal"></div>-->
			
			<table>
			<thead>
				<th>Follow Up</th>
				<th>PIC</th>
				<th>DEADLINE</th>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $followUp; ?></td>
					<td><?php echo $pic; ?></td>
					<td><?php echo $deadLine; ?></td>
				</tr>
			</tbody>
			</table>
			<a href="../index.php" class="btn btn-default btn-lg">Go to Homepage</a>
		</div>
	</div>
	
	</body>
	<script type="text/javascript" src="validasi.js"></script>
</html>
<?php
	}
?>
