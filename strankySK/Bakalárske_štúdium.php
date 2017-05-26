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
      <li><a href='../strankyEN/Bakalárske_štúdium.php'><img src='subory/gb.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>
  <br>
  <h1 class = "nad">Bakalárske štúdium</h1>
 <div class = "texty">

  <h2 class="zvirazni2">Všeobecné informácie</h2>
      <strong>Harmonogram bakalárskeho štúdia</strong><br><br>
<b>Zimný semester</b><br>
<b>Začiatok výučby v semestri</b>			19. 09. 2016<br>
<b>Prázdniny</b><br>					31. 10. 2016<br>
18. 11. 2016<br>
23. 12. 2016 – 01. 01. 2017<br>
<b>Začiatok skúškového obdobia	</b>		02. 01. 2017<br>
<b>Ukončenie skúškového obdobia	</b>		12. 02. 2017<br><br>
<b>Letný semester</b><br>
<b>Začiatok výučby v semestri</b>			13. 02. 2017<br>
<b>Prázdniny</b>					14. 04. 2017 – 18. 04. 2017<br>
<b>Začiatok skúškového obdobia</b>			22. 05. 2017<br>
<b>Ukončenie skúškového obdobia	</b>		02. 07. 2017<br><br>
<b>Záver bakalárskeho štúdia</b><br>
<b>Zadanie záverečnej práce</b>			13. 02. 2017<br>
<b>Odovzdanie záverečnej práce</b>			19. 05. 2017<br>
<b>Štátne skúšky bakalárskeho štúdia</b>		06. 07. 2017 – 07. 07. 2017<br>
<b>Promócie absolventov bakalárskeho štúdia </b>	14. 09. 2016<br><br>
Študijný plán 2016-2017: <a href="subory/SP20162017b.pdf" download="Študijný_plán">dowmload</a><br>
Študijný poriadok: <a href="subory/studijny_poriadok.pdf" download="Študijný_poriadok">dowmload</a><br>
Klasifikačná stupnica: <a href="subory/klasifikacna_stupnica.pdf" download="Klasifikačná_stupnica">dowmload</a><br>
<br>
<h2 class="zvirazni2">Bakalárske práce</h2>
<strong>Ukončovanie predmetov BP1, BP2, BZP</strong><br><br>
<b>Bakalársky projekt 1</b><br>
<b>Zodpovedný: </b>			doc. Ing. Vladimír Kutiš, PhD.<br>
<b>Hodnotenie predmetu:</b> 		klasifikovaný zápočet<br>
<b>Štandardný čas plnenia:</b> 	3. roč. bakalárskeho štúdia, zimný semester<br>
Pre získanie klasifikovaného zápočtu musí študent odovzdať technickú dokumentáciu svojmu vedúcemu práce v nim špecifikovanom rozsahu najneskôr do 20.januára daného roku. Prácu na projekte hodnotí vedúci práce.
<br><b>Bakalársky projekt 2</b><br>
<b>Zodpovedný: 	</b>		doc. Ing. Vladimír Kutiš, PhD.<br>
<b>Hodnotenie predmetu: </b>		klasifikovaný zápočet<br>
<b>Štandardný čas plnenia:</b> 	3. roč. bakalárskeho štúdia, letný semester<br>
Pre získanie klasifikovaného zápočtu musí študent do dátumu špecifikovanom v harmonograme štúdia FEI STU odovzdať diplomovú prácu:<br>
1.	v elektronickej forme do AIS <br>
2.	v tlačenej forme v počte 2 kusy Ing. Sedlárovi? (A803) <br>
alebo odovzdať technickú dokumentáciu svojmu vedúcemu práce v nim špecifikovanom rozsahu najneskôr do 20.júna daného roku. <br>
Prácu na projekte hodnotí vedúci práce.<br><br>
<b>Bakalárska záverečná práca</b><br>
<b>Zodpovedný:</b> 			doc. Ing. Vladimír Kutiš, PhD.<br>
<b>Hodnotenie predmetu:</b> 		klasifikovaný zápočet<br>
<b>Štandardný čas plnenia:</b> 	3. roč. bakalárskeho štúdia, letný semester<br>
Pre získanie skúšky musí študent obhájiť tému svojej diplomovej práce pred štátnicovou komisiou, ktorá zároveň udeľuje známku za obhajobu.<br>
<p class="zvirazni2">Voľné témy</p>
Načítať témy z AISu pomocou CURL-u 	(ide o úlohu zo 4. zadania počas semestra).<br>

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
