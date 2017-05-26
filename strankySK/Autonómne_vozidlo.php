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

<body>
<?php
$text="";
$myfile = fopen("menu.txt", "r") or die("Unable to open file!");
$text=fread($myfile,filesize("menu.txt"));
fclose($myfile);
$text .= "<ul class='nav navbar-nav navbar-right'>
      <li><a href=' '><img src='subory/Flag_of_Slovakia.svg.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
      <li><a href='../strankyEN/Autonómne_vozidlo.php'><img src='subory/gb.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>
  <br>
  <h1 class = "nad">Autonómne vozidlo 6×6</h1>
 
 <div class = "texty">
	<img src="subory/Render_ISO.jpg"  alt="Vozidlo" width="30%" height="30%">
    <img src="subory/dve_vozidla.png"  alt="Vozidlo" width="50%" height="50%"><br>
  <p>Vytvore­nie mod­elu autonóm­neho vozidla 6×6 so soft­vérovým riadením smeru jazdy</p>
	
	<h2>Technické údaje</h2>
<br>
    <b>Hmot­nosť:</b> 12,5kg<br>
    <b>Rozmery (d x š x v):</b> 614 x 495 x 269 mm<br>
   <b>Spô­sob ovlá­da­nia:</b> Diaľkové ovlá­danie, riadené mikroprocesorom<br>
    <b>Pohon:</b> 6×6, každé koleso samostatne riadené BLDC elek­tro­mo­torom<br>
    <b>Celkový výkon elek­tro­mo­torov:</b> 6x 175W<br>
    <b>Napá­janie motorov:</b> 6x DC/​AC menič<br>
    <b>Zdroj el. prúdu:</b> 4x Li-​Pol akumulátory<br>
    <b>Celková kapacita aku­mulá­torov:</b> 13,2 Ah<br>

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
