<?php
require_once "connections.php";

if ($con) {
    	
	mysqli_set_charset($con,"utf8");
	
	$get=mysqli_query($con, "SELECT nimi FROM naytonnimi ORDER BY  id asc");
	$option = '';
	while($row = mysqli_fetch_assoc($get))
	{

	$option .= '<div id='.$row['nimi'].' class="paaRuutu" style="border-radius:5px;width:70vw;float:left;background-color:rgba(209,215,220,0.75);padding:20px;margin-bottom:15px;box-shadow: 12px 10px 12px #888888;"> <div value="" class="nappula" id="'.$row['nimi'].'showText"><a class="nappula1">'.$row['nimi'].'<a/></div> <div class="ruutu" id = "'.$row['nimi'].'" value = "'.$row['nimi'].'"></div>
<div id="'.$row['nimi'].'writeScreen" class="textWriteBox" style="display:none;">
<div class="vasenLohko" style="float:left;">

  <div id="'.$row['nimi'].'vaihto" style="width:106px;" value="vaihda yhteen ruutuun" class="btn btn-default btn-sm">Vaida yhteen <span class="glyphicon glyphicon-random" aria-hidden="true"></span></div><br>
  <div id="'.$row['nimi'].'test">
  <div class="'.$row['nimi'].$row['nimi'].' btn btn-default btn-sm" style="width:106px; margin-top:5px;"; >Julkaise <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div><br>
    <input type="text"  class="'.$row['nimi'].$row['nimi'].$row['nimi'].' teksti" name="nimi" value="" placeholder="Valimo 1"><br>
    <input type="text"  class="'.$row['nimi'].$row['nimi'].$row['nimi'].' teksti" name="nimi" value="" placeholder="Valimo 2"><br>
    <input type="text"  class="'.$row['nimi'].$row['nimi'].$row['nimi'].' teksti" name="nimi" value="" placeholder="Valimo 3"><br>
    <input type="text"  class="'.$row['nimi'].$row['nimi'].$row['nimi'].' teksti" name="nimi" value="" placeholder="Valimo 4"><br>
    <input type="text"  class="'.$row['nimi'].$row['nimi'].$row['nimi'].' teksti" name="nimi" value="" placeholder="Valimo 5"><br>
    <input type="text"  class="'.$row['nimi'].$row['nimi'].$row['nimi'].' teksti" name="nimi" value="" placeholder="Valimo 6">
  </div>

  <div id="'.$row['nimi'].'test1" style="display:none;">
    <input type="button" class="'.$row['nimi'].'shortButton" value="Julkaise" /><br>
    <input type="text"  class="'.$row['nimi'].'shortText teksti" name="nimi" value="" placeholder="Dynamo / Idis / Visio"><br>
  </div>
  </div>
  <div class="oikeaLohko" style="float:right;">
   <div id="marqueeJutut">
					<p>Fontti asetukset:</p>
          <br>
					<select id="'.$row['nimi'].'font" class="tekstiSivu">
				<option value="Arial" selected>Arial</option>
        <option value="Verdana ">Verdana </option>
        <option value="Impact ">Impact </option>
        <option value="Times New RomanS">Times New Roman</option>
        <option value="Arial Black">Arial Black</option>
					</select>
         <br>
					<input type="text" id="'.$row['nimi'].'fontSize" value="5" class="tekstiSivu">
          </div>

          <select id="'.$row['nimi'].'fontColor" class="tekstiSivu">
    <option value="black" selected>black</option>
    <option value="red">Red</option>
    <option value="orange">Orange</option>
    <option value="yellow">Yellow</option>
    <option value="green">Green</option>
    <option value="blue">Blue</option>
    <option value="purple">Purple</option>
    <option value="white">White</option>
    </select>
    <div id="'.$row['nimi'].'nuolet">
      <div id="'.$row['nimi'].'arrowUp"  style="margin-left:25px;" class="nuolet"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></div>
      <div id="'.$row['nimi'].'arrowLeft" style="margin-top:28px;" class="nuolet"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></div>
      <div id="'.$row['nimi'].'arrowRight" style="margin-left:55px;margin-top:28px;" class="nuolet"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></div>
      <div id="'.$row['nimi'].'arrowDown" style="margin-left:25px;margin-top:58px;" class="nuolet"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></div>
    </div>
      <!--
      <div id="'.$row['nimi'].'arrowUp" class="nuolet" style="width:0;height:0;border-left:20px solid transparent;border-right:20px solid transparent;border-bottom:20px solid black; top:0px;margin-left:25%;"></div>
      <div id="'.$row['nimi'].'arrowLeft" class="nuolet" style="width:0;height:0;border-top:20px solid transparent;border-bottom:20px solid transparent;border-right:20px solid black;"></div>
      <div id="'.$row['nimi'].'arrowRight" class="nuolet" style="width:0;height:0;border-top:20px solid transparent;border-bottom:20px solid transparent;border-left:20px solid black;margin-left:75%;margin-top:-50%;"></div>
      <div id="'.$row['nimi'].'arrowDown" class="nuolet" style="width:0;height:0;border-left:20px solid transparent;border-right:20px solid transparent;border-top:20px solid black; margin-left:25%;"></div>
      -->
      </div>

</div>

<button type="button" class="poisto btn btn-default btn-lg" value="Poista "style="float: right;display:inline-block;margin-left:10px;margin-top:40px;">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> poista
</button>

<script type="text/javascript">
var socket = io.connect("http://192.168.0.102:3002")
 $("#'.$row['nimi'].'showText").click(function () {
     $(".nappula").addClass("disabled")
     setTimeout(function () {
         $(".nappula").removeClass("disabled")
         },1500);
     $(".ruutu").toggleClass("ruutuHover");
     $(".img").toggleClass("imgFromTop");
     var kukka = ($(this).parent().attr("id"));
     $(".paaRuutu").not("#" + kukka).fadeTo(1000, 0);
     $(".previewContainer").not("#" + "'.$row['nimi'].'container").fadeTo(1000, 0);
     $(".paaRuutu").not("#" + kukka).addClass("notWorking");
     $(".previewContainer").not("#" + "'.$row['nimi'].'container").addClass("notWorking");
     var sukka = ($(this).parent().attr("id"));
    $("#'.$row['nimi'].'writeScreen").toggle("slow"); 

	if ($(this).val() == "Kirjoita naytolle") {
    $(".paaRuutu").not("#" + kukka).removeClass("notWorking");
     $(".previewContainer").not("#" + "'.$row['nimi'].'container").removeClass("notWorking");
        $(".previewContainer").fadeTo(1000, 1);
        $(".paaRuutu").fadeTo(1000, 1);
     $("#'.$row['nimi'].'").animate({
       height: "170px",
       top: ""
       }, 1000);
      $(this).val("Pienenna");
       $("#'.$row['nimi'].'container").animate({
           height: "170px" ,
           top: ""    
       }, 1000);
        $(".nappula").animate({
           height: "170px" ,
           top: ""    
       }, 1000);
       $("#iframe'.$row['nimi'].'").animate({
       marginTop: "",
       }, 1000);
   }
   else {
       $("#'.$row['nimi'].'").animate({
       height: "350px",
       }, 1000);  
       $(".nappula").animate({
       height: "350px",
       }, 1000);  
      $(this).val("Kirjoita naytolle");
      $("#'.$row['nimi'].'container").animate({
       height: "350px",
       }, 1000);
       $("#iframe'.$row['nimi'].'").animate({
       marginTop: "55px",
       }, 1000);
   }	
  });

  $("#'.$row['nimi'].'vaihto").click(function () {
            $("#'.$row['nimi'].'test1").toggle("slow");
			$("#'.$row['nimi'].'test").toggle("slow");
			  if ($(this).val() == "vaihda yhteen ruutuun") {
      $(this).val("vaihda kuuteen ruutuun");
   }
   else {
      $(this).val("vaihda yhteen ruutuun");
   }	
  });


var img = new Image(); var kuva = "";
 setTimeout(function () { $("#'.$row['nimi'].' .img").on("click", function () {
    img.src = this.src;
     kuva = img.src;
     kuva1 = img.width;
     kuva2 = img.height;
 //   console.log("leveys: "+kuva1);
  //  console.log("korkeus: "+kuva2);
     var kikkare = kuva.toString();
     var nimi1 = "'.$row['nimi'].'";
     var toDB = { "kikkare": kikkare, "nimi": nimi1 };
     if(img.width/img.height > 1 ){
         $("#iframe'.$row['nimi'].'").css("width","100%");
         $("#iframe'.$row['nimi'].'").css("margin-left","0%");
     //    console.log("suurempi kuin 1");
      //   console.log(img.width/img.height);
     }
     if(img.width/img.height < 1 ){
          $("#iframe'.$row['nimi'].'").css("width","30%");
          $("#iframe'.$row['nimi'].'").css("margin-left","26%");
     //    console.log("pienempi kuin 1");
      //   console.log(img.width/img.height);
     }
       $.ajax({
            url: "./php/imgToDB.php",
            type: "POST",
            data: toDB,
            success: function (data) {
            }
        });
        socket.emit("'.$row['nimi'].'", kuva);  });}, 1500);
       
 $(".'.$row['nimi'].$row['nimi'].'").click(function (value) {
       var juttu = $(".'.$row['nimi'].$row['nimi'].$row['nimi'].'").map(function (index) {
            return this.value;
        }).get();
        socket.emit("'.$row['nimi'].$row['nimi'].'", juttu);
        var teksti1=juttu[0];
        var teksti2=juttu[1];
        var teksti3=juttu[2];
        var teksti4=juttu[3];
        var teksti5=juttu[4];
        var teksti6=juttu[5];
        var nimi2 = "'.$row['nimi'].'";
        var textData = { "teksti1": teksti1, "teksti2":teksti2, "teksti3":teksti3, "teksti4":teksti4,"teksti5":teksti5,"teksti6":teksti6,"nimi":nimi2 };
        $.ajax({
            url: "./php/textToDB.php",
            type: "POST",
            data: textData,
            success: function (data) {
            }
        });
    });

	$(".'.$row['nimi'].'shortButton").click(function (value) { 
    var nimi3 = "'.$row['nimi'].'"; 
		var homma = $(".'.$row['nimi'].'shortText").val();
    var teksti7=homma;
    var textData1 = { "teksti7": teksti7, "nimi":nimi3 };  
		socket.emit("'.$row['nimi'].'lyhyt", homma);
        $.ajax({
            url: "./php/textShortToDB.php",
            type: "POST",
            data: textData1,
            success: function (data) {
            }
        });
    });

    $("#'.$row['nimi'].'fontSize").keyup(function () {
			fonttiSize = $(this).val();
			socket.emit("'.$row['nimi'].'fontSize", fonttiSize);
    var nimi6 = "'.$row['nimi'].'"; 
    var size = { "fonttiSize": fonttiSize, "nimi":nimi6 };
    $.ajax({
            url: "./php/fontSizeToDB.php",
            type: "POST",
            data: size,
            success: function (data) {
            }
        });	
	});

  $("#'.$row['nimi'].'font").change(function () {
			font = $(this).val();
			socket.emit("'.$row['nimi'].'font", font);
            var nimi7 = "'.$row['nimi'].'"; 
    var fontStyle = { "font": font, "nimi":nimi7 };
    $.ajax({
            url: "./php/fontStyleToDB.php",
            type: "POST",
            data: fontStyle,
            success: function (data) {
            }
        });	
	});	


  $("#'.$row['nimi'].'fontColor").change(function () {
			fontColor = $(this).val();
			socket.emit("'.$row['nimi'].'fontColor", fontColor);
            var nimi8 = "'.$row['nimi'].'"; 
    var color = { "fontColor": fontColor, "nimi":nimi8 };
    $.ajax({
            url: "./php/colorToDB.php",
            type: "POST",
            data: color,
            success: function (data) {
            }
        });	
	});

  $("#'.$row['nimi'].'arrowUp").click(function (value) {
        var ylos = 1;      		
        $("#'.$row['nimi'].'nuolet").addClass("disabled")
     setTimeout(function () {
         $("#'.$row['nimi'].'nuolet").removeClass("disabled")
         },1500);
		socket.emit("'.$row['nimi'].'arrowUp", ylos);

    var positionYla = ylos;
    var nimi4 = "'.$row['nimi'].'"; 
    var position1 = { "positionYla": positionYla, "nimi":nimi4 };
    $.ajax({
            url: "./php/positionToDB.php",
            type: "POST",
            data: position1,
            success: function (data) {
            }
        });
    });

    $("#'.$row['nimi'].'arrowDown").click(function (value) {
        var ylos = 1; 
         $("#'.$row['nimi'].'nuolet").addClass("disabled")
     setTimeout(function () {
         $("#'.$row['nimi'].'nuolet").removeClass("disabled")
         },1500);    		
		socket.emit("'.$row['nimi'].'arrowDown", ylos);
    var positionAlas = ylos;
    var nimi5 = "'.$row['nimi'].'"; 
    var position1 = { "positionAlas": positionAlas, "nimi":nimi5 };
    $.ajax({
            url: "./php/positionToDBother.php",
            type: "POST",
            data: position1,
            success: function (data) {
            }
        });
    });

    $("#'.$row['nimi'].'arrowLeft").click(function (value) {
        var ylos = 1;
         $("#'.$row['nimi'].'nuolet").addClass("disabled")
     setTimeout(function () {
         $("#'.$row['nimi'].'nuolet").removeClass("disabled")
         },1500);     		
		socket.emit("'.$row['nimi'].'arrowLeft", ylos);
    var positionVasen = ylos;
    var nimi5 = "'.$row['nimi'].'"; 
    var position1 = { "positionVasen": positionVasen, "nimi":nimi5 };
    $.ajax({
            url: "./php/positionToDB.php",
            type: "POST",
            data: position1,
            success: function (data) {
            }
        });
    
    });
    $("#'.$row['nimi'].'arrowRight").click(function (value) {
        var ylos = 1; 
         $("#'.$row['nimi'].'nuolet").addClass("disabled")
     setTimeout(function () {
         $("#'.$row['nimi'].'nuolet").removeClass("disabled")
         },1500);    		
		socket.emit("'.$row['nimi'].'arrowRight", ylos);
    var positionOikea = ylos;
    var nimi5 = "'.$row['nimi'].'"; 
    var position1 = { "positionOikea": positionOikea, "nimi":nimi5 };
    $.ajax({
            url: "./php/positionToDBother.php",
            type: "POST",
            data: position1,
            success: function (data) {
            }
        });
    });

</script>
	</div>
 <br>';
	}
	echo $option;
	mysqli_close($con);
	
} else
	echo "Sorry, no database connection :(";

?>
