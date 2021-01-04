<html lang="hu">
<head>
	<meta charset="utf-8">
  	<title>S�ndorn� Feke R�ka - Web�ruh�za</title>
    <link href="taki.ICO" rel="shortcut icon" >
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css.css">
  	<link rel="stylesheet" href="bootstrap.min.css">
  	<script src="jquery.min.js"></script>
  	<script src="bootstrap.min.js"></script>
	<script type="text/javascript" src="oldal_tetejere_nyil.js"></script>
</head>
<body>
<div class="container">
<ul class="nav nav-tabs">
			<li class="nav-item">
			  <a href="http://users.atw.hu/fekereka/" target="_self" class="nav-link active">Home</a>
			</li>
			<li class="nav-item">
			  <a href="http://users.atw.hu/fekereka/webaruhaz/" target="_self" class="nav-link">Web�ruh�z</a>
			</li>
			<li class="nav-item">
			  <a href="https://atw.hu/" target="_blank">atw.hu</a>
			</li>
			<li class="nav-item">
			  <a href="https://tavoktatas.kando.takinfo-taki.hu/">tavoktatas.kando.takinfo-taki.hu</a>
			</li>
			<li class="nav-item">
			  <a href="http://kkszki.hu/" target="_blank" class="nav-link">kkszki.hu</a>
			</li>
			<li class="nav-item">
			  <a href="https://mszc-kando.e-kreta.hu/Adminisztracio/Login">Kr�ta</a>
			</li>
			<li class="nav-item">
			  <a href="https://github.com/">GitHub </a>
			</li>
			<li class="nav-item">
			  <a href="https://www.w3schools.com/">w3schools.com</a>
			</li>
		</ul>
	</div>	
<div class="container">
	<h2><img alt="" src="taki.ICO">&nbsp;<img alt="" src="logo_32.jpg">&nbsp; S�ndorn� Feke R�ka - Web�ruh�za</h2>
	<p>
		Miskolci SZC Kand� K�lm�n Informatikai Technikum
	</p>                  
	<ul class="nav nav-pills" role="tablist">
		<li><a href="http://users.atw.hu/fekereka/webaruhaz/">Web�ruh�z</a></li> 
		<li class="active"><a href="http://users.atw.hu/fekereka/webaruhaz/minden.php">Minden term�k</a></li> 
		<li><a href="http://users.atw.hu/fekereka/webaruhaz/alaplapok.php">Alaplapok</a></li>
		<li><a href="http://users.atw.hu/fekereka/webaruhaz/monitorok.php">Monitorok</a></li>
		<li><a href="http://users.atw.hu/fekereka/webaruhaz/szamitogepek.php">Sz�m�t�g�pek</a></li>
		<li><a href="http://users.atw.hu/fekereka/webaruhaz/videokartyak.php">Vide�k�rty�k</a></li>
		<li><a href="http://users.atw.hu/fekereka/webaruhaz/memoriak.php">Mem�ri�k</a></li>
		<li><a href="http://users.atw.hu/fekereka/webaruhaz/merevlemezek.php">Merevlemezek</a></li>
		<li><a href="http://users.atw.hu/fekereka/webaruhaz/kereses.php">Keres�s</a></li>
	</ul>


<hr>


<?php
// kapcsol�d�s az adatb�zishoz
$kapcsolat = mysql_connect("127.0.0.1", "fekereka", "MarciDani24");
if (!$kapcsolat) die("Nem siker�lt kapcsol�dni az adatb�zishoz!");
mysql_select_db("fekereka", $kapcsolat) or die("Nem siker�lt kiv�lasztani az adatb�zist!");	

// sql lek�rdez�sek
$sql = "SELECT * FROM webaruhaz";

// A lek�rdez�s eredm�nye
$eredmeny = mysql_query($sql, $kapcsolat) or die(print("Nem tudtam az utas�t�st v�grehajtani! A hiba oka: ".mysql_error()));

//$sor = mysql_fetch_array($eredmeny, MYSQL_ASSOC);
print("<H2>A web�ruh�z tartalma</H2>");
print("<table class=\"table table-condensed table table-striped\">
    <thead>
		<tr>");
			$sor = mysql_fetch_array($eredmeny,MYSQL_ASSOC);
			while (list($k, $v) = each($sor))
			{
				print("<th style= \"width: 2%\">$k</th>");
			}		
		print("</tr>
    </thead>
	
    <tbody>");

	$eredmeny1 = mysql_query($sql, $kapcsolat) or die(print("Nem tudtam az utas�t�st v�grehajtani! A hiba oka: ".mysql_error()));
	while ($sor1 = mysql_fetch_array($eredmeny1,MYSQL_ASSOC))
		{
			print ("<tr>");
			$mezo_szamlalo=0;
			foreach ($sor1 as $i=>$ertek)
			{
				$mezo_szamlalo++;
				if ($mezo_szamlalo < 4) 
					print("<td>$ertek</td>");
				if ($mezo_szamlalo == 4)
					print("<td>$ertek Ft</td>");
				if ($mezo_szamlalo == 5)
					print("<td><img src=\"fotok/$ertek\" alt=\"\" height=\"200\"></td>");
			}
			print("</tr>");
		}
		
print("</table>\n");
mysql_close($kapcsolat);
?>

<hr>
</div>
</body>
</html>
