<!DOCTYPE html>
<html>
	<head>
		<title>Cheaptronics</title>
		<link rel="stylesheet" type="text/css" href="css/Styles.css" />
		<script type="text/javascript" src="scripts/menu.js"></script>
		<script type="text/javascript" src="scripts/rotating1.js"></script>
		<script type="text/javascript" src="scripts/rotating2.js"></script>
		<script type="text/javascript" src="scripts/rotating3.js"></script>
		<script type="text/javascript" src="scripts/rotating4.js"></script>
	</head>
	<!-- body onload used to start picture slideshow -->
	<body onload="startRotation(); newstartRotation(); newqstartRotation(); netstartRotation();">
		<div id ="Homepage">
			<div id="Header">
				<?php
				include("common/links.html");
				include("common/logo.html");
				include("common/mainmenu.html");
				?>
			</div>
		
			
		<div id ="Content">
			 <div id="Businessdescription">
				<h3>Welcome to Cheaptronics! Affordable Products!</h3>
				<div id="Businessstatement">
					<p><b>Our Company</b></p>
				</div>
				<div id="missionstatement">
				<p><b><i>Mission Statement:</i></b></p>
				</div>
			</div>
			<!-- Table for Slideshow Pictures -->
			<div id="Table">
				<tr>
					<td>
						<img id="phone" src="" alt="Headphone" width="120px" height="120px" />
					</td>
					<td>
						<img id="mice" src="" alt="mouse" width="120px" height="120px" />
					</td>
				</tr>
				<tr>
					<td>
						<img id="mic" src="" alt="microphone" width="120px" height="120px" />
					</td>
					<td>
						<img id="mon" src="" alt="monitor" width="120px" height="120px" />
					</td>
				</tr>
			</div>
				<?php
				include("common/footer.html");
				?>
			</div>
			</div>	
		<!-- Script For Mouseover of Mission Statement and Our Company Text -->
		<script>
		document.getElementById("missionstatement").onmouseover = function() {mouseOver()};
		document.getElementById("missionstatement").onmouseout = function() {mouseOut()};

		function mouseOver() {
		document.getElementById("missionstatement").innerHTML = "<b>Mission Statement:</b></br>We want to provide cheap and affordable electronic products without losing the long lasting quality that other higher priced products have. We want to make sure customers are happy with their purchases.";
		}
		
		</script>
		<script>
		document.getElementById("Businessstatement").onmouseover = function() {mouseOver1()};
		document.getElementById("Businessstatement").onmouseout = function() {mouseOut1()};

		function mouseOver1() {
		document.getElementById("Businessstatement").innerHTML = "<b>Our Company:</b></br>We are a small business that wants to help customers find the right accessories for their computer. Either its a new monitor or mice, there is an item that can be found at a lower price.  We know that purchasing equipment should last for a long time and we strive to keep that true.\ We want to give our products to everyone since they help with everyday lives when using a computer. Our commitment in serving the best products and sending them at a reasonable shipping rate should make any customer happy. If our products do not satisfy, we will do our best to find you a replacement or better product.</br></br>";
		
		}

		function mouseOut1() {
		document.getElementById("Businessstatement").style.color = "black";
		}
		</script>
	</body>
</html>
