  <p class="p">Uczeń</p> <br />
  <form action="#" method="POST">
	  	Imie <br />
      <input type="text" name="imie" /> <br />
		Nazwisko <br />
      <input type="text" name="nazwisko" /> <br />
      	Miasto <br />
	  <select name="miasto">
		<?php
			$connection = mysqli_connect('localhost', 'root', '')
			or die('Brak polaczenia z serwerem MySQL');
			$ins = mysqli_query($connection, "use dziennikdawid_hirniak");
			if($ins) echo " <br />";
			else echo "Nie mozna znaleźć bazy <br />";
			$ins = mysqli_query($connection, "SELECT * FROM miasto;");
			if($ins)
			{
				while($row = mysqli_fetch_array($ins))
				{
					echo '<option value="'.$row[0].'">'.$row[1].'</option>';
				}
			}
		?>
	  </select>
	  
	  <br />
	  	Ulica <br />
      <input type="text" name="ulica" /> <br />
		Nr Domu <br />
      <input type="text" name="dom" /> <br />
	  <input type="submit" />
	  
    </form>

<?php 
		if(isset($_POST['imie']) &&
		isset($_POST['nazwisko']) &&
		isset($_POST['miasto']) &&
		isset($_POST['ulica']) &&
		isset($_POST['dom']))
		{
			$imie = $_POST['imie']; 
			$nazwisko = $_POST['nazwisko'];
			$miasto = $_POST['miasto'];
			$ulica = $_POST['ulica'];
			$dom = $_POST['dom'];
			
			$connection = mysqli_connect('localhost', 'root', '')
			or die('Brak polaczenia z serwerem MySQL');
			$ins = mysqli_query($connection, "use dziennikdawid_hirniak");
			if($ins) echo " <br />";
			else echo "Nie mozna znaleźć bazy <br />";
			$ins1=mysqli_query($connection, 'INSERT INTO uczen(IMIE,NAZWISKO,MIASTO,ULICA,NR_DOMU) VALUES ("'.$imie.'","'.$nazwisko.'","'.$miasto.'","'.$ulica.'","'.$dom.'");');
			if($ins1) echo "Utworzono rekordy<br>";	
			
		}
		
?>
<br/>
<a href="index.php?go=4">Wróć</a>
