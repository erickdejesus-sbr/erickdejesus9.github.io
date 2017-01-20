<!-- processCostresult.php -->

<head>
	<title>Order Summary</title>
	<script type="text/javascript" src="../scripts/menu.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/ebuy.css" />
	<link rel="stylesheet" type="text/css" href="../css/Styles.css" />
</head>
<body>
  <div id ="Homepage">
  <div id ="Silver">
	<p>
	<?php
	include("../common/links1.html");
	include("../common/logo1.html");
	include("../common/mainmenu1.html");
	include("InsertValuetoForm.php");

// To create the message after submitting the form
	function Message($Quantity, $selectproduct)
{
	$result = calculate($Quantity, $selectproduct);
	$text =
       "<h1>Order Summary</h1><br />".
	   "<h3>Your order total for ".$Quantity." ".$selectproduct."(s) is $".$result.".</h3>";
   return $text;   
}
// Calculates correct product with resulting price
	function calculate($Quantity, $selectproduct)
{
	if ($selectproduct == "Das Keyboard")
		$result =($Quantity * 100);
	if ($selectproduct == "AMD Computer Desktop")
		$result = ($Quantity * 300);
	if ($selectproduct =="Logitech Wireless Mouse")
		$result = ($Quantity * 30);
	if ($selectproduct == "Sony Stereo Headphones")
		$result =($Quantity * 20);
	return $result;
}
// After submission, this text appears in a new page
	echo Message($Quantity, $selectproduct);
	echo "<h2>This order has also been sent to ".$emailAddress."</h2>";
	$value = calculate($Quantity, $selectproduct);
	
// Variables to set up sending mail
	$subject = "Cheaptronics Order Confirmation for ".$selectproduct."";
	$txt = "<h1>Order Summary</h1><br />".
		   "<h3>Your order total for ".$Quantity." ".$selectproduct."(s) is $".$value.".</h3>";
	$headers = "From: Cheaptronics.com" . "\r\n";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: Cheaptronics\r\n";
// Function to send mail
	mail($emailAddress,$subject,$txt,$headers);
	include("../common/footer.html");
	?>
 </div>
 </div>
</body>
</html>