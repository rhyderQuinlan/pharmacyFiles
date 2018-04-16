<<?php
  include '../../db.inc.php';

  $sql = "SELECT Drugs.DrugID as 'dID', Drugs.BrandName as 'dBrandName', Drugs.GenericName as 'dGenericName', Drugs.Form as 'dForm', Drugs.Strength as 'dStrength', Drugs.SupplierID as 'dSupID', Drugs.QuantityInStock as 'dQtyStock', Drugs.ReorderLevel as 'dReorderLevel', Drugs.ReorderQuantity as 'dReorderQty', Supplier.SupplierID as 'sSupID', Supplier.SupplierName as 'sSupName' FROM `Drugs` INNER JOIN Supplier on Drugs.SupplierID = Supplier.SupplierID";

  if (!$result = mysqli_query($con,$sql))
  {
  die ("Error selecting supplier " . mysqli_error($con));
  }

  table($con,$sql);

  function table($con,$sql)
	{
		$result = mysqli_query($con,$sql);
		echo "<table>
		<tr><th>DrugID</th><th>Brand Name</th><th>Generic Name</th><th>Form</th><th>Strength</th><th>Strength</th><th>Qty in Stock</th><th>Reorder Level</th><th>Reorder Qty</th><th>Supplier's Name</th></tr>";

		while($row = mysqli_fetch_array($result))
		{
			echo "<tr><td>".$row['dID']."</td>
      <td>".$row['dBrandName']."</td>
      <td>".$row['dGenericName']."</td>
      <td>".$row['dForm']."</td>
      <td>".$row['dStrength']."</td>
      <td>".$row['dSupID']."</td>
      <td>".$row['dQtyStock']."</td>
      <td>".$row['dReorderLevel']."</td>
      <td>".$row['dReorderQty']."</td>
      <td>".$row['sSupName']."</td></tr>";

			}

			echo"</table>";
	}

  mysqli_close($con);
?>
