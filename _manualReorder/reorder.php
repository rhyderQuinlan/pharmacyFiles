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

  <h3 class="w3-center">Reorder Quantity</h3><hr /><br />

  <?php
  include '../../db.inc.php';

  if(isset($_GET['mydata'])) {
    $dID = $_GET['mydata'];
  }
  $sql = "SELECT Drugs.DrugID as 'dID', Drugs.BrandName as 'dBrandName', Drugs.QuantityInStock as 'dQtyStock', Drugs.ReorderLevel as 'dReorderLevel', Drugs.ReorderQuantity as 'dReorderQty', Supplier.SupplierID as 'sSupID', Supplier.SupplierName as 'sSupName', Drugs.SupplierID as 'dSupID' FROM `Drugs` INNER JOIN Supplier on $dID = Supplier.SupplierID";

  if (!$result = mysqli_query($con,$sql))
  {
  die ("Error selecting supplier" . mysqli_error($con));
  }

  while ($row = mysqli_fetch_array($result))
  {
    $brandName = $row['dBrandName'];
    $dQtyStock = $row['dQtyStock'];
    $dReorderLevel = $row['dReorderLevel'];
    $dReorderQty = $row['dReorderQty'];

  }

  mysqli_close($con);
  ?>

  <script>
  document.addEventListener("DOMContentLoaded", populate()
    {
      var sel = document.getElementById("listbox");
      var returnValues;
      result = sel.options[sel.selectedIndex].value;
      var supplierDetails = result.split(',');
      document.getElementById("dID").value = supplierDetails[0];
      document.getElementById("brandName").value = supplierDetails[1];
      document.getElementById("qtyInStock").value = supplierDetails[2];
      document.getElementById("reLevel").value = supplierDetails[3];
      document.getElementById("reorderQty").value = supplierDetails[4];
    })
  </script>

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
