<!-- InsertValuetoForm.php -->

<?php
$con = mysqli_connect("clstunich.fatcowmysql.com","assignment_7","assignment_7","assignment_7");
// Check Connection
if (mysqli_connect_errno())
{ 
	echo "Failed to connect to MySQL " . mysqli_connect_error();
}

$FirstName = mysqli_real_escape_string($con, $_POST['firstName']);
$LastName = mysqli_real_escape_string($con, $_POST['lastName']);
$Address = mysqli_real_escape_string($con, $_POST['Address']);
$State = mysqli_real_escape_string($con, $_POST['stateCounty']);
$Country = mysqli_real_escape_string($con, $_POST['Country']);
$City = mysqli_real_escape_string($con, $_POST['cityTown']);
$Zip = mysqli_real_escape_string($con, $_POST['postalCode']);
$Email = mysqli_real_escape_string($con, $_POST['emailAddress']);
$PhoneNumber = mysqli_real_escape_string($con, $_POST['phoneNumber']);
$SSN = mysqli_real_escape_string($con, $_POST['socialNumber']);
$Product = mysqli_real_escape_string($con, $_POST['selectproduct']);
$Quantity = mysqli_real_escape_string($con, $_POST['Quantity']);

// Create Table: Dejesus
$table = "INSERT INTO Dejesus(FirstName, LastName, Address, State, Country, City, Zip, Email , PhoneNumber, SSN, Product, Quantity)
VALUES ('$FirstName', '$LastName', '$Address', '$State', '$Country', '$City', '$Zip', '$Email', '$PhoneNumber', '$SSN', '$Product', '$Quantity')";

// Execute Query
if (!mysqli_query($con,$table))
{
	die("Error: " . mysqli_error($con));
}

mysqli_close($connect);
?>
		
