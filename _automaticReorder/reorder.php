<?php
  include '../../db.inc.php';

  $stock_sql = "SELECT Drugs.QuantityInStock as 'qtyInStock', Drugs.ReorderLevel as 'reLevel', Drugs.SupplierID as 'sID', Supplier.SupplierName as 'sName', Drugs.ReorderQuantity as 'reQuantity' FROM Drugs INNER JOIN Supplier ON Drugs.SupplierID=Supplier.SupplierID";

  $order_sql = 'SELECT MAX(DrugOrderID) as dOrderID FROM Drug_Orders';

  if (!$result = mysqli_query($con,$order_sql))
  {
  die ("Error in selection " . mysqli_error($con));
  }

  $dOrder_id = $row['dOrderID'];
  echo "Drug Order Id: " . $dOrder_id . "<br />";


  if (!$result = mysqli_query($con,$stock_sql))
  {
  die ("Error in selection " . mysqli_error($con));
  }

  while ($row = mysqli_fetch_array($result)) {
    $qtyInStock = $row['qtyInStock'];
    $reorderLevel = $row['reLevel'];
    $supName = $row['sName'];
    $qtyItem =  $row['reQuantity'];
    $date = date("d/m/Y");
    $delivered = date("d/m/Y");
    $dOrder_id = ++$dOrder_id;

    echo "<br /><br />Quantity in Stock: " . $qtyInStock . "<br />";
    echo "Reorder Level: " . $reorderLevel . "<br />";
    echo "Drug Order ID: " . $dOrder_id . "<br />";
    echo "Supplier Name: " . $supName . "<br />";
    echo "Date: " . $date . "<br />";
    echo "Delivery Date: " . $delivered . "<br />";


    if ($qtyInStock < $reorderLevel) {
      $sql = "Insert into 'Drug_Orders' (DrugOrderID, Supplier, QtyOfItem, DateOrdered, DateDelivered) VALUES ($dOrder_id, $supName, $qtyItem, $date, $delivered)";

      echo "Entered Statement to Insert";
    } else {
      echo "Did not enter";
    }

  }
 ?>
