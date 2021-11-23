<?PHP
if(isset($_POST['dodajrekord']))
{
function wczytajrekordy ($tabela)
{
	$file = fopen("./pliki/".$tabela.".txt", "r");
	if($file)
	{
		$connection = mysqli_connect('localhost', 'root', '')
		or die('Brak połaczenia z serwerem MySQL');
		mysqli_query($connection,"use dziennikdawid_hirniak");
		while(($line = fgetss($file)) !== false)
		{
			
			$line=preg_replace("((.*?):)", "$1,",$line);
			
			$qline="insert into ".$tabela." values(".$line.");";
			
			$ins = mysqli_query($connection, $qline);	
			if($ins) 
			{
				echo "dodano rekordy w tabeli ".$tabela."<br>";
			}
			else
			{
				echo "rekordy już istniej w tabeli".$tabela;
				echo "<br /><h3>".mysqli_error($connection)."</h3>";
			}	
		}
		fclose($file);
	}
	else
	{
		echo "Nie można otworzyć pliku ".$tabela.".txt";
	}
}
    
	
	{
		wczytajrekordy('dzienniczek');
		wczytajrekordy('miasto');
		wczytajrekordy('klasa');
		wczytajrekordy('nauczyciele');
		wczytajrekordy('ocena');
		wczytajrekordy('przedmiot');
		wczytajrekordy('uczen');
		wczytajrekordy('u_w_k');
	}
}
	?>
