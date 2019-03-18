<?php

include_once("config.php");

$UID= $_GET ['UID'];
$data = $_GET ['co2'];
$data1 = $_GET ['so2'];
$data2=$_GET ['sound'];
$sql = "UPDATE pollution_monitoring SET co2 = '$data', so2 = '$data1', sound = '$data2' WHERE UID = '$UID'";
$conn->query($sql);
if ($conn->query($sql) === TRUE) {
   // echo " Data entered correctly.";
} else {
   // echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM pollution_monitoring";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "output : " . $row["output"];
       // echo $row["incoming1"];
     echo $row["Outgoing"];
        //echo $result;
    }
} else {
echo "Error: " . $sql . "  " . $conn->error;
    echo "No results";
}

$conn->close();

?>
