<?php
include 'db.inc.php';

$sql = "SELECT SupplierID, SupplierName FROM Supplier";

if (!$result = mysqli_query($con,$sql))
{
die ("Error selecting supplier" . mysqli_error($con));
}

echo "<select name = 'listbox' id = 'supplierOptions' onclick = 'populate()'>";

while ($row = mysqli_fetch_array($result))
{
	$supID = $row['SupplierID'];
	$supName = $row['SupplierName'];
	$allText = "$supID,$supName";
	echo "<option value = $allText>$supID $supName</option>";

}
echo "</select>";

mysqli_close($con);
?>
