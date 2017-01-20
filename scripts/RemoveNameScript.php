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
$con=mysqli_connect("clstunich.fatcowmysql.com","assignment_7","assignment_7","assignment_7");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL " . mysqli_connect_error();
}

$FirstName = mysqli_real_escape_string($con, $_POST['firstName']);
$LastName = mysqli_real_escape_string($con, $_POST['lastName']);
$SSN = mysqli_real_escape_string($con, $_POST['socialNumber']);

// Create Query
$delete = "DELETE FROM Dejesus WHERE FirstName='$FirstName' AND LastName='$LastName' AND SSN='$SSN'";

// Execute Query
if (!mysqli_query($con,$delete))
{
	die("Error: " . mysqli_error($con));
}
echo "<h1>Record: $FirstName $LastName </br>SSN: $SSN </br>is removed from our database</h1>";

mysqli_close($con);
	include("../common/footer.html");
	?>
 </div>
 </div>
</body>
</html>