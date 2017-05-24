<?php
require_once "connections.php";

if ($con) {
	mysqli_set_charset($con,"utf8");

 $name = $_POST['nimet'];   
	
$sql = "SELECT teksti1,teksti2,teksti3,teksti4,teksti5,teksti6 FROM naytonnimi WHERE nimi='$name'";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
     // output data of each row
     while($row = mysqli_fetch_array($result)) {  
         echo  $row["teksti1"]."<br>"; 
         echo  $row["teksti2"]."<br>";
         echo  $row["teksti3"]."<br>"; 
         echo  $row["teksti4"]."<br>";  
         echo  $row["teksti5"]."<br>"; 
         echo  $row["teksti6"]."<br>";    
     }
} else {
     echo "0 results";
}
	mysqli_close($con);
	
} else
	echo "Sorry, no database connection :(";

?>