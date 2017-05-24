<?php
require_once "connections.php";

if ($con) {
    mysqli_set_charset($con,"utf8");

    $name =  $_POST['esitys1'];
    $PreviewString = $_POST['PreviewString'];
    
	$myFile = "../screenit/".$name."/index.html"; // or .php   
    $fh = fopen($myFile, 'w'); // or die("error");  
    fwrite($fh, " ".$PreviewString." ");
    
} else
	echo "Sorry, no database connection :(";

?>

