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
<h3 class="w3-center">Manual Reordering | Drugs</h3><hr /><br />

	<div class="formElement" style="width: 500px;">
		<label>Find Supplier by Name:</label>
		<?php include 'listbox.php'?><br><br />
	</div>

	<script>
	function filter() {
		var input, filter, table, tr, td, i;
		input = document.getElementById("listbox");
		var inputValue = input.options[input.selectedIndex].value;
		table = document.getElementById("drugTable");
		tr = table.getElementsByTagName("tr");

		for (i = 1; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[9];
			if(inputValue == "All"){
				tr[i].style.display = "";
			} else if (td.innerHTML == inputValue) {
					tr[i].style.display = "";
			} else {
					tr[i].style.display = "none";
			}
		}
	}


	</script>

	<div style="width: 950px; margin: auto;">
			<?php include 'table.php' ?>
	</div><br/><br/>

	<form name="quantityForm" action="delete.php" onsubmit="return confirmCheck()" method="POST" >

		<div class="formElement">
			<label for "dID">Drug ID</label>
			<input type="text" name ="dID" id="dID" disabled><br><br />
		</div>

		<div class="formElement">
			<label for "brandName">brandName</label>
			<input type="text" name ="brandName" id="brandName" disabled><br><br />
		</div>

		<div class="formElement">
			<label for "qtyInStock">Quantity in Stock</label>
			<input type="text" name ="qtyInStock" id="qtyInStock" disabled><br><br />
		</div>

		<div class="formElement">
			<label for "reLevel">Reorder Level</label>
			<input type="text" name ="reLevel" id="reLevel" disabled><br><br />
		</div>

		<div class="formElement">
			<label for "reorderQty">Reorder Quantity</label>
			<input type="text" name ="reorderQty" id="reorderQty"><br><br />
		</div>

<!-- End of Add Supplier form -->

<br /><br />
<footer class="w3-center w3-black w3-padding-64 w3-opacity">
	<p>© Copyright - pH Pharmacy</p>
	<p>The content on this site is meant for informational purposes only, and is not intended for use as official health consultation or recommendations.<br />
	pH Pharmacy takes no responsibility for harm that may result from the use, abuse or misuse of information contained on this site.</p>
</footer>

	</body>
</html>
