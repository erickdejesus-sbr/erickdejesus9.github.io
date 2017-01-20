<!-- ProductList.php --!>

<html>
  <head>
  <script type="text/javascript" src="scripts/menu.js"></script>
  <link rel="stylesheet" type="text/css" href="css/Styles.css" />
    <title>Contact Us</title>
  </head>
  <body>
  <div id ="Homepage">
	<div id ="Silver">
	<?php
	include("common/links.html");
	include("common/logo.html");
	include("common/mainmenu.html");
	//Variable For Connection to Table
	echo "<h1>Product List: </h1>";
	$con=mysqli_connect("clstunich.fatcowmysql.com","assignment_7","assignment_7","assignment_7");
	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL " . mysqli_connect_error();
	}

	// Create Query
	$result = mysqli_query($con,"SELECT * FROM Dejesusproducts");
	// Total Records Located on Table: 28
	$numRecords = mysqli_num_rows($result);
	// To Determine the Creation of a New Column
	$colCount = 0;
	// Display products within one State  Variable
	$currentState = "";
	echo "<table><tr><td><ul>";
	for ($i = 0; $i < $numRecords; $i++)
	{
		$row = mysqli_fetch_array($result);
		if ($currentState != $row["States"])
		{
			if ($currentState != "") echo "</ol></li>";
			if ($colCount > $numRecords/2)
			{
				echo "</ul></td><td valign='top'><ul>";
				$colCount = 0;
			}
			$currentState = $row["States"];
			echo "<li><b>" . $row['States'] . "</b><ol>";
		}
		echo "<li>" . $row['Products'] . "</li>";;
		$colCount++;
	}
	echo "</ol></li></ul></td></tr></table>";
	mysqli_close($con);
	include("common/footer.html");
	?>
	</div>
	</div>
	</div>
  </body>
</html>