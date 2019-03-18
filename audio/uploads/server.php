<?php
	session_start();

	$co2="co2";
	$so2="so2";
	$sound="sound";

	// Connect to the database
	$db=mysqli_connect("localhost","surya1993","9010040205","ks_testdb") or die($db);

	$sql="SELECT co2,so2,sound FROM pollution_monitoring ORDER BY id";

	if ($result=mysqli_query($db,$sql))
  	{
  	// Fetch one and one row
  		while ($row=mysqli_fetch_array($result))
    	{	
    		$co2=$row['co2'];
    		$so2=$row['so2'];
    		$sound=$row['sound'];

    		 // echo "$temperature<br>$humidity<br><br>";
    	}
  	// Free result set
  	mysqli_free_result($result);
	}

	mysqli_close($db);

$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
</html>
