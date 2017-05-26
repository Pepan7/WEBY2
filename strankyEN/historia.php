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
      <li><a href='../strankySK/historia.php'><img src='subory/Flag_of_Slovakia.svg.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
      <li><a href=' '><img src='subory/gb.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>
  
  <br>
    <h1 class ="nad">History</h1>
 <div class ="texty">
The Institute of Automobile Mechatronics was established on July 1, 2013 as a pedagogical and scientific research unit of the Faculty of Electrical Engineering and Informatics of the Slovak Technical University in Bratislava. The establishment of the Institute of Automobile Mechatronics was a logical consequence of the intention of the Faculty of Electrical Engineering and Computer Science of the STU in Bratislava to establish an institute that would take into account the current requirements and needs of the automotive industry in Slovakia with the main aim of preparing bachelor and engineering graduates for automotive mechatronics.
At present, the Institute of Automobile Mechatronics provides research, development and education in several areas of applied mechatronics with special emphasis in automotive mechatronics and mechatronic systems based on the integration and synergy of mechanical, electronic, information, communication and control technologies into complex mechatronic car systems.
The Institute guarantees study programs at all levels of study accredited at STU in Bratislava. For the wide-area teaching and research area, it ensures the integration of researchers and teachers from the FEI STU into the research and teaching process in the individual study programs.
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
