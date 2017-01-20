<!-- Ebuy.php -->
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
    <form id="productForm" action="scripts/processCostresult.php" onsubmit="homeform()" method="post">
		<fieldset>
			<legend>Choose Product</legend>
			<table summary="Buy Products and Shipping Info">
				<tr>
					<td>Name of Product</td>
					<td><select name="selectproduct">
						<option>Das Keyboard</option>
						<option>AMD Computer Desktop</option>
						<option>Logitech Wireless Mouse</option>
						<option>Sony Stereo Headphones</option>
					</select></td>
				</tr>
				<tr>
					<td>Quantity:</td>
						<td><input type="text" name="Quantity" size="7" /></td>
				</tr>
			</table>
		</fieldset>
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
				<tr>
					<td>Address:</td>
						<td><input type="text" name="Address" size="20" /></td>
				</tr>
					<td></td>
						<td><input type="text" name="adDress" size="20" /></td>
				</tr>
				</tr>
					<td>State/County:</td>
						<td><input type="text" name="stateCounty" size="20" /></td>
				</tr>
				</tr>
					<td>Country:</td>
						<td><input type="text" name="Country" size="20" /></td>
				</tr>
				</tr>
					<td>City/Town:</td>
						<td><input type="text" name="cityTown" size="20" /></td>
				</tr>
				</tr>
					<td>Zip/Postal Code:</td>
						<td><input type="text" name="postalCode" size="10" /></td>
				</tr>
				</tr>
					<td>Email Address:</td>
						<td><input type="text" name="emailAddress" size="30" /></td>
				</tr>
				</tr>
					<td>Phone Number:</td>
						<td><input type="text" name="phoneNumber" size="20" /></td>
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
						<td><input type="submit" value="Submit Order" /></td>
						<td><input type="reset" value="Reset Order" /></td>
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