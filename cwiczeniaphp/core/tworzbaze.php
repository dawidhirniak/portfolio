<?php
include_once('db.php');

if(isset($_POST['cd']))
{
	if(db_create())
	{
		echo '<p>Utworzono bazę danych!</p>';
	}
	else
	{
		echo '<p>Nie udało się utworzyć bazy danych, lub już ona istnieje!</p>';
	}
}
?>