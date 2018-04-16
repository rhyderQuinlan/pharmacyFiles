<?php
include '../../db.inc.php';

$sql = "SELECT SupplierID, SupplierName, SupplierLocation, TelNum, Email, Website FROM Supplier WHERE deleteFlag = 0";

if (!$result = mysqli_query($con,$sql))
{
die ("Error selecting supplier" . mysqli_error($con));
}

echo "<select name ='listbox' id ='listbox' onclick = 'populate()'>";

while ($row = mysqli_fetch_array($result))
{
	$supID = $row['SupplierID'];
	$supName = $row['SupplierName'];
	$supLoc = $row['SupplierLocation'];
	$supTel = $row['TelNum'];
	$supEmail = $row['Email'];
	$supWebsite = $row['Website'];

	$allText = "$supID,$supName, $supLoc, $supTel, $supEmail, $supWebsite";
	echo "<option value = '$allText'>$supID - $supName</option>";

}
echo "</select>";

mysqli_close($con);
?>
