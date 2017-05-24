<?php
require_once "connections.php";

if ($con) {
	
	mysqli_set_charset($con,"utf8");

	$text1 = $_POST['teksti1'];
    $text2 = $_POST['teksti2'];
    $text3 = $_POST['teksti3'];
    $text4 = $_POST['teksti4'];
    $text5 = $_POST['teksti5'];
    $text6 = $_POST['teksti6'];

    $name1 = $_POST['nimi'];
	
	$errmsg = "";
	
    $query = mysqli_query($con, "SELECT * FROM naytonnimi WHERE nimi='$name1'");
    $numrows = mysqli_num_rows($query);  

    $query = "UPDATE naytonnimi
	SET teksti1 = '$text1', teksti2 = '$text2',teksti3 = '$text3',teksti4 = '$text4',teksti5 = '$text5',teksti6 = '$text6'
	WHERE nimi = '$name1'";	
	$query_run= mysqli_query($con,$query);
}

 else
		$errmsg = "Sorry, no database connection :(";
		echo $errmsg;

?>