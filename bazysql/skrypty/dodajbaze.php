<?PHP
if(isset($_POST['dodajbaze']))
{
    $connection = @mysqli_connect('localhost', 'root', '')
    or die('Brak połaczenia z serwerem MySQL');
	$ins = @mysqli_query($connection,"create database dziennikdawid_hirniak");
if($ins) echo "<p>Dodano baze danych</p>";
    else echo "<p>Baza już istnieje!</p>";
}
?>
