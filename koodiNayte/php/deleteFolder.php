<?php 

require_once "connections.php";
$poisto =  $_POST['poisto'];
if ($con) {
//different ways I have tested

array_map('unlink', glob("../screenit/".$poisto."/index.html"));
rmdir("../screenit/".$poisto);
}
mysqli_close($con);
?>