    <?php
    include 'db.inc.php';

    // Autoincrementation of SupplierID Column
    $supplier_sql = "SELECT MAX(SupplierID) FROM Supplier";
    $query_result = mysqli_query($con,$supplier_sql);
    $row = mysqli_fetch_array($query_result);

    $supplier_id = (int)$row['MAX(SupplierID)'];
    $supplier_id = ++$supplier_id;
    $supplier_name = $_POST[name];
    $supplier_address = $_POST[street] . ", " . $_POST[town] . ", " . $_POST[county];
    $supplier_email = $_POST[email];
    $supplier_website = $_POST[website];
    $supplier_tel = $_POST[tel];

    $sql = "Insert into Supplier (SupplierID, SupplierName, SupplierLocation, Email, Website, TelNum)
      VALUES ('$supplier_id', '$supplier_name','$supplier_address','$supplier_email','$supplier_website','$supplier_tel')";

      if (!mysqli_query($con,$sql))
      {
      die ("Error" . mysqli_error($con));
      }
    ?>
    <script type="text/javascript">

       window.location = "http://c2ppharmacy.candept.com/_Rhyder/_addSupplier/addSupplier.html"

    </script>
