<?php
  include 'db.inc.php';

  $sql = "Insert into Drugs (Supplier Name, Supplier Location, Tel-Num)
  VALUES ('$_POST[]','$_POST[gname]','$_POST[form]','$_POST[strength]','$_POST[sID]','$_POST[instruc]','$_POST[effects]',$_POST[cprice],$_POST[rprice],$_POST[relevel],$_POST[requantity],$_POST[sCODE])";
 ?>
