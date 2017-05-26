<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Menu</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="../javascript/menu.js"></script>
      <link rel="stylesheet" href="../css/ostatne.css">

      <link rel="stylesheet" href="../css/menu.css">
</head>

<body>

<?php
$text="";
$myfile = fopen("menu.txt", "r") or die("Unable to open file!");
$text=fread($myfile,filesize("menu.txt"));
fclose($myfile);
$text .= "<ul class='nav navbar-nav navbar-right'>
      <li><a href=' '><img src='subory/Flag_of_Slovakia.svg.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
      <li><a href='../strankyEN/vedenie.php'><img src='subory/gb.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>
  <br><div class = "texty">

  <h1 class = "nad">Vedenie ústavu</h1>
 <b>Riaditeľ ústavu </b>							prof. Ing. Mikuláš Huba, PhD.<br>
<b>Zástupca riaditeľa ústavu pre vedeckú činnosť</b>			prof. Ing. Justín Murín, DrSc.<br>
<b>Zástupca riaditeľa ústavu pre rozvoj ústavu</b>			prof. Ing. Štefan Kozák, PhD.<br>
<b>Zástupca riaditeľa ústavu pre pedagogickú činnosť</b>		doc. Ing. Katarína Žáková, PhD.<br>
</div>
<br>

<div class = "texty">

<h3>ODDELENIA ÚSTAVU AUTOMOBILOVEJ MECHATRONIKY</h3><br>

<b>Oddelenie aplikovanej mechaniky a mechatroniky (OAMM)</b><br>
    <b>Vedúci: </b>	prof. Ing. Justín Murín, DrSc.<br>
    <b>Zástupca:</b> 	doc. Ing. Vladimír Kutiš, PhD.<br>
<br>
<b>Oddelenie informačných, komunikačných a riadiacich systémov (OIKR)</b><br>
    <b>Vedúci:</b> 	doc. Ing. Danica Rosinová, PhD.<br>
    <b>Zástupca:</b> 	doc. Ing. Katarína Žáková, PhD.<br>
<br>
<b>Oddelenie elektroniky, mikropočítačov a PLC systémov (OEMP)</b><br>
    <b>Vedúci:</b> 	prof. Ing. Štefan Kozák, PhD.<br>
    <b>Zástupca:</b> 	Ing. Richard Balogh, PhD.<br>
<br>
<b>Oddelenie E-mobility, automatizácie a pohonov (OEAP)</b><br>
    <b>Vedúci:</b> 	prof. Ing. Mikuláš Huba, PhD.<br>
    <b>Zástupca: </b>	prof. Ing. Viktor Ferencey, CSc.<br>


<br>
  Organizačný poriadok: <a href="subory/organizacny_poriadok.pdf" download="Organizacny_poriadok">dowmload</a>
</div>
  <?php
$text="";

$myfile = fopen("footer.txt", "r") or die("Unable to open file!");
$text=fread($myfile,filesize("footer.txt"));
fclose($myfile);
echo $text; 
?>
  
</body>
</html>
