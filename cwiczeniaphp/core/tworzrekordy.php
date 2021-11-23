<?php
include_once('db.php');

if(isset($_POST['cr']))
{
	db_connect();
	$file = fopen($_SERVER['DOCUMENT_ROOT'].'/dawid/sql/tworzrek.sql','r');
	if($file)
	{
		while($line = fgets($file))
		{
			mysqli_query($db, $line);
			if(mysqli_error($db))
			{
				echo '<p>Błąd: '.mysqli_error($db).'</p><br />';
			}
			else
			{
				echo '<p>Dodano rekord</p><br />';
			}
		}
	}
}
?>