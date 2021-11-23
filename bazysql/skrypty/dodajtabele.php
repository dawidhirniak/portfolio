<?PHP
    
if(isset($_POST['dodajtabele']))
	{
		$qline  = "";
		$file = fopen("./pliki/1.sql", "r");  
		if($file)
		{
			$connection = mysqli_connect('localhost', 'root', '')
			or die('Brak połaczenia z serwerem MySQL');
			mysqli_query($connection,"use dziennikdawid_hirniak");
			while(($line = fgetss($file)) !== false)
			{
				$ins = mysqli_query($connection, $line);	
				if($ins) 
				{
					echo "dodano tabele<br>";
				}
				else
				{
					echo "tabele już istnieją";
					echo "<br /><h3>".mysqli_error($connection)."</h3>";
				}				
			}
			fclose($file);
		}
		else
		{
			echo "Nie można otworzyć pliku 1.sql";
		}
	}
?>
