<!-- ProductList.php --!>

<?php
$connect = mysqli_connect("clstunich.fatcowmysql.com","assignment_7","assignment_7","assignment_7");
// Check Connection
if (mysqli_connect_errno())
{ 
	echo "Failed to connect to MySQL " . mysqli_connect_error();
}

// Create Query
$deleterecord = "DELETE FROM your_table WHERE id_users=1 AND id_product=2";

// Execute Query
if (!mysqli_query($connect,$deleterecord))
{
	die("Error: " . mysqli_error($connect));
}
echo "1 record added to Table: ""Customer""";

mysqli_close($connect);
?>