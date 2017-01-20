<!-- DisplayProductTable.php --!>
<!-- Query to check all values on a Table from Product List--!>

<?php
$con=mysqli_connect("clstunich.fatcowmysql.com","assignment_7","assignment_7","assignment_7");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL " . mysqli_connect_error();
}

// Create Query
$result = mysqli_query($con,"SELECT * FROM Dejesusproducts");

// Execute Query
echo "<table border = '1'>
<tr>
<th>states</th>
<th>products</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>" . $row['States'] . "</td>";
	echo "<td>" . $row['Products'] . "</td>";
	echo "</tr>";
}

echo "</table>";

mysqli_close($con);
?>