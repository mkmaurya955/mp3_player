<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pollution monitoring</title>
</head>
<body>
	<h2 style="color:blue;text-align: center;padding-top: 50px;padding-bottom: 30px;"><u>Pollution Monitoring</u></h2>
	
	<table border="0" align="center" width="400px" style="background-color:silver;border-radius: 20px">
	<form method="post" action="temphmdt.php">
		<!-- display validation errors here -->
		<!-- <?php include('errors.php');   ?>  -->
		<tr><td style="padding-top: 20px;padding-left: 50px;padding-bottom: 20px">
			CO2</td>
			<td><input type="text" name="co2" value="<?php echo $co2; ?>"></td>
		
		<tr><td style="padding-top: 15px;padding-left: 50px;padding-bottom: 20px">
			SO2</td>
			<td><input type="text" name="so2" value="<?php echo $so2; ?>"></td>
		
		</tr>
		
		<tr><td style="padding-top: 15px;padding-left: 50px;padding-bottom: 20px">
			SOUND </td>
			<td><input type="text" name="sound" value="<?php echo $sound; ?>"></td>
		
		</tr>
		</form>
	</table>
</body>
</html>