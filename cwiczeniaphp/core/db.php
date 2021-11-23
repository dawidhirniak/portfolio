<?php

include_once('config.php');

$db = mysqli_connect($CONFIG['db_host'], $CONFIG['db_user'], $CONFIG['db_pass']);

function db_create()
{
	global $db;
	global $CONFIG;
	
	mysqli_query($db, 'CREATE DATABASE '.$CONFIG['db_name'].';');
	if(mysqli_error($db))
	{
		return false;
	}
	else
	{
		return true;
	}
}

function db_connect()
{
	global $db;
	global $CONFIG;
	
	mysqli_query($db, 'USE '.$CONFIG['db_name'].';');
	if(mysqli_error($db))
	{
		echo 'Nie udało się połączyć z bazą danych. Sprawdź czy baza istnieje lub skontaktuj się z administratorem.';
	}
}


?>