<?php

include_once("config.php");


$sql = "SELECT * FROM vits_solar WHERE UID = 'surya'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "output : " . $row["output"];
        echo $row["incoming"];
        //echo $result;
    }
} else {
echo "Error: " . $sql . "  " . $conn->error;
    echo "No results";
}

$conn->close();

?>
