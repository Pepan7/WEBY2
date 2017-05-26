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
      <li><a href='../strankyEN/OAMM.php'><img src='subory/gb.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>
  <br> <div class="texty">


  <h3 >Oddelenie aplikovanej mechaniky a mechatroniky (OAMM)</h3>

   <b> Vedúci:</b> 	prof. Ing. Justín Murín, DrSc.<br>
    <b>Zástupca:</b> 	doc. Ing. Vladimír Kutiš, PhD.<br>
<br>
Oddelenie v rámci pedagogiky zabezpečuje v bakalárskom stupni ŠP výučbu predmetov s hlavným dôrazom na mechaniku a mechatronické prvky. V inžinierskom stupni ŠP zabezpečuje výučbu predmetov s dôrazom na simuláciu a modelovanie mechanických a mechatronických systémov tak z pohľadu mechaniky a dynamiky, ako aj z pohľadu multifyzikálneho previazania jednotlivých fyzikálnych domén.
Členovia oddelenia sa venujú formulácii nových matematických postupov a metód, ktoré sa používajú v multifyzikálnych analýzach napr. na opis funkcionálne gradovaných materiálov (FGM), v dynamických analýzach mechatronických a MEMS systémov, ako aj na opis piezoelektrických prvkov.
Členovia oddelenia využívajú moderné SW prostriedky, ako sú ANSYS, Catia a MSC.ADAMS na návrh, analýzu a optimalizáciu jednotlivých komponentov, ako aj celých subsystémov mechatronických prvkov.
<br>
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
