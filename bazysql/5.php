       <head>
	   <script type="text/javascript">
            function showTip(oEvent) {
                var oDiv = document.getElementById("divTip1");
                oDiv.style.visibility = "visible";
                oDiv.style.left = oEvent.clientX + 5;
                oDiv.style.top = oEvent.clientY + 5;
            }

            function hideTip(oEvent) {
                var oDiv = document.getElementById("divTip1");
                oDiv.style.visibility = "hidden";
            }
			function showTip2(oEvent) {
                var oDiv = document.getElementById("divTip2");
                oDiv.style.visibility = "visible";
                oDiv.style.left = oEvent.clientX + 5;
                oDiv.style.top = oEvent.clientY + 5;
            }

            function hideTip2(oEvent) {
                var oDiv = document.getElementById("divTip2");
                oDiv.style.visibility = "hidden";
            }
			
			function showTip3(oEvent) {
                var oDiv = document.getElementById("divTip3");
                oDiv.style.visibility = "visible";
                oDiv.style.left = oEvent.clientX + 5;
                oDiv.style.top = oEvent.clientY + 5;
            }
            function hideTip3(oEvent) {
                var oDiv = document.getElementById("divTip3");
                oDiv.style.visibility = "hidden";
            }
			
			function showTip4(oEvent) {
                var oDiv = document.getElementById("divTip4");
                oDiv.style.visibility = "visible";
                oDiv.style.left = oEvent.clientX + 5;
                oDiv.style.top = oEvent.clientY + 5;
            }

            function hideTip4(oEvent) {
                var oDiv = document.getElementById("divTip4");
                oDiv.style.visibility = "hidden";
            }
			            function showTip5(oEvent) {
                var oDiv = document.getElementById("divTip5");
                oDiv.style.visibility = "visible";
                oDiv.style.left = oEvent.clientX + 5;
                oDiv.style.top = oEvent.clientY + 5;
            }

            function hideTip5(oEvent) {
                var oDiv = document.getElementById("divTip5");
                oDiv.style.visibility = "hidden";
            }
			function showTip6(oEvent) {
                var oDiv = document.getElementById("divTip6");
                oDiv.style.visibility = "visible";
                oDiv.style.left = oEvent.clientX + 5;
                oDiv.style.top = oEvent.clientY + 5;
            }

            function hideTip6(oEvent) {
                var oDiv = document.getElementById("divTip6");
                oDiv.style.visibility = "hidden";
            }
						function showTip7(oEvent) {
                var oDiv = document.getElementById("divTip7");
                oDiv.style.visibility = "visible";
                oDiv.style.left = oEvent.clientX + 5;
                oDiv.style.top = oEvent.clientY + 5;
            }

            function hideTip7(oEvent) {
                var oDiv = document.getElementById("divTip7");
                oDiv.style.visibility = "hidden";
            }
			
        </script>
		</head>
<p class="p">Kwerendy</p>
<div id="guziki">
<form action="#" method="POST">
<input onmouseover="showTip(event)" onmouseout="hideTip(event)" type="submit" name="zapytanie1" value="Zapytanie1"><br />
<div id="divTip1">
            Wyszukaj ucznia o nazwisku kowalski, wyświetl dane (rekordy) w postaci tabeli
</div>
<input type="text" name="pole1" value="">
<input onmouseover="showTip2(event)" onmouseout="hideTip2(event)" type="submit" name="zapytanie2" value="Zapytanie2"><br />
<div id="divTip2">
            Wyszukaj ucznia o podanym nazwisku, wyświetl dane w postaci tabeli
</div>
<input type="text" name="pole2" value="">
<input onmouseover="showTip3(event)" onmouseout="hideTip3(event)" type="submit" name="zapytanie3" value="Zapytanie3"><br />
<div id="divTip3">
            Wyszukaj ucznia o podanym w polu type=”text” id, wyświetl dane w postaci tabeli,<br> w polu id przechowaj nazwiska i identyfikatory uczniów
</div>
<input onmouseover="showTip4(event)" onmouseout="hideTip4(event)" type="submit" name="zapytanie4" value="Zapytanie4"><br />
<div id="divTip4">
            Wyświetl uczniów klasy 3ti 
</div>
<input onmouseover="showTip5(event)" onmouseout="hideTip5(event)" type="submit" name="zapytanie5" value="Zapytanie5"><br />
<div id="divTip5">
            Wyświetl wszystkich uczniów
</div>
<input onmouseover="showTip6(event)" onmouseout="hideTip6(event)" type="submit" name="zapytanie6" value="Zapytanie6"><br />
<div id="divTip6">
            Policz i wyświetl średnią ocen wszystkich uczniów z matematyki
</div>
<input type="text" name="pole3" value="">
<input onmouseover="showTip7(event)" onmouseout="hideTip7(event)" type="submit" name="zapytanie7" value="Zapytanie7"><br />
<div id="divTip7">
            Wyszukaj uczniów, którym wystawiono oceny z przedmiotu podanego w formularzu
</div>
</form>
</div>
<div id="tabela">
<?php 
$connection = @mysqli_connect('localhost', 'root', '')
or die('Brak polaczenia z serwerem MySQL');
$ins = @mysqli_query($connection,"use dziennikdawid_hirniak");
if($ins) echo " <br />";
else echo "Nie mozna znaleźć bazy <br />";
if (isset($_POST['zapytanie1']))
{
	$sel=mysqli_query($connection,"select * from uczen where nazwisko='kowalski';");
	echo "<table border=\"5\"><tr><th>Imię</th><th>Nazwisko</th></tr>";
	while ($row = mysqli_fetch_array($sel))
	{
		echo "<tr><td>".$row[1]." </td><td>".$row[2]."</td></tr>";
	}
	echo "</table>";	
}
if (isset($_POST['zapytanie2']) && isset($_POST['pole1']))
{
	$sel=mysqli_query($connection,"select * from uczen where nazwisko='".$_POST['pole1']."';");
	echo "<table border=\"5\"><tr><th>Imię</th><th>Nazwisko</th></tr>";
	while ($row = mysqli_fetch_array($sel))
	{
		echo "<tr><td>".$row[1]." </td><td>".$row[2]."</td></tr>";
	}
	echo "</table>";	
}
if (isset($_POST['zapytanie3']) && isset($_POST['pole2']))
{
	$sel=mysqli_query($connection,"select * from uczen where nazwisko='".$_POST['pole2']."';");
	echo "<table border=\"5\"><tr><th>Id</th><th>Nazwisko</th></tr>";
	while ($row = mysqli_fetch_array($sel))
	{
		echo "<tr><td>".$row[0]." </td><td>".$row[2]."</td></tr>";
	}
	echo "</table>";
}
if (isset($_POST['zapytanie4']))
{
	$sel=mysqli_query($connection,'SELECT uczen.Imie, uczen.Nazwisko, KLASA.Nazwa_Klasy
FROM KLASA INNER JOIN (uczen INNER JOIN U_W_K ON uczen.ID_Uczen = U_W_K.ID_Uczen) ON KLASA.ID_Klasa = U_W_K.ID_Klasa
WHERE (((KLASA.NAZWA_KLASY)="3ti"));
	');
	echo "<table border=\"5\"><tr><th>Imię</th><th>Nazwisko</th><th>Klasa</th></tr>";
	while ($row = mysqli_fetch_array($sel))
	{
		echo "<tr><td>".$row[0]." </td>"."<td>".$row[1]." </td><td>".$row[2]."</td></tr>";
	}
	echo "</table>";		
}
if (isset($_POST['zapytanie5']))
{
	$sel=mysqli_query($connection, "select * from uczen;");
	echo "<table border=\"5\"><tr><th>id</th><th>Imię</th><th>Nazwisko</th><th>Ulica</th><th>Nr domu</th></tr>";
	while ($row = mysqli_fetch_array($sel))
	{
		echo "<tr><td>".$row[0]." </td>"."<td>".$row[1]." </td><td>".$row[2]."</td><td>".$row[4]."</td><td>".$row[5]."</td></tr>";
	}
	echo "</table>";	
}
if (isset($_POST['zapytanie6']))
{
	$sel=mysqli_query($connection,'SELECT Uczen.Imie, Uczen.Nazwisko, Avg(Dzienniczek.ID_Ocena) AS srednia
	FROM Uczen INNER JOIN (Ocena INNER JOIN Dzienniczek ON Ocena.ID_Ocena = Dzienniczek.ID_Ocena) ON Uczen.ID_Uczen =
	Dzienniczek.ID_Uczen GROUP BY Uczen.Imie, Uczen.Nazwisko;');
	echo "<table border=\"5\"><tr><th>Imię</th><th>Nazwisko</th><th>Średnia</th></tr>";
	while ($row = mysqli_fetch_array($sel))
	{
		echo "<tr><td>".$row[0]." </td>"."<td>".$row[1]." </td><td>".$row[2]."</td></tr>";
	}
	echo "</table>";
}
if (isset($_POST['zapytanie7']) && isset($_POST['pole3']))
{
	$sel=mysqli_query($connection,"SELECT Przedmiot.ID_Prze, Dzienniczek.ID_Dzienniczek, Ocena.ID_Ocena, Uczen.ID_uczen,
	Dzienniczek.ID_Uczen, Dzienniczek.ID_Ocena, Dzienniczek.ID_Prze, Uczen.Imie, Uczen.Nazwisko, Ocena.Nazwa_Oceny, Przedmiot.Nazwa_Przedmiotu
	FROM Przedmiot INNER JOIN (Ocena INNER JOIN (Uczen INNER JOIN Dzienniczek ON Uczen.ID_uczen = Dzienniczek.ID_Uczen) 
	ON Ocena.ID_Ocena = Dzienniczek.ID_Ocena) ON Przedmiot.ID_Prze = Dzienniczek.ID_Prze
	WHERE (((Dzienniczek.ID_Prze)=".$_POST['pole3']."));");
	echo "<table border=\"5\"><tr><th>Imię</th><th>Nazwisko</th><th>Ocena</th><th>Nazwa przedmiotu</th></tr>";
	while ($row = mysqli_fetch_array($sel))
	{
		echo "<tr><td>".$row[7]." </td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[10]."</td></tr>";
	}
	echo "</table>";	
}
?>
</div>