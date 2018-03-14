<?php
	include 'db.inc.php';

	$sql = "DELETE FROM Drugs WHERE DrugID = '$_POST[deletesupid]' ";

		if (!mysqli_query($con,$sql))
		{
			die ("Error deleting record" . mysqli_error($con));
		}
	else
		{
			if (mysqli_affected_rows($con) != 0)
			{
				echo mysqli_affected_rows($con)." record(s) updated <br>";
				echo "Supplier ID ".$_POST['deletesupid'].",
				".$_POST['deletesupid']."
				".$_POST['deletesupname']."
				".$_POST['deletesuploc']."
				".$_POST['deletesuptel']."
				".$_POST['deletesupemail']."
				".$_POST['deletesupweb']." has been updated";
			}
			else
			{
				echo "no records were deleted";
			}
		}
		mysqli_close($con);
?>
<script type="text/javascript">

   window.location = "http://c2ppharmacy.candept.com/_Rhyder/_deleteSupplier/deleteSupplier.html.php"

</script>
