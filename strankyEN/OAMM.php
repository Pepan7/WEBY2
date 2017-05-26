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
      <li><a href='../strankySK/OAMM.php'><img src='subory/Flag_of_Slovakia.svg.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
      <li><a href=' '><img src='subory/gb.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>
  <br> <div class="texty">
  <h3>Department of Applied Mechanics and Mechatronics (OAMM)</h3>
   <b> Supervisor:</b> prof. Ing. Justin Murin, DrSc. <br>
    <b>Deputy: doc.</b> Ing. Vladimir Kutiš, PhD<br>
<br>
The Department of Pedagogy provides in the Bachelor's degree program the teaching of subjects with a major emphasis on mechanics and mechatronic elements. At the engineering level, ŠP ensures the teaching of subjects with emphasis on simulation and modeling of mechanical and mechatronic systems, both in terms of mechanics and dynamics, as well as from the point of view of multiphysical interconnection of individual physical domains.
The members of the department are devoted to the formulation of new mathematical procedures and methods used in multiphysical analyzes, (FGM), dynamic analyzes of mechatronic and MEMS systems as well as a description of piezoelectric elements.
The members of the department use modern SW tools such as ANSYS, Catia and MSC.ADAMS to design, analyze and optimize individual components, as well as entire subsystems of mechatronic elements.
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
