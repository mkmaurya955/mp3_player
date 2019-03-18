<?php
if(isset($_POST['save_audio']) && $_POST['save_audio']=='Upload Audio')
{
	$dir='uploads/';
	$audio_path=$dir.basename($_FILES['audioFile']['name']);

	if(move_uploaded_file($_FILES['audioFile']['tmp_name'], $audio_path))
	{
		echo "Uploaded succesfully.";

		saveAudio($audio_path);
		displayAudio();
	}
}

function displayAudio()
{
	$conn=mysqli_connect('localhost','root','','audiodb');
	if(!$conn){
		die('Server not connected');
	}
	$query="SELECT * FROM audio";
	$r=mysqli_query($conn,$query);
	while ($row=mysqli_fetch_array($r)) {
		echo '<a href="paly.php?name='.$row['filename'].'">'.$row['filename'].'</a>';
		echo "<br/>";
	}
	mysqli_close($conn);
}


function saveAudio($fileName)
{
	$conn=mysqli_connect('localhost','root','','audiodb');
	if(!$conn){
		die('Server not connected');
	}
	$query="INSERT INTO audio(filename) VALUES ('{$fileName}')";

	mysqli_query($conn,$query);
	if(mysqli_affected_rows($conn)>0)
	{
		echo "Audio filr pathe saved in the data bases";
	}  

	mysqli_close($conn);
}
?>