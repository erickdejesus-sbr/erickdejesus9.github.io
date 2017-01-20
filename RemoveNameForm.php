<!-- RemoveNameForm.php -->
<html>
  <head>
    <title>Buy Electronic Products Now</title>
	<script type="text/javascript" src="scripts/menu.js"></script>
	<link rel="stylesheet" type="text/css" href="css/ebuy.css" />
	<link rel="stylesheet" type="text/css" href="css/Styles.css" />
	<script type="text/javascript" src="scripts/ebuy.js">
    </script>
  </head>
  <div id ="Banner">
  	<?php
	include("common/links1.html");
	include("common/logo.html");
	include("common/mainmenu.html");
	?>
	<div id ="Silver">
    <form id="RemoveForm" action="scripts/RemoveNameScript.php" onsubmit="homeform()" method="post">
		<fieldset>
			<legend>Contact Information</legend>
			<table summary="Contact Information">
				<tr>
					<td>First Name:</td>
						<td><input type="text" name="firstName" size="12" /></td>
				</tr>
				<tr>
					<td>Last Name:</td>
						<td><input type="text" name="lastName" size="12" /></td>
				</tr>
				</tr>
					<td>Social Security Number:</td>
						<td><input type="text" name="socialNumber" size="20" /></td>
				</tr>
			</table>
		</fieldset>
		<fieldset>
			<legend>Process Your Request:</legend> 
				<table summary="Process Your Request">
					<tr>
						<td><input type="submit" value="Submit Request" /></td>
						<td><input type="reset" value="Reset Request" /></td>
					</tr>
				</table>
		</fieldset>	
    </form>
	<?php
	include("common/footer.html");
	?>
	</div>
	</div>
</html>