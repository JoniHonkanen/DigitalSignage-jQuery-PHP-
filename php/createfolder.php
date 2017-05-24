<?php 

require_once "connections.php";
$name =  $_POST['esitys1'];
if ($con) {
    mysqli_set_charset($con,"utf8");
//different ways I have tested

mkdir("../screenit/".$name,0750);
chmod("../screenit/".$name,0750); 
}
mysqli_close($con);
?>


