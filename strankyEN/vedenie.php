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
      <li><a href='../strankySK/vedenie.php'><img src='subory/Flag_of_Slovakia.svg.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
      <li><a href=' '><img src='subory/gb.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>
  <br><div class = "texty">
  <h1 class="nad">Head of the Institute</h1>
<b>Director of the Institute</b> prof. Ing. Mikuláš Huba, PhD<br>
<b>Deputy Director of the Institute for Scientific Research</b> prof. Ing. Justin Murin, DrSc. <br>
<b>Deputy Director of Institute for Institute Development</b> prof. Ing. Štefan Kozák, PhD<br>
<b>Deputy Director of the Institute for Educational Activities</b> doc. Ing. Katarina Žakova, PhD<br>
</div>
<br>
<div class = "texty">

<h3>DEPARTMENTS OF THE AUTOMOTIVE MECHATRONICS INSTITUTE </h3><br>
<b>Department of Applied Mechanics and Mechatronics (OAMM)</b><br>
    <b> Supervisor:</b> prof. Ing. Justin Murin, DrSc. <br>
     <b>Deputy:</b> doc. Ing. Vladimir Kutiš, PhD<br>
<br>
<b>Information, Communication and Control Systems (OIKR)</b><br>
     <b>Supervisor:</b> doc. Ing. Danica Rosinová, PhD<br>
     <b>Deputy:</b> doc. Ing. Katarina Žakova, PhD<br>
<br>
<b>Electronics, Microcomputer and PLC Systems (OEMP)</b><br>
     <b>Supervisor:</b> prof. Ing. Štefan Kozák, PhD<br>
     <b>Representative:</b> Ing. Richard Balogh, PhD<br>
<br>
<b>Department of E-Mobility, Automation and Drives (OEAP)</b> <br>
     <b>Supervisor:</b> prof. Ing. Mikuláš Huba, PhD<br>
     <b>Representative:</b> prof. Ing. Viktor Ferencey, CSc<br>

<br>
  Organizational rules: <a href="subory/organizacny_poriadok.pdf" download="Organizacny_poriadok">dowmload</a>
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
