<?php
require_once "connections.php";
$name = $_POST['name'];

define("UPLOAD_DIR", "../kuvat/");
$signature = $_POST['signature'];
$signature = str_replace('data:image/png;base64,', '', $signature);
$signature = str_replace(' ', '+', $signature);
$data = base64_decode($signature);
$file = UPLOAD_DIR . $name .'.png';
$success = file_put_contents($file, $data);
?>