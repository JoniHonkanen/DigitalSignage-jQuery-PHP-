<?php

session_start();

if(!isset($_SESSION['id'])){
  header("Location: login.php");
}

include_once("./php/config.php");


/*
if(isset($_POST['name_first']) && isset($_POST['name_last'])) {
    if($_POST['name_first'] != "" && $_POST['name_last'] != "" {
      $first = $_POST['name_first'];
      $last = $_POST['name_last'];
    })
}
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title> DigitalSignage </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="shortcut icon" href="./muutKuvat/logo.ico" />
  <script src="./js/mustHave/jquery.min.js"></script>
  <script src="./js/mustHave/bootstrap.min.js"></script>
  <script src="./js/mustHave/socket.io-1.4.5.js"></script>
  <script src="./js/mustHave/jquery-ui.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="./css/main.css">

  <script src="./js/main.js"></script>
</head>

<body style="background-color: #2c3847; min-width:800px !important">
<div class="se-pre-con"></div>
<div class="loader" style="display:none;"></div>
<div class="overlay" style="display:none;"></div>

<nav class="navbar navbar-default bar1" role="navigation">
<div id="addScreen" style="display:none;">
<form id="form"><span id='close'>x</span>
  <h1 class="lisaaNaytto">Näytön lisäys</h1><br>
  <label style="margin-left:15px;">Näytön nimi</label><br>
<input type="text" id="nimi" class="teksti1" name="nimi" value="" placeholder="">
<br><br>
<input type="submit" value="Lisää" id="newScreen" class="btn btn-primary" style="margin-left:15px;">
</form>
</div>

<div id="addDelete" style="display:none;">
  <div id="form"><span id='close2'>x</span>
  <h1 class="lisaaNaytto">Lisää/poista kuva tiedostoon</h1><br>
<form action="./php/upload.php" method="post" enctype="multipart/form-data" style="float: left;margin-left:5px;margin-top:5px;"> Lisää kuva kansioon:
<input id="chooseImg" type="file" name="fileToUpload" style="height: 36;">
<input id="addImageBtn" type="submit" value="Lisää" name="submit" style="display:none;">
</form>
<form action="./php/deleteImg.php" method="post" enctype="multipart/form-data" style="float: left;margin-left:5px;margin-top:5px;"> Poista kuva kansiosta:
<input id="chooseImg2" type="file" name="fileToUpload" style="height: 36;">
<input id="addImageBtn2" type="submit" value="Poista" name="submit" style="display:none;">
<!--
<input id="addImageBtn2" type="submit" value="Poista" name="submit" style="display:none;">
<div class="poistettavat"></div>
-->
</form>
</div>
</div>

  <a class="navbar-brand"><img src="./muutKuvat/seaSide.png" alt="logo" style="height: 50px;"></a>
<button id="naytonLisaus" class="btn btn-default" style="margin-top:25px;float:left;margin-left:25px;"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Lisää näyttö</button>
<button id="lisaaPoista" class="btn btn-default" style="margin-top:25px;float:left;margin-left:25px;"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>Lisää/poista kuva</button>
</nav>

<row id="paaSivu">
  <div class=" col-xs-2" id="vasenReuna">
    <div id="previewNimet">
    </div>
  </div>

  <div class="col-xs-10"  id="kaikkiTarkea">
    <div id="esityksenValinta">
    </div>
  </div>

  </div>
</row>
</body>

</html>