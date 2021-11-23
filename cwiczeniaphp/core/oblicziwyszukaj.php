<?php
include_once('db.php');

if(isset($_POST['dm']))
{
	db_connect();
	$result = mysqli_query($db,'SELECT * FROM LICZBY;');
	echo '<table border="3"><tr><th>ID</th><th>LICZBA_A</th><th>LICZBA_B</th><th>SUMA</th></tr>';
	while($row = mysqli_fetch_array($result))
	{
		$arg = $row[1]+$row[2];
		echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$arg.'</td></tr>';
	}
	echo '</table><br>';
}
?>