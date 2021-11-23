<?php
include_once('db.php');

if(isset($_POST['cnt']))
{
	db_connect();
	mysqli_query($db, 'CREATE TABLE NOWA AS SELECT ID,SUMA FROM LICZBY');
	$result = mysqli_query($db,'SELECT * FROM NOWA;');
	echo '<table border="3"><tr><th>ID</th><th>SUMA</th></tr>';
	while($row = mysqli_fetch_array($result))
	{
		echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td></tr>';
	}
	echo '</table><br>';	
}

?>