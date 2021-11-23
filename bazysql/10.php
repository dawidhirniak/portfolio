  <p class="p">Dzienniczek</p> <br />
  <form action="#" method="POST">
		<?php
			$connection = mysqli_connect('localhost', 'root', '')
			or die('Brak polaczenia z serwerem MySQL');
			$ins = mysqli_query($connection, "use dziennikdawid_hirniak");
			if($ins) echo "<br />";
			else echo "Nie mozna znaleźć bazy <br />";	
			echo 'Uczeń<br />';
			echo '<select name="uczen">';
			$ins = mysqli_query($connection, "SELECT ID_UCZEN, IMIE, NAZWISKO FROM uczen;");
			if($ins)
			{
				while($row = mysqli_fetch_array($ins))
				{
					echo '<option value="'.$row[0].'">'.$row[1].' '.$row[2].'</option>';
				}
			}
			echo '</select><br />Nauczyciel<br />';
			
			echo '<select name="naucz">';
			$ins = mysqli_query($connection, "SELECT ID_NAUCZ, IMIE, NAZWISKO FROM nauczyciele;");
			if($ins)
			{
				while($row = mysqli_fetch_array($ins))
				{
					echo '<option value="'.$row[0].'">'.$row[1].' '.$row[2].'</option>';
				}
			}
			echo '</select><br />Ocena<br />';
			
			echo '<select name="ocena">';
			$ins = mysqli_query($connection, "SELECT ID_OCENA, NAZWA_OCENY FROM ocena;");
			if($ins)
			{
				while($row = mysqli_fetch_array($ins))
				{
					echo '<option value="'.$row[0].'">'.$row[1].'</option>';
				}
			}
			echo '</select><br />Przedmiot<br />';
			
			echo '<select name="przed">';
			$ins = mysqli_query($connection, "SELECT ID_PRZE, NAZWA_PRZEDMIOTU FROM przedmiot;");
			if($ins)
			{
				while($row = mysqli_fetch_array($ins))
				{
					echo '<option value="'.$row[0].'">'.$row[1].'</option>';
				}
			}
			echo '</select><br />';
		?>
		Data<br />
		<input type="date" name="data"></input> <br />
	  <input type="submit" />
	  
    </form>
<?php 
		if(isset($_POST['uczen']) && isset($_POST['naucz']) && isset($_POST['ocena']) && isset($_POST['przed']) && isset($_POST['data']))
		{
			$uczen = $_POST['uczen'];
			$naucz = $_POST['naucz'];
			$ocena = $_POST['ocena'];
			$przed = $_POST['przed'];
			$data = $_POST['data'];
			
			$connection = mysqli_connect('localhost', 'root', '')
			or die('Brak polaczenia z serwerem MySQL');
			$ins = mysqli_query($connection, "use dziennikdawid_hirniak");
			if($ins) echo "<br />";
			else echo "Nie mozna znaleźć bazy <br />";
			
			$ins = mysqli_query($connection, 'insert into dzienniczek (ID_UCZEN, ID_NAUCZ, ID_OCENA, ID_PRZE,DATA_WYST) values('.$uczen.', '.$naucz.', '.$ocena.', '.$przed.', "'.$data.'");');
			if($ins)
			{
				echo 'Dodano ocene';
			}
			else
			{
				echo 'Nie dodano oceny<br />'.mysqli_error($connection);
			}
		}
		

		

		
?>
<br/>
<a href="index.php?go=4">Wróć</a>
