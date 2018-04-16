<!-- Author: Rhyder Quinlan
 		 Organisation: IT Carlow
	 	 Sanctioned and Tutored by Catherine Maloney-->
<!-- Responsiveness of page is incomplete, orginal design is built on a full screen 1920x1080 px screen -->
<!DOCTYPE html>
<html>
	<head>
		<title>Add Supplier</title>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" type="text/css" href="../../Website.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<script>
			function clicked(e)
			{
				if(!confirm('Confirm Details?'))e.preventDefault();
			}
		</script>

	</head>

	<body>
	<nav>
		<a class="w3-bar-item w3-button w3-hover-black w3-right"></a>
	    <div class="w3-top">
	    <a href="about.html" class="w3-bar-item w3-button"><i class="fa fa-folder-open"></i> File Maintenence </a>
	    <a href="hobbies.html" class="w3-bar-item w3-button"><i class="fa fa-ambulance "></i> Supplier Accounts</a>
		<a href="travel.html" class="w3-bar-item w3-button"><i class="fa fa-balance-scale"></i> Stock Control</a>
	    <a href="contact.html" class="w3-bar-item w3-button"><i class="fa fa-bar-chart"></i> Reports</a>
		<a href="contact.html" class="w3-bar-item w3-button"><i class="fa fa-close"></i> Log Out</a>
		</div>

		<div align="center" class="w3-content w3-container w3-padding-64" id="about">
		</div>
	</nav>

<!-- Reordering Section -->
<h3 class="w3-center">Reorder Drugs</h3><hr /><br />

	<div style="width: 900px; margin: auto;">
		<?php include 'table.php' ?>
	</div>

	<br /><br />

	<form action="http://c2ppharmacy.candept.com/_Rhyder/_manualReorder/manualReorder.html.php">
    <input type="submit" value="Manual Reordering" />
	</form>
	<form action="http://c2ppharmacy.candept.com/_Rhyder/_automaticReorder/reorder.php">
		<input type="submit" value="Automatic Reordering" />
	</form>

<!-- End of Reordering Section -->

<br /><br />
<footer class="w3-center w3-black w3-padding-64 w3-opacity">
	<p>© Copyright - pH Pharmacy</p>
	<p>The content on this site is meant for informational purposes only, and is not intended for use as official health consultation or recommendations.<br />
	pH Pharmacy takes no responsibility for harm that may result from the use, abuse or misuse of information contained on this site.</p>
</footer>

	</body>
</html>
