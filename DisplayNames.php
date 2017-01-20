<!-- DisplayNames.php --!>
<!-- Private Table to Display All Information Gathered From Form Such as Social Security Number etc.--!>

<?php
$con=mysqli_connect("clstunich.fatcowmysql.com","assignment_7","assignment_7","assignment_7");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL " . mysqli_connect_error();
}

// Create Query
$result = mysqli_query($con,"SELECT * FROM Dejesus");

// Execute Query
echo "<table border = '1'>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Address</th>
<th>State</th>
<th>Country</th>
<th>City</th>
<th>Zip</th>
<th>E-mail</th>
<th>Phone Number</th>
<th>SSN</th>
<th>Product</th>
<th>Quantity</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>" . $row['FirstName'] . "</td>";
	echo "<td>" . $row['LastName'] . "</td>";
	echo "<td>" . $row['Address'] . "</td>";
	echo "<td>" . $row['State'] . "</td>";
	echo "<td>" . $row['Country'] . "</td>";
	echo "<td>" . $row['City'] . "</td>";
	echo "<td>" . $row['Zip'] . "</td>";
	echo "<td>" . $row['Email'] . "</td>";
	echo "<td>" . $row['PhoneNumber'] . "</td>";
	echo "<td>" . $row['SSN'] . "</td>";
	echo "<td>" . $row['Product'] . "</td>";
	echo "<td>" . $row['Quantity'] . "</td>";
	echo "</tr>";
}

echo "</table>";

mysqli_close($con);
?>