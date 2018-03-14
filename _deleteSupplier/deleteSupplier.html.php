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
		<link rel="stylesheet" href="../../w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" type="text/css" href="../../Website.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- <script>
			function clicked(e)
			{
				if(!confirm('Confirm Details?'))e.preventDefault();
			}
		</script> -->

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

<!-- Delete Supplier content area -->
<h3 class="w3-center">Delete Supplier</h3><hr /><br />
	<div class="formElement">
		<label>Find Supplier by name:</label>
		<?php include 'supplierOptions.php'?><br><br />
	</div>

	<script>

		function populate()
			{
				var sel = document.getElementById("supplierOptions");
				var returnValues;
				returnValues = sel.options[sel.selectedIndex].value;
				var supplierDetails = result.split(',');
				document.getElementById("deletesupid").value = supplierDetails[0];
				document.getElementById("deletesupname").value = supplierDetails[1];
				document.getElementById("deletesuploc").value = supplierDetails[2];
				document.getElementById("deletesuptel").value = supplierDetails[3];
				document.getElementById("deletesupemail").value = supplierDetails[4];
				document.getElementById("deletesupweb").value = supplierDetails[5];
			}

			function confirmCheck()
				{
					var response;
					response = confirm('Confirm Details?');
					if (response)
						{
							document.getElementById("deletesupid").disabled = false;
							document.getElementById("deletesupname").disabled = false;
							document.getElementById("deletesuploc").disabled = false;
							document.getElementById("deletesuptel").disabled = false;
							document.getElementById("deletesupemail").disabled = false;
							document.getElementById("deletesupweb").disabled = false;
							return true;
						}
					else
						{
							populate();
							return false;
						}
				}
	</script>

	<form action="deleteSupplier.php" onsubmit="return confirm('Confirm Details?')" method="POST" >
		<div class="button">
			<input type="submit" value="Delete Supplier" id="delete"/><br /><br /><br />
		</div>

		<div class="formElement">
			<label for "deletesupid">Supplier ID</label>
			<input type="text" name ="deletesupid" id="deletesupid" readonly><br><br />
		</div>

		<div class="formElement">
			<label for "deletesupname">Supplier Name</label>
			<input type="text" name ="deletesupname" id="deletesupname" disabled><br><br />
		</div>
	
		<div class="formElement">
			<label for "deletesuploc">Supplier Location</label>
			<input type="text" name ="deletesuploc" id="deletesuploc" disabled><br><br />
		</div>



<!-- End of Delete Supplier content-->

<footer class="w3-center w3-black w3-padding-64 w3-opacity">
	<p>© Copyright - pH Pharmacy</p>
	<p>The content on this site is meant for informational purposes only, and is not intended for use as official health consultation or recommendations.<br />
	pH Pharmacy takes no responsibility for harm that may result from the use, abuse or misuse of information contained on this site.</p>
</footer>

	</body>
</html>
