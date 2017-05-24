<?php
require_once "connections.php";

if ($con) {
	
	mysqli_set_charset($con,"utf8");

	$name = $_POST['kikkare'];
    $name1 = $_POST['nimi'];
	
    echo "seuraava on name <br>";
    echo $name;
	
	$errmsg = "";
	
    $query = mysqli_query($con, "SELECT * FROM naytonnimi WHERE kuva='$name'");
    $numrows = mysqli_num_rows($query);  

    $query = "UPDATE naytonnimi
	SET kuva = '$name' 
	WHERE nimi = '$name1'";	
	$query_run= mysqli_query($con,$query);
}

 else
		$errmsg = "Sorry, no database connection :(";
		echo $errmsg;

?>