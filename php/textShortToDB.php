<?php
require_once "connections.php";

if ($con) {
	
	mysqli_set_charset($con,"utf8");

	$text7 = $_POST['teksti7'];

    $name1 = $_POST['nimi'];
	
	$errmsg = "";
	
    $query = mysqli_query($con, "SELECT * FROM naytonnimi WHERE nimi='$name1'");
    $numrows = mysqli_num_rows($query);  

    $query = "UPDATE naytonnimi
	SET teksti7 = '$text7'
	WHERE nimi = '$name1'";	
	$query_run= mysqli_query($con,$query);
}

 else
		$errmsg = "Sorry, no database connection :(";
		echo $errmsg;

?>