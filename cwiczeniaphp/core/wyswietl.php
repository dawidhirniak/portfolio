<?php
include_once('db.php');

if(isset($_POST['sr']))
{
	db_connect();
	$result = mysqli_query($db,'SELECT * FROM LICZBY;');
	echo '<table border="3"><tr><th>ID</th><th>LICZBA_A</th><th>LICZBA_B</th></tr>';
	while($row = mysqli_fetch_array($result))
	{
		echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td></tr>';
	}
	echo '</table><br>';
}
?>