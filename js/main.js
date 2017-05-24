$(document).ready(function () {
    var img = new Image();
    var img1 = new Image();
    var kuva = '';
    var kuva1 = '';
    $.ajax({
        url: "./php/previewList.php",
        success: function (data) {
            $('#previewNimet').append(data);
            var pityys = $(".previewContainer").length;
            var setTimeOutPituus = pityys * 0.40 * 1000;
            console.log(setTimeOutPituus);
            setTimeout(function () {
                $('.se-pre-con').fadeOut(1000);
            }, 1500 + setTimeOutPituus);
        }
    });

    // Wait for window load
    /*
    var timeoutId;
    $("#previewNimet").mouseenter(function () {
        if (!timeoutId) {
            timeoutId = window.setTimeout(function () {
                timeoutId = null;
                $("#vasenReuna").removeClass("col-xs-2"), 1500;
                $("#vasenReuna").addClass("col-xs-12"), 500;
                $("#esityksenValinta").hide();
            }, 1000);
        }
    })
        .mouseleave(function () {
            if (timeoutId) {
                window.clearTimeout(timeoutId);
                timeoutId = null;
            }
            else {
                $("#vasenReuna").removeClass("col-xs-12"), 500;
                $("#vasenReuna").addClass("col-xs-2"), 1500;
                $("#esityksenValinta").show();
            }
        });

    $('.preview').mouseover(function () {
        var kukka = ($(this).parent().attr("id"));
        console.log(kukka);
        $('.preview').not("#" + kukka).fadeTo(1000, 0);
    }).mouseout(function () {
        $('.preview').not(this).fadeIn("slow");
    });
*/

    $("#chooseImg").change(function () { // bCheck is a input type button
        var fileName = $("#chooseImg").val();
        if (fileName) { // returns true if the string is not empty
            $('#addImageBtn').fadeIn("slow");

        } else { // no file was selected
            $('#addImageBtn').fadeOut("slow");
        }
    });
    $("#chooseImg2").change(function () { // bCheck is a input type button
        var fileName = $("#chooseImg2").val();
        if (fileName) { // returns true if the string is not empty
            $('#addImageBtn2').fadeIn("slow");

        } else { // no file was selected
            $('#addImageBtn2').fadeOut("slow");
        }
    });
    $('#addImageBtn2').click(function () {
        var poistettavaKuva = $('#chooseImg2').val();
        (confirm("Haluatko varmasti poistaa tämän: " + poistettavaKuva + "?"));
    });
/*
    $('#chooseImg2').click(function (data) {
        $.ajax({
            url: "./php/poista.php",
            type: "POST",
            success: function (data) {
                console.log("data");
                var kukka = data;
                    var sorttaus = $(".poistettavat").append($("<a class='pois' style='height:50px; width:50px; margin-left:10px; cursor: pointer;'>" + kukka + "</a>"));

            }
        });
    });
*/
    $("#newScreen").hide();
    $("#nimi").keyup(function () {
        if ($("#nimi").val() != '') {
            $("#newScreen").show(500);
        }
        if ($("#nimi").val() == '') {
            $("#newScreen").hide(500);
        }
    });



    $.get("./php/screenNames.php", function (data, status) {
        $('#esityksenValinta').append(data);
        var dir = "../digitalSignageIframeTesti/kuvat/";
        $.ajax({
            url: dir,
            success: function (data) {

                var fileextension1 = ".png";
                var fileextension2 = ".jpg";
                var fileextension3 = ".gif";
                var fileextension4 = ".PNG";
                var fileextension5 = ".JPG";
                var fileextension6 = ".GIF";
                var fileextension7 = ".jpeg";
                var fileextension7 = ".JPEG";
                var nimet = '';

                var testi = $(data).find("a:contains(" + fileextension1 + "), a:contains(" + fileextension2 + "), a:contains(" + fileextension3 + "), a:contains(" + fileextension4 + "), a:contains(" + fileextension5 + "), a:contains(" + fileextension6 + "), a:contains(" + fileextension7 + ")").map(function () {
                    var testaus = this.toString();
                    var arr = testaus.split('/');
                    /*   console.log(this);
                       console.log(this.href);
                       console.log("splittaukset:" + arr[0]);
                       console.log("splittaukset:" + arr[1]);
                       console.log("splittaukset:" + arr[2]);
                       console.log("splittaukset:" + arr[3]); */
                    console.log("splittaukset: TAMA TOIMII" + arr[4]);
                    /*
                                        var filename = this.href.replace(window.location.host, "").replace("http:///", "");
                                        console.log("testaus: "+filename);
                                        console.log("eka filename: "+filename);
                                        filename = filename.split("/")[1].toString();
                                        console.log("toka filename: "+filename);
                                        */
                    var sorttaus = $(".ruutu").append($("<img class='img' style='height:50px; width:50px; margin-left:10px; cursor: pointer;'  src=" + dir + arr[4] + "></img>"));
                });
            }
        });
    });
    $("#upload").on('submit', (function (e) {
        $.ajax({
            url: "./php/upload.php",
            type: "POST",
            success: function (data) {
            }
        });
    }));
    document.getElementById('chooseImg2').addEventListener('change', function (event) {
        console.log(event.target.files[0].path);
    });

    $("#lisaaPoista").click(function () {
        $("#addDelete").toggle("slow");
        $(".overlay").toggle(0);
        $("#kaikkiTarkea").addClass("blur");
        $("#vasenReuna").addClass("blur");
    });

    $("#naytonLisaus").click(function () {
        $("#addScreen").toggle("slow");
        $(".overlay").toggle(0);
        $("#kaikkiTarkea").addClass("blur");
        $("#vasenReuna").addClass("blur");
    });

    $("#close").click(function () {
        $("#addScreen").toggle("slow");
        $(".overlay").toggle(0);
        $("#kaikkiTarkea").removeClass("blur");
        $("#vasenReuna").removeClass("blur");
    });

    $("#close2").click(function () {
        $("#addDelete").toggle("slow");
        $(".overlay").toggle(0);
        $("#kaikkiTarkea").removeClass("blur");
        $("#vasenReuna").removeClass("blur");
    });

    $(".img").hover(function () {
        $(this).show();
    });

    function myFunction() {
        alert("Hello! I am an alert box!");
    }

    $('#nimi').bind('keypress', function (e) {
        if ($('#nimi').val().length >= 0) {
            var k = e.which;
            var ok = k >= 65 && k <= 90 || // A-Z
                k >= 97 && k <= 122 || // a-z
                k >= 48 && k <= 57; // 0-9

            if (!ok) {
                e.preventDefault();
            }
        }
    });


    $("#newScreen").click(function () {
        $('#form').submit(false);
        disallow: "äåö";
        var pathname = window.location.pathname;
        var currentPath = pathname;
        var esitys = $('#nimi').val();
        esitys = esitys.replace(/\ /g, '');
        var myData = { "esitys": esitys };
        var esitys1 = $('#nimi').val();
        var myData1111 = { "esitys1": esitys1 };

        var fontKoko = 'socket.on("' + esitys1 + 'fontSize", function (value) {var font = value;$(".marquee").css("font-size", font+"vh");});';
        var fontColor = 'socket.on("' + esitys1 + 'fontColor", function (value) {var font = value;$(".marquee").css("color", font);});';
        var fontFamily = 'socket.on("' + esitys1 + 'font", function (value) {var font = value;$(".marquee").css("font-family", font);});';
        var ylos = 'socket.on("' + esitys1 + 'arrowUp", function (value) {var font = value;$(".marquee").css("margin-top", "-=" + font+"vh");});'; //tahan lisatty 21.1
        var alas = 'socket.on("' + esitys1 + 'arrowDown", function (value) {var font = value;$(".marquee").css("margin-top", "+=" + font+"vh");});';
        var vasen = 'socket.on("' + esitys1 + 'arrowLeft", function (value) {var font = value;$(".marquee").css("margin-left", "-=" + font+"vw");});';
        var oikea = 'socket.on("' + esitys1 + 'arrowRight", function (value) {var font = value;$(".marquee").css("margin-left", "+=" + font+"vw");});';
        var ajaxText = 'setTimeout(function () {$.ajax({url: "../../php/textToScreen.php",type: "POST",data: asd,success: function (data) {var lines = data.split("<br>");jQuery.each(lines, function () {});var marquee = lines;var counter = 1;var text = "";var i;for (i = 0; i < marquee.length; i++) {text += marquee[i];document.getElementById("marquee" + counter.toString()).innerHTML = text;text = ""; counter++;}}});},300);';
        var ajaxShortText = 'setTimeout(function () {$.ajax({url: "../../php/textShortToScreen.php",type: "POST",data: asd,success: function (data) {$("#marquee7").append(data);}});}, 500);';
        var ajaxPositionText = 'setTimeout(function () {$.ajax({url: "../../php/positionFromDB.php",type: "POST",data: asd,success: function (data) {var lines = data.split("<br>");jQuery.each(lines, function () { });var marquee = lines;$(".marquee").css("margin-top",  + marquee[1]+"vh");$(".marquee").css("margin-left",  + marquee[0]+"vw");}});}, 300);';
        var ajaxTextStyle = 'setTimeout(function () {$.ajax({url: "../../php/fontStylesToScreen.php",type: "POST",data: asd,success: function (data) {var lines = data.split("<br>");var marquee = lines;$(".marquee").css("color", marquee[0]);$(".marquee").css("font-size", marquee[1]+"vh");$(".marquee").css("font-family", marquee[2]);}});}, 300);';
        var toiminto = '<div id="preloadDiv"></div><div id="marqs"><div id="marquee1" class="marquee"></div><div id="marquee2" class="marquee"></div><div id="marquee3" class="marquee"></div><div id="marquee4" class="marquee"></div><div id="marquee5" class="marquee"></div><div id="marquee6" class="marquee"></div><div id="marquee7" class="marquee"></div></div><script>$(document).ready(function(){ var thisName= "' + esitys1 + '"; var asd = { "nimet": thisName };{$.ajax({url: "../../php/imgToScreen.php",type: "POST",data: asd,success: function (data) {$("#preloadDiv").append(data);}});' + ajaxText + ajaxShortText + ajaxPositionText + ajaxTextStyle + ' var socket = io.connect("http://192.168.0.102:3002");socket.on("' + esitys1 + '", function(value) { var kuva = value; $("#preloadDiv").html("<img src= "+ kuva +" style=height:100%;width:100%;background-size:contain;>"); });; socket.on("' + esitys1 + esitys1 + '", function (value) { var marquee = value;var counter = 1;var text = "";var i;for (i = 0; i < marquee.length; i++) {text += marquee[i];document.getElementById("marquee" + counter.toString()).innerHTML = text;text = "";counter++;}});socket.on("' + esitys1 + 'lyhyt", function (value) {var marquee = value;var marq = $.trim(marquee);var marqueeText = value.toString();document.getElementById("marquee7").innerHTML = marquee;}); ' + fontKoko + fontColor + fontFamily + ylos + vasen + alas + oikea + ' }})</script>';
        var PreviewString = '<html lang="en-IE"><head><title>' + esitys1 + '</title><meta charset="utf-8"/> <script src="../../js/mustHave/jquery.min.js"></script><script src="../../js/mustHave/bootstrap.min.js"></script><script src="../../js/mustHave/socket.io-1.4.5.js"></script><script src="../../js/mustHave/jquery-ui.min.js" type="text/javascript"></script><link rel="stylesheet" type="text/css" href="../../css/player.css"></head><body>' + toiminto + '</body></html>';
        var myData11 = { "PreviewString": PreviewString, "esitys1": esitys1 };

        $.ajax({
            url: "./php/newEsitys.php",
            type: "POST",
            data: myData,
            success: function (data) {
                console.log("esitysLuotu");
                $.ajax({
                    url: "./php/createfolder.php",
                    type: "POST",
                    data: myData1111,
                    success: function () {
                        console.log("kansio luotu");
                        $.ajax({
                            url: "./php/generateFile.php",
                            type: "POST",
                            data: myData11,
                            success: function () {
                                console.log("tiedosto luotu");
                                $.ajax({
                                    url: "./php/createServer.php",
                                    type: "POST",
                                    success: function () {
                                        console.log("serveri paivitetty");
                                        location.reload();
                                        //   alert("Lisätty, päivitä sivu nähdäksesi muutokset");
                                    }
                                });
                                //                alert('Uusi inffonäyttö "' + esitys1 + '" lisätty');                   
                            }
                        });
                    }
                });
            }
        });
        $('#nimi').val("");
    });

    setTimeout(function () {
        $(".poisto").click(function () {
            var ids = $('.ruutu').map(function (index) {
                return this.id;
            }).get();
            var nimet = ids;
            var poisto1 = ($(this).parent().attr('id'));
            var poisto = { "poisto": poisto1 };
            if (confirm("Haluatko varmasti poistaa: " + poisto1 + " ?")) {
                $('.loader').fadeIn(1000);
                $.ajax({
                    url: "./php/deleteFrom.php",
                    type: "POST",
                    data: poisto,
                    success: function (data) {

                        $.ajax({
                            url: "./php/deleteFolder.php",
                            type: "POST",
                            data: poisto,
                            success: function () {

                                $.ajax({
                                    url: "./php/deleteFromServer.php",
                                    type: "POST",
                                    data: nimet,
                                    success: function () {
                                        $('.loader').fadeOut(2000);
                                        location.reload();
                                    }
                                });
                            }
                        });
                    }
                });
            }
            return false;
        });
    }, 1500);
});

