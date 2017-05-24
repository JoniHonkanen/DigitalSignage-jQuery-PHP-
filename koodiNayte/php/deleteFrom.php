<?php
require_once "connections.php";

if ($con) {
    mysqli_set_charset($con,"utf8");

$poisto =  $_REQUEST['poisto'];

// sql to delete a record
$sql = "DELETE FROM naytonnimi WHERE nimi='$poisto'";
$query_run= mysqli_query($con,$sql);

} else
	echo "Sorry, no database connection :(";

mysqli_close($con);
?>