<?php
require_once "connections.php";

if ($con) {
	mysqli_set_charset($con,"utf8");

 $name = $_POST['nimet'];   
	
$sql = "SELECT teksti7 FROM naytonnimi WHERE nimi='$name'";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
     // output data of each row
     while($row = mysqli_fetch_array($result)) {  
         echo  $row["teksti7"]; 
  
     }
} else {
     echo "0 results";
}
	mysqli_close($con);
	
} else
	echo "Sorry, no database connection :(";

?>