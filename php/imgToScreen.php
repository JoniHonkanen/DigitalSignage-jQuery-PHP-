<?php
require_once "connections.php";

if ($con) {
	mysqli_set_charset($con,"utf8");

 $name = $_POST['nimet'];   
	
$sql = "SELECT kuva FROM naytonnimi WHERE nimi='$name'";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
     // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
         echo '<img src= "'. $row["kuva"].'" style=height:100%;width:100%;background-size:contain;>"';
         
     }
} else {
     echo "0 results";
}
	mysqli_close($con);
	
} else
	echo "Sorry, no database connection :(";

?>

