<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Kontakt</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="../javascript/menu.js"></script>
      <link rel="stylesheet" href="../css/menu.css">
</head>

<body>

<?php
$text="";
$myfile = fopen("menu.txt", "r") or die("Unable to open file!");
$text=fread($myfile,filesize("menu.txt"));
fclose($myfile);
$text .= "<ul class='nav navbar-nav navbar-right'>
      <li><a href=''><img src='subory/Flag_of_Slovakia.svg.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
      <li><a href='../strankyEN/kontakt.php'><img src='subory/gb.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>
  <br>
  <h1>Kontakt</h1>
 
 <div>
Ústav automobilovej mechatroniky, FEI STU,<br>
Ilkovičova 3,<br>
812 19 Bratislava,<br>
Slovenská republika<br>
+421 260 291 598<br>
+421 265 429 734<br>
<br>
Katarína Kermietová<br>
Miestnosť: D 116
 </div>
 
 <div id="googleMap" style="width:500px;height:300px;"></div>
 <script type="text/javascript" src="../javascript/mapa.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYyoqwB9DMU8p2Uygums7jhBoDx2TimH8&callback=myMap"></script>
	<?php
$text="";

$myfile = fopen("footer.txt", "r") or die("Unable to open file!");
$text=fread($myfile,filesize("footer.txt"));
fclose($myfile);
echo $text; 
?>
 </body>
</html>
