<?php
//error_reporting(0); 
//including the database connection file
include_once("config.php");


if(isset($_GET['update']))  
   {
    $output= $_GET['output'];
    
 $sql = "UPDATE vits_solar SET Outgoing = '$output' WHERE UID = 'surya'";

if ($conn->query($sql) == TRUE) {
    echo "updated successfully";
    echo "<br/><a href='index.php'>Do it Again</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 header("Location: http://ksinfotech.co/vitssolar/index.php");
$conn->close();
}

?>