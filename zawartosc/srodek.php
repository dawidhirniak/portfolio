<?PHP     
@$go = $_GET['go']; 
if(!empty($go)) { 
if($go>=1 && $go<=12)
{
if(is_file("bazysql/$go.php")) include "bazysql/$go.php"; 
else echo "<br />Nie ma takiej strony :-("; 
}
else
if($go>=13 && $go<=19)
{
if(is_file("bazyaccess/$go.php")) include "bazyaccess/$go.php"; 
else echo "<br />Nie ma takiej strony :-("; 
}
else
	if($go>=20 && $go<=26)
{
if(is_file("cwiczeniaphp/$go.php")) include "cwiczeniaphp/$go.php"; 
else echo "<br />Nie ma takiej strony :-("; 
}
} 
else include "bmw.php"; 
?> 
  