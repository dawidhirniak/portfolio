 <p class="p">Przedmioty</p> <br />
  <form action="#" method="POST">
	  	Nazwa przedmiotu <br />
      <input type="text" name="nazwa" /> <br />
      <input type="submit" />
    </form>

<?php 
		if(isset($_POST['nazwa']))
		{
			$nazwa = $_POST['nazwa']; 
			$connection = mysqli_connect('localhost', 'root', '')
			or die('Brak polaczenia z serwerem MySQL');
			$ins = mysqli_query($connection, "use dziennikdawid_hirniak");
			if($ins) echo "<br />";
			else echo "Nie mozna znaleźć bazy <br />";
			$ins1=mysqli_query($connection, "INSERT INTO `przedmiot` (`ID_PRZE`, `NAZWA_PRZEDMIOTU`) VALUES ('', '$nazwa');");
			if($ins1) echo "Utworzono rekordy<br>";		
		}
		
?>
<br/>
<a href="index.php?go=4">Wróć</a>