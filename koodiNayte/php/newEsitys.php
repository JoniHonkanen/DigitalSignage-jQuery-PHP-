<?php
require_once "connections.php";

if ($con) {
	
	mysqli_set_charset($con,"utf8");

	$name = $_POST['esitys'];
	

	
	$errmsg = "";
	
    $query = mysqli_query($con, "SELECT * FROM naytonnimi WHERE nimi='$name'");
    $numrows = mysqli_num_rows($query);  

    if ($numrows == 0){
	$query = $con->query("INSERT INTO naytonnimi (nimi)Values('$name')");
	
	$query_run= mysqli_query($con,$query);
	if ($query_run){
		$errmsg = "Esitys luotu!";
		echo $errmsg;
	}
	
	mysqli_close($con);
	}
	else
		$errmsg = "Esityksen nimi on jo varattuna. ";
		echo $errmsg;
} else
		$errmsg = "Sorry, no database connection :(";
		echo $errmsg;

?>