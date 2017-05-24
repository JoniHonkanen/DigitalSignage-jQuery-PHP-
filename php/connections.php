<?php
//set timezone
date_default_timezone_set('Europe/London');

//server, username, password, database
$con = @mysqli_connect("localhost","root","123456","naytot");

//include the user class, pass in the database connection
//$root = realpath($_SERVER["DOCUMENT_ROOT"]);
?>