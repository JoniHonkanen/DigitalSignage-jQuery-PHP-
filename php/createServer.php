<?php
require_once "connections.php";

if ($con) {
mysqli_set_charset($con,"utf8");
sleep(2);

$myFile = "../server.js";
$fh = fopen($myFile, 'w') or die("can't open file");


$get=mysqli_query($con, "SELECT nimi FROM naytonnimi");

fwrite($fh,"var express = require('express'); \n");
fwrite($fh,"var app = require('express')();\n");
fwrite($fh,"var server = require('http').createServer(app); \n");
fwrite($fh,"var io = require('socket.io')(server); \n");
fwrite($fh,"\n\n\n");

fwrite($fh,"io.on('connection', function (client) { \n");

foreach($get as $result){
   $user =  $result['nimi'];          
  fwrite($fh,"client.on('$user',function(value){io.sockets.emit('$user',value);}); \n");
  fwrite($fh,"client.on('$user$user',function(value){io.sockets.emit('$user$user',value);}); \n");
  fwrite($fh,"client.on('".$user."lyhyt',function(value){io.sockets.emit('".$user."lyhyt',value);}); \n");
  fwrite($fh,"client.on('".$user."fontSize',function(value){io.sockets.emit('".$user."fontSize',value);}); \n");
  fwrite($fh,"client.on('".$user."font',function(value){io.sockets.emit('".$user."font',value);}); \n");
  fwrite($fh,"client.on('".$user."fontColor',function(value){io.sockets.emit('".$user."fontColor',value);}); \n");
  fwrite($fh,"client.on('".$user."arrowUp',function(value){io.sockets.emit('".$user."arrowUp',value);}); \n");
  fwrite($fh,"client.on('".$user."arrowDown',function(value){io.sockets.emit('".$user."arrowDown',value);}); \n");
  fwrite($fh,"client.on('".$user."arrowLeft',function(value){io.sockets.emit('".$user."arrowLeft',value);}); \n");
  fwrite($fh,"client.on('".$user."arrowRight',function(value){io.sockets.emit('".$user."arrowRight',value);}); \n");
}

fwrite($fh,"}); \n");
fwrite($fh,"server.listen(3002);");

}else
	echo "Sorry, no database connection :(";
?>




