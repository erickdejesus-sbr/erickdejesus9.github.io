<!-- Ourcustomer.php -->
<html>
  <head>
  <script type="text/javascript" src="scripts/menu.js"></script>
  <link rel="stylesheet" type="text/css" href="css/Styles.css" />
    <title>Repair</title>
  </head>
  <body>
  <div id ="Homepage">
  <div id ="Silver">
	<?php
	include("common/links.html");
	include("common/logo.html");
	include("common/mainmenu.html");
	?>
	#include file="OurCustomer5.xml"
	<?php
	$file = 'OurCustomer5.xml';
	readfile($file);
	include 'OurCustomer5.xml'; 
	include("common/footer.html");
	?>
	</div>
	</div>
  </body>
</html>