<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Historia</title>
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
      <li><a href='../strankyEN/historia.php'><img src='subory/gb.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>
  
  <br>
  <h1 class ="nad">História</h1>
 <div class ="texty">
Ústav automobilovej mechatroniky bol zriadený k 1. júlu 2013 ako pedagogické a vedecko-výskumné pracovisko Fakulty elektrotechniky a informatiky STU v Bratislave. Zriadenie ústavu Automobilovej mechatroniky bolo logickým vyústením zámerov  vedenia Fakulty elektrotechniky a informatiky STU v Bratislave vytvoriť taký ústav, ktorý by zohľadňoval súčasné požiadavky a potreby automobilového priemyslu  na  Slovensku  s  hlavným  cieľom  pripravovať  absolventov bakalárskeho a  inžinierského štúdia pre oblasť automobilovej mechatroniky.
V súčasnosti Ústav automobilovej mechatroniky zabezpečuje výskum, vývoj a vzdelávanie  vo viacerých  oblastiach aplikovanej mechatroniky so špeciálnym dôrazom vo sfére  automobilovej mechatroniky  a  mechatronických  systémov  na  základe  integrácie  a synergie mechanických, elektronických,   informačných,   komunikačných   a   riadiacich   technológií   do   komplexných mechatronických systémov automobilov.
Ústav garantuje študijné programy vo všetkých stupňoch štúdia akreditovaných na STU v Bratislave. Pre  širokospektrálnu  oblasť  výučby  a  výskumu  zabezpečuje  integráciu  výskumníkov  a pedagógov  z  FEI STU do výskumného a výučbového procesu v jednotlivých študijných programoch.
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
