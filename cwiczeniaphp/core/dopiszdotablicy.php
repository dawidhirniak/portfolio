<?php
include_once('db.php');

if(isset($_POST['att']))
{
	db_connect();
	mysqli_query($db, 'ALTER TABLE LICZBY ADD SUMA INT DEFAULT 0;');
	$result = mysqli_query($db,'SELECT * FROM LICZBY;');
	while($row = mysqli_fetch_array($result))
	{
		$arg = $row[1]+$row[2];
		mysqli_query($db, 'UPDATE LICZBY SET SUMA='.$arg.' WHERE ID='.$row[0].';');
		echo '<p>Zmieniono rekord o ID: '.$row[0].'</p><br>';
	}
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