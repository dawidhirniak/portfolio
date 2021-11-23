  <p class="p">Uczeń w klasie</p> <br />
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
			echo '</select><br />Klasa<br />';
			echo '<select name="klasa">';
			$ins = mysqli_query($connection, "SELECT * FROM KLASA;");
			if($ins)
			{
				while($row = mysqli_fetch_array($ins))
				{
					echo '<option value="'.$row[0].'">'.$row[1].'</option>';
				}
			}
			echo '</select>';
		?>
	   <br /><input type="submit" />
	  
    </form>
<?php 
		if(isset($_POST['uczen']) && isset($_POST['klasa']))
		{
			$uczen = $_POST['uczen'];
			$klasa = $_POST['klasa'];
			
			$connection = mysqli_connect('localhost', 'root', '')
			or die('Brak polaczenia z serwerem MySQL');
			$ins = mysqli_query($connection, "use dziennikdawid_hirniak");
			if($ins) echo "<br />";
			else echo "Nie mozna znaleźć bazy <br />";
			
			$ins = mysqli_query($connection, 'select ID_KLASA from U_W_K where ID_UCZEN ='.$uczen);
			if($ins)
			{
				$row = mysqli_fetch_array($ins);
				if($row[0])
				{
					$ins = mysqli_query($connection, 'update U_W_K set ID_KLASA ='.$klasa.' where ID_UCZEN ='.$uczen.';');
					echo "Utworzono rekordy <br />";
				}
				else
				{
					$ins = mysqli_query($connection, 'insert into U_W_K (id_uczen, id_klasa) values ('.$uczen.' , '.$klasa.');');
					echo " <br />".mysqli_error($connection);
				}
			}
		}
		

		

		
?>
<br/>
<a href="index.php?go=4">Wróć</a>
