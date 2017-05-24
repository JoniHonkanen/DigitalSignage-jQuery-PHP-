<?php
require_once "connections.php";
$target_dir = "../kuvat/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        echo "<script>window.location = 'http://192.168.0.102/digitalSignageIframeTesti/'</script>";
        $uploadOk = 1;
    } else {
        echo "<script>alert('Kuva ei ole kelvollinen');</script>";
        echo "<script>window.location = 'http://192.168.0.102/digitalSignageIframeTesti/'</script>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<script>alert('Tiedosto jo olemassa');</script>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "<script>alert('Sorry, your file is too large.');</script>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "PNG" ) {
    echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<script>alert('Kuvan lataus epäonnistui');</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<script>alert('kuva lisätty');</script>";

    } else {
        echo "<script>alert('epäonnistui');</script>";

    }
header("Location: http://192.168.0.102/digitalSignageIframeTesti/");
exit;
}
?>