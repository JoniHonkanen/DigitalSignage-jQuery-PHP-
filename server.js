var express = require('express'); 
var app = require('express')();
var server = require('http').createServer(app); 
var io = require('socket.io')(server); 



io.on('connection', function (client) { 
client.on('naytto1',function(value){io.sockets.emit('naytto1',value);}); 
client.on('naytto1naytto1',function(value){io.sockets.emit('naytto1naytto1',value);}); 
client.on('naytto1lyhyt',function(value){io.sockets.emit('naytto1lyhyt',value);}); 
client.on('naytto1fontSize',function(value){io.sockets.emit('naytto1fontSize',value);}); 
client.on('naytto1font',function(value){io.sockets.emit('naytto1font',value);}); 
client.on('naytto1fontColor',function(value){io.sockets.emit('naytto1fontColor',value);}); 
client.on('naytto1arrowUp',function(value){io.sockets.emit('naytto1arrowUp',value);}); 
client.on('naytto1arrowDown',function(value){io.sockets.emit('naytto1arrowDown',value);}); 
client.on('naytto1arrowLeft',function(value){io.sockets.emit('naytto1arrowLeft',value);}); 
client.on('naytto1arrowRight',function(value){io.sockets.emit('naytto1arrowRight',value);}); 
client.on('naytto2',function(value){io.sockets.emit('naytto2',value);}); 
client.on('naytto2naytto2',function(value){io.sockets.emit('naytto2naytto2',value);}); 
client.on('naytto2lyhyt',function(value){io.sockets.emit('naytto2lyhyt',value);}); 
client.on('naytto2fontSize',function(value){io.sockets.emit('naytto2fontSize',value);}); 
client.on('naytto2font',function(value){io.sockets.emit('naytto2font',value);}); 
client.on('naytto2fontColor',function(value){io.sockets.emit('naytto2fontColor',value);}); 
client.on('naytto2arrowUp',function(value){io.sockets.emit('naytto2arrowUp',value);}); 
client.on('naytto2arrowDown',function(value){io.sockets.emit('naytto2arrowDown',value);}); 
client.on('naytto2arrowLeft',function(value){io.sockets.emit('naytto2arrowLeft',value);}); 
client.on('naytto2arrowRight',function(value){io.sockets.emit('naytto2arrowRight',value);}); 
client.on('naytto3',function(value){io.sockets.emit('naytto3',value);}); 
client.on('naytto3naytto3',function(value){io.sockets.emit('naytto3naytto3',value);}); 
client.on('naytto3lyhyt',function(value){io.sockets.emit('naytto3lyhyt',value);}); 
client.on('naytto3fontSize',function(value){io.sockets.emit('naytto3fontSize',value);}); 
client.on('naytto3font',function(value){io.sockets.emit('naytto3font',value);}); 
client.on('naytto3fontColor',function(value){io.sockets.emit('naytto3fontColor',value);}); 
client.on('naytto3arrowUp',function(value){io.sockets.emit('naytto3arrowUp',value);}); 
client.on('naytto3arrowDown',function(value){io.sockets.emit('naytto3arrowDown',value);}); 
client.on('naytto3arrowLeft',function(value){io.sockets.emit('naytto3arrowLeft',value);}); 
client.on('naytto3arrowRight',function(value){io.sockets.emit('naytto3arrowRight',value);}); 
client.on('naytto4',function(value){io.sockets.emit('naytto4',value);}); 
client.on('naytto4naytto4',function(value){io.sockets.emit('naytto4naytto4',value);}); 
client.on('naytto4lyhyt',function(value){io.sockets.emit('naytto4lyhyt',value);}); 
client.on('naytto4fontSize',function(value){io.sockets.emit('naytto4fontSize',value);}); 
client.on('naytto4font',function(value){io.sockets.emit('naytto4font',value);}); 
client.on('naytto4fontColor',function(value){io.sockets.emit('naytto4fontColor',value);}); 
client.on('naytto4arrowUp',function(value){io.sockets.emit('naytto4arrowUp',value);}); 
client.on('naytto4arrowDown',function(value){io.sockets.emit('naytto4arrowDown',value);}); 
client.on('naytto4arrowLeft',function(value){io.sockets.emit('naytto4arrowLeft',value);}); 
client.on('naytto4arrowRight',function(value){io.sockets.emit('naytto4arrowRight',value);}); 
client.on('naytto5',function(value){io.sockets.emit('naytto5',value);}); 
client.on('naytto5naytto5',function(value){io.sockets.emit('naytto5naytto5',value);}); 
client.on('naytto5lyhyt',function(value){io.sockets.emit('naytto5lyhyt',value);}); 
client.on('naytto5fontSize',function(value){io.sockets.emit('naytto5fontSize',value);}); 
client.on('naytto5font',function(value){io.sockets.emit('naytto5font',value);}); 
client.on('naytto5fontColor',function(value){io.sockets.emit('naytto5fontColor',value);}); 
client.on('naytto5arrowUp',function(value){io.sockets.emit('naytto5arrowUp',value);}); 
client.on('naytto5arrowDown',function(value){io.sockets.emit('naytto5arrowDown',value);}); 
client.on('naytto5arrowLeft',function(value){io.sockets.emit('naytto5arrowLeft',value);}); 
client.on('naytto5arrowRight',function(value){io.sockets.emit('naytto5arrowRight',value);}); 
client.on('keskiteksti',function(value){io.sockets.emit('keskiteksti',value);}); 
client.on('keskitekstikeskiteksti',function(value){io.sockets.emit('keskitekstikeskiteksti',value);}); 
client.on('keskitekstilyhyt',function(value){io.sockets.emit('keskitekstilyhyt',value);}); 
client.on('keskitekstifontSize',function(value){io.sockets.emit('keskitekstifontSize',value);}); 
client.on('keskitekstifont',function(value){io.sockets.emit('keskitekstifont',value);}); 
client.on('keskitekstifontColor',function(value){io.sockets.emit('keskitekstifontColor',value);}); 
client.on('keskitekstiarrowUp',function(value){io.sockets.emit('keskitekstiarrowUp',value);}); 
client.on('keskitekstiarrowDown',function(value){io.sockets.emit('keskitekstiarrowDown',value);}); 
client.on('keskitekstiarrowLeft',function(value){io.sockets.emit('keskitekstiarrowLeft',value);}); 
client.on('keskitekstiarrowRight',function(value){io.sockets.emit('keskitekstiarrowRight',value);}); 
client.on('asaasaasdasdsaasddsads',function(value){io.sockets.emit('asaasaasdasdsaasddsads',value);}); 
client.on('asaasaasdasdsaasddsadsasaasaasdasdsaasddsads',function(value){io.sockets.emit('asaasaasdasdsaasddsadsasaasaasdasdsaasddsads',value);}); 
client.on('asaasaasdasdsaasddsadslyhyt',function(value){io.sockets.emit('asaasaasdasdsaasddsadslyhyt',value);}); 
client.on('asaasaasdasdsaasddsadsfontSize',function(value){io.sockets.emit('asaasaasdasdsaasddsadsfontSize',value);}); 
client.on('asaasaasdasdsaasddsadsfont',function(value){io.sockets.emit('asaasaasdasdsaasddsadsfont',value);}); 
client.on('asaasaasdasdsaasddsadsfontColor',function(value){io.sockets.emit('asaasaasdasdsaasddsadsfontColor',value);}); 
client.on('asaasaasdasdsaasddsadsarrowUp',function(value){io.sockets.emit('asaasaasdasdsaasddsadsarrowUp',value);}); 
client.on('asaasaasdasdsaasddsadsarrowDown',function(value){io.sockets.emit('asaasaasdasdsaasddsadsarrowDown',value);}); 
client.on('asaasaasdasdsaasddsadsarrowLeft',function(value){io.sockets.emit('asaasaasdasdsaasddsadsarrowLeft',value);}); 
client.on('asaasaasdasdsaasddsadsarrowRight',function(value){io.sockets.emit('asaasaasdasdsaasddsadsarrowRight',value);}); 
}); 
server.listen(3002);