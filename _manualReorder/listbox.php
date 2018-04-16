<?php
include '../../db.inc.php';

$sql = "SELECT SupplierID as 'sID', SupplierName as 'sName' FROM Supplier	 WHERE deleteFlag = 0";

if (!$result = mysqli_query($con,$sql))
{
die ("Error selecting supplier" . mysqli_error($con));
}

echo "<select name ='listbox' id ='listbox' onclick = 'filter()'>";

while ($row = mysqli_fetch_array($result))
{
	$supID = $row['sID'];
	$supName = $row['sName'];

	$text = "$supName";
	echo "<option value = '$text'>$supID - $supName</option>";

}
echo "</select>";

mysqli_close($con);
?>
