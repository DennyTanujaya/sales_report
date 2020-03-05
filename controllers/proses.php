<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../asset/PHPMailer/src/Exception.php';
require '../asset/PHPMailer/src/PHPMailer.php';
require '../asset/PHPMailer/src/SMTP.php';
/*require_once '../asset/dompdf/autoload.inc.php';
ob_start();
*/
	$nama = $_POST['nama'];
	if(empty($nama)){
		header("Location: index.php");
	} else {
		$nama = $_POST['nama'];
		$salesActivity = $_POST['salesActivity'];
		if($salesActivity == 'salesVisit'){
			$salesVisit = $_POST['salesVisit'];
			$tradeShow = "";
		} else if($salesActivity == 'tradeShow'){
			$tradeShow = $_POST['tradeShow'];
			$salesVisit = "";
		}
	$name = $_POST['name'];

	$eventName = $_POST['eventName'];
	$typeAccount = $_POST['typeAccount'];
	$salutation = $_POST['salutation'];
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
	$sourceMarket = $_POST['sourceMarket'];
	$credit = $_POST['credit'];
	$numberOfDays = $_POST['numberOfDays'];
	$creditTerm = $_POST['creditTerm'];
	$creditLimitAmount = $_POST['creditLimitAmount'];
	
	$meetingSummary = $_POST['meetingSummary'];
	$followUp = $_POST['followUp'];
	$pic = $_POST['pic'];
	$deadLine = $_POST['deadLine'];
/*
$nama = "Denni Tanudjaja"; $salesActivity = "salesVisit"; $name = "Ricky Setiawan"; $typeAccount = "Contoh Type Account"; $contactType = "Contoh Contact Type"; $rating = "Contoh Rating";
$industry = "Other"; $otherIndustry = "Contoh Other Industry"; $affilation = "Contoh Affilation"; $emailMarketing = "Contoh Email Marketing"; $destination = "Contoh Destination";
$targetSegment = "Contoh Target Segmen"; $accommodation = "Contoh Accommodation"; $products = "Contoh Products"; $pcAccommodation = "Contoh PC Accommodation"; $pcPcm = "Contoh PC PCM";
$accountOwnerId = "Rocky"; $defaultCurrency = "USD"; $language = "English"; $sourceMarket = "Contoh Source Market"; $credit = "Contoh Credit"; $numberOfDays = "Contoh Number Of Days";
$creditTerm = "Contoh Credit Term"; $creditLimitAmount = "Contoh Credit Limit Amount"; $meetingSummary = "Contoh Meeting Summary"; $followUp = "Contoh Follow Up"; $pic = "Contoh PIC";
$deadLine = "Contoh DeadLine"; $salesVisit = "Contoh Sales Visit";
*/
if(empty($_POST['accountOwnerId'])){
	$accountOwnerId = '';
} else {
	$accountOwnerId = $_POST['accountOwnerId'];
}

if(empty($_POST['accountOwnerMy'])){
	$accountOwnerMy = '';
} else {
	$accountOwnerMy = $_POST['accountOwnerMy'];
}

if(empty($_POST['accountOwnerTh'])){
	$accountOwnerTh = '';
} else {
	$accountOwnerTh = $_POST['accountOwnerTh'];
}

if(empty($_POST['accountOwnerVt'])){
	$accountOwnerVt = '';
} else {
	$accountOwnerVt = $_POST['accountOwnerVt'];
}

date_default_timezone_set('Asia/Jakarta');
$waktuSekarang = date("Y-m-d H:i");
$date = new DateTime($waktuSekarang);
$date = $date->format("d/m/Y");

	
	include("../config/connection.php");
	$conn = opencon();
	if($salesActivity == 'salesVisit'){
		$sql1 = "INSERT INTO report (nama, eventName, date, salesActivity, salesVisit, salutation, name, typeAccount, contactType, rating, industry, affilation, emailMarketing, destination, targetSegment, accommodation, products, pcAccommodation, pcPcm, accountOwnerId, accountOwnerMy, accountOwnerTh, accountOwnerVt, defaultCurrency, language, sourceMarket, credit, numberOfDays, creditTerm, meetingSummary, followUp, pic, deadLine) VALUES ('".$nama."','".$eventName."', '".$date."', '".$salesActivity."', '".$salesVisit."', '".$salutation."', '".$name."', '".$typeAccount."', '".$contactType."', '".$rating."', '".$industry."', '".$affilation."', '".$emailMarketing."', '".$destination."', '".$targetSegment."', '".$accommodation."', '".$products."', '".$pcAccommodation."', '".$pcPcm."', '".$accountOwnerId."', '".$accountOwnerMy."', '".$accountOwnerTh."', '".$accountOwnerVt."', '".$defaultCurrency."', '".$language."', '".$sourceMarket."', '".$credit."', '".$numberOfDays."', '".$creditTerm."', '".$meetingSummary."', '".$followUp."', '".$pic."', '".$deadLine."')";
		mysqli_query($conn, $sql1);
	} elseif($salesActivity == 'tradeShow'){
		$sql1 = "INSERT INTO report (nama, eventName, date, salesActivity, tradeShow, salutation, name, typeAccount, contactType, rating, industry, affilation, emailMarketing, destination, targetSegment, accommodation, products, pcAccommodation, pcPcm, accountOwnerId, accountOwnerMy, accountOwnerTh, accountOwnerVt, defaultCurrency, language, sourceMarket, credit, numberOfDays, creditTerm, meetingSummary, followUp, pic, deadLine) VALUES ('".$nama."','".$eventName."', '".$date."', '".$salesActivity."', '".$tradeShow."', '".$salutation."', '".$name."', '".$typeAccount."', '".$contactType."', '".$rating."', '".$industry."', '".$affilation."', '".$emailMarketing."', '".$destination."', '".$targetSegment."', '".$accommodation."', '".$products."', '".$pcAccommodation."', '".$pcPcm."', '".$accountOwnerId."', '".$accountOwnerMy."', '".$accountOwnerTh."', '".$accountOwnerVt."', '".$defaultCurrency."', '".$language."', '".$sourceMarket."', '".$credit."', '".$numberOfDays."', '".$creditTerm."', '".$meetingSummary."', '".$followUp."', '".$pic."', '".$deadLine."')";
		mysqli_query($conn, $sql1);
	}
	$email= "ricky.setiawanto@panorama-destination.com";
	$mail = new PHPMailer(true);

		try {
			//Server settings
			//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                       // Enable verbose debug output
			$mail->isSMTP();                                              // Send using SMTP
			$mail->Host       = 'smtp.office365.com';                    // Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			$mail->Username   = 'noreply@panorama-destination.com';    // SMTP username
			$mail->Password   = 'Pas5w0rd';                           // SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
			$mail->Port       = 587;                                // TCP port to connect to

			//Recipients
			$mail->setFrom('noreply@panorama-destination.com', 'No Reply');
			//$mail->addAddress('denni.tanudjaja@panorama-destination.com');
			$mail->addAddress($email);     						// Add a recipient
			//$mail->addAddress('ellen@example.com');          // Name is optional
			//$mail->addReplyTo('info@example.com', 'Information');
			//$mail->addCC('phimella.soelaksmono@panorama-destination.com');
			//$mail->addBCC('bcc@example.com');

			// Attachments
			//$mail->addAttachment('/var/tmp/file.tar.gz');// Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

			// Content
			$mail->isHTML(true);                        // Set email format to HTML
			$mail->Subject = 'Sales Report';
			$mail->Body    = "<center><b>Sales Activity Report for ".$eventName.".</b></center>Here are the details: <br /><br />Date: ".$date."<br />Sales Activity: ".$salesActivity."<br />Sales Visit: ".$salesVisit."<br />Name: ".$name."<br />Type Account: ".$typeAccount."<br />Contact Type: ".$contactType."<br />Rating: ".$rating."<br />Industry: ".$industry."<br />Affilation: ".$affilation."<br />Email Marketing: ".$emailMarketing."<br />Destination: ".$destination."<br />Target Segment: ".$targetSegment."<br />accommodation: ".$accommodation."<br />Products & Services: ".$products."<br />PC Accommodation: ".$pcAccommodation."<br />PC PCM: ".$pcPcm."<br />Account Owner ID: ".$accountOwnerId."<br />Account Owner MY: ".$accountOwnerMy."<br />Account Owner TH: ".$accountOwnerTh."<br />Account Owner VT: ".$accountOwnerVt."<br />Default Currency: ".$defaultCurrency."<br />Language: ".$language."<br />Source Market: ".$sourceMarket."<br />Credit: ".$credit."<br />Number Of Days: ".$numberOfDays."<br />Credit Term: ".$creditTerm."<br />Meeting Summary: ".$meetingSummary."<br />Follow Up: ".$followUp."<br />PIC: ".$pic."<br />Deadline: ".$deadLine."<br /> <br />";
			$mail->send();
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
		
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Sales Report System</title>
		<link rel='stylesheet' type='text/css' href='../asset/css/styleProses.css' />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div id="header">
		<div id="logo">
			<img src="../asset/Logo-Panorama.png" width='500px' height='200px'>
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
/*
	$html = ob_get_clean();
	$dompdf = new Dompdf\Dompdf();
	$dompdf->load_html($html);
	$dompdf->render();
	$dompdf->stream("sample.pdf");
*/
?>
