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
      <li><a href='../strankyEN/3D_LED_kocka.php'><img src='subory/gb.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>
  <br>
  <h1 class = "nad">3D LED kocka </h1>
 
 <div class= "texty">
  
Zobrazená kocka bola vytvorená v rámci diplomovej práce. Bol k nej vytvorený vzdialený prístup cez Internet, čo umožňuje užívateľovi vkladať do kocky vlastný kód, ktorý ovplyvňuje jej správanie sa.<br>
<br>
    <img src="subory/kocka.jpg" class =" obrazok" alt="3D LED Kocka" width="100%" height="100%">
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
