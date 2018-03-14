<?php

$hostname = "localhost" ;
$username = "DrugsDB" ;
$password = "V1tam1nC" ;

$dbname = "Pharmacy" ;

$con = mysqli_connect($hostname,$username,$password,$dbname);

if (!$con)
{
	die ("Failed to connect to MySQL: " . mysqli_connect_error());
}

?>
