<head>
<meta name="keywords" content="Strona MySQL" />
<link href="style.css" rel="stylesheet" type="text/css"> 
<meta charset="utf-8">
<link rel="shortcut icon" href="favicon.ico" />
<script language="JavaScript" type="text/javascript">
function zegar(){
    d = new Date();
    var h=d.getHours(),m=d.getMinutes(),s=d.getSeconds(),r;
    r=(h<10?"0"+h:h)+":"+(m<10?"0"+m:m)+":"+(s<10?"0"+s:s);
    
    document.getElementById('czas').innerHTML=r;
    setTimeout("zegar()", 1000);
}
</script>
<title>Strona MySQL</title>
</head>
<body onload="javascript:zegar()">
<div id="strona">
<div id="naglowek">
<figure>
	<h1>PHP</h1>
	<h1>PHP</h1>
	<h1>PHP</h1>
	<h1>PHP</h1>
	<h1>PHP</h1>
	<h1>PHP</h1>
	<h1>PHP</h1>
	<h1>PHP</h1>
	<h1>PHP</h1>
	<h1>PHP</h1>
	<h1>PHP</h1>
	<h1>PHP</h1>
	<h1>PHP</h1>

</figure>  
</div>
<div id="menu_lewe">
<?php
include("zawartosc/lewe.php")
?>
</div>
<div id="menu_prawe">
<?php
include("zawartosc/prawe.php")
?>
<?php
include("zawartosc/media.php")
?>
</div>
<div id="srodek">
<?php
include("zawartosc/srodek.php")
?>
</div>
<div id="stopka">
<?php
include("zawartosc/ikony.php")
?>
<div id="copy">
<p class="o">Copyright © Dawid Hirniak™</p>
</div>
</div>
</div>
</body>