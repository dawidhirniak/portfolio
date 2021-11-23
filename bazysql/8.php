  <p class="p">Nauczyciel</p> <br />
  <form action="#" method="POST">
	  	IMIE <br />
      <input type="text" name="imie" /> <br />
	  	Nazwisko <br />
      <input type="text" name="nazwisko" /> <br />
	  	telefon <br />
	 <input type="text" name="tel" /> <br />
		<input type="submit" />
    </form>

<?php 
		if(isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['tel']))
		{
			$IMIE = $_POST['imie']; 
			$NAZWISKO = $_POST['nazwisko'];
			$TELEFON = $_POST['tel'];
			
			$connection = mysqli_connect('localhost', 'root', '')
			or die('Brak polaczenia z serwerem MySQL');
			$ins = mysqli_query($connection, "use dziennikdawid_hirniak");
			if($ins) echo "<br />";
			else echo "Nie mozna znaleźć bazy <br />";
			$ins1=mysqli_query($connection, 'INSERT INTO nauczyciele(IMIE,NAZWISKO,TELEFON) VALUES ("'.$IMIE.'","'.$NAZWISKO.'","'.$TELEFON.'");');
			if($ins1) echo "Utworzono rekordy<br>";		
		}
?>
<br/>
<a href="index.php?go=4">Wróć</a>