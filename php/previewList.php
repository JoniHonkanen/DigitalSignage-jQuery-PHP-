<?php
require_once "connections.php";

if ($con) {
	mysqli_set_charset($con,"utf8");
	
	$get=mysqli_query($con, "SELECT nimi FROM naytonnimi");
	$asd = '';
	while($row = mysqli_fetch_assoc($get))
	{
	$asd .= '<div id="'.$row['nimi'].'close" class="close btn btn-default btn-lg" style="display:none;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></div><div id="'.$row['nimi'].'container" class="previewContainer" style="border-radius:5px;background-color:rgba(209,215,220,0.75);padding-bottom:20px;margin-bottom:15px;box-shadow: 12px 10px 12px #888888;"><div id="'.$row['nimi'].'Preview" class="preview" style="width:95%;float:left;margin-left:10px;"><h3 style="position:absolute" class="previewTeksti" id="'.$row['nimi'].'teksti">'.$row['nimi'].'</h3><iframe frameBorder="0" id="iframe'.$row['nimi'].'" src="http://192.168.0.102/digitalSignageIframeTesti/screenit/'.$row['nimi'].'"></iframe></div></div>
	<script type="text/javascript">
	var pityys = $(".previewContainer").length ;
	var setTimeOutPituus= pityys*0.43*1500;
	console.log(setTimeOutPituus);
setTimeout(function () {
	var img = new Image();
	var kuva = "";
	var contentti = $("#iframe'.$row['nimi'].'").contents().find("img");
	var contentti1 = $("#iframe'.$row['nimi'].'").contents();
     kuva1 = contentti[0].naturalHeight;
     kuva2 = contentti[0].naturalWidth; 
	 
	  console.log("tahan koitetaan saada src: " + kuva);
    console.log("leveys: "+kuva1);
    console.log("korkeus: "+kuva2);
	console.log(contentti);
	  console.log(contentti1);

     if(kuva2/kuva1 >= 1 ){
         $("#iframe'.$row['nimi'].'").css("width","100%");
		 $("#iframe'.$row['nimi'].'").css("margin-left","0%");
       //  console.log("suurempi kuin 1");
        // console.log(kuva2/kuva1);
     }
     if(kuva2/kuva1 < 1 ){
          $("#iframe'.$row['nimi'].'").css("width","30%");
		  $("#iframe'.$row['nimi'].'").css("margin-left","26%");
       //  console.log("pienempi kuin 1");
         //console.log(kuva2/kuva1);
     }
	 },200+setTimeOutPituus);

	  setTimeout(function () {
        $("#'.$row['nimi'].'Preview").click(function () {
			$("#iframe'.$row['nimi'].'").css("marginTop", "");
			$(".previewContainer").not("#'.$row['nimi'].'container").addClass("blur");
			$("#kaikkiTarkea").addClass("blur");
			var kuva = "";
	var contentti = $("#iframe'.$row['nimi'].'").contents().find("img");
	/*var humppa = contentti.context.URL;*/

     kuva1 = contentti[0].naturalHeight;
     kuva2 = contentti[0].naturalWidth;
		if(kuva2/kuva1 >= 1 ){
			/*
			console.log(kuva2);
			console.log(kuva1);
            console.log(kuva2/kuva1);
			*/
			$("#'.$row['nimi'].'Preview").removeClass("preview");
			$("#'.$row['nimi'].'container").addClass("preview1");
            $("#'.$row['nimi'].'Preview").addClass("preview2");
            $("#'.$row['nimi'].'close").show();
            $(".overlay").show();       
		};	
		 if(kuva2/kuva1 < 1 ){
			$("#'.$row['nimi'].'Preview").removeClass("preview");
			$("#iframe'.$row['nimi'].'").css("width","100%");
			$("#'.$row['nimi'].'container").addClass("preview1");
            $("#'.$row['nimi'].'Preview").addClass("preview3");
            $("#'.$row['nimi'].'close").show();
            $(".overlay").show();
     };
	 })
    }, 500);
    setTimeout(function () {
        $("#'.$row['nimi'].'close").click(function () {
			$("#'.$row['nimi'].'Preview").addClass("preview");
			$("#'.$row['nimi'].'container").removeClass("preview1");
            $("#'.$row['nimi'].'Preview").removeClass("preview2");
			$("#'.$row['nimi'].'Preview").removeClass("preview3");
			$("#kaikkiTarkea").removeClass("blur");
        	$(".previewContainer").removeClass("blur");
            $("#'.$row['nimi'].'close").hide();
			
            $(".overlay").hide();
		if(kuva2/kuva1 > 1 ){
			$("#iframe'.$row['nimi'].'").css("width","100%");
		}	
		 else{
			 $("#iframe'.$row['nimi'].'").css("width","30%");
     };
        });
    }, 500);
	</script>';
	}
	echo $asd;
	mysqli_close($con);
	
} else
	echo "Sorry, no database connection :(";

?>


