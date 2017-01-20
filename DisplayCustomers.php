<!-- DisplayCustomers.php -->
<html>
  <head>
  <script type="text/javascript" src="scripts/menu.js"></script>
  <link rel="stylesheet" type="text/css" href="css/Styles.css" />
    <title>About Us</title>
  </head>
  <body>
  <div id ="Homepage">
  <div id ="Silver">
	<?php
	include("common/links.html");
	include("common/logo.html");
	include("common/mainmenu.html");
$con=mysqli_connect("clstunich.fatcowmysql.com","assignment_7","assignment_7","assignment_7");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL " . mysqli_connect_error();
}

// Create Query
$result = mysqli_query($con,"SELECT * FROM Dejesus");

// Execute Query
echo "<h1>Our Customers: </h1>";
echo "<table border = '1'>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>E-mail</th>
</tr>";

// Execute Query and display specific fields for public
while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>" . $row['FirstName'] . "</td>";
	echo "<td>" . $row['LastName'] . "</td>";
	echo "<td>" . $row['Email'] . "</td>";
	echo "</tr>";
}

echo "</table>";

// Closes connection
mysqli_close($con);
	include("common/footer.html");
	?>
	</div>
	</div>
  </body>
</html>