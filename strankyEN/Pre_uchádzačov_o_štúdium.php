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
      <li><a href='../strankySK/Pre_uchádzačov_o_štúdium.php'><img src='subory/Flag_of_Slovakia.svg.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
      <li><a href=' '><img src='subory/gb.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>
  
<h1 class ="nad"> Info</h1>
<br>

<div class = "texty">

<h3>Bachelor's degree</h3>

<p class="zviraznit">The information will be delivered later.</p>
<br>
A complete study plan for the academic year 2017-2018: <a href="subory/SP20172018b.pdf" download="Kompletný_študijný_plán">dowmload</a>
<br>
Learn more at <a href="http://www.mechatronika.cool">http://www.mechatronika.cool</a>
 </div>
 <br>
  
    <div class = "texty">

  
<h3>Engineering study</h3>
<p class="zviraznit">The information will be delivered later.</p>
<br>
<b>Why to study at our institute?</b> <br>
• the ability to gain knowledge that is workable in practice, <br>
• smaller groups of students, <br>
• Possibility to negotiate a theme for a diploma with a selected teacher based on own preferences, <br>
• Possibility to solve the diploma thesis and thus what everyone is interested in, up to 3 semesters, <br>
• for excellent students the opportunity to study with a distance method, <br>
• for the Bachelor of the FEI STU bachelor study, the accepted admission exam, <br>
• Enhance students' awareness of the web site in good time<br>
<b>Will not I have problems when I did not study mechatronics at baccalaureate?</b><br>
• Mechatronics is an interdisciplinary study, so everyone should be here. In the first semester of engineering studies, an automation equalizer is being prepared for students who have not previously studied mechatronics. <br>
<br>
<b>Study program - 1st year </b><br>
<b>Winter semester</b> <br>
• CAE Mechatronic Systems - Creating Virtual Dynamic Models and Their Simulation <br>
• Finite Element Method - Modeling and Analysis of Mechatronic Elements and Systems<br>
• Optimization of processes in mechatronics - optimization tasks and methods in engineering applications <br>
• Development software environment for mechatronic systems - microprocessor programming<br>
• Compulsory elective subject
<br><b>Summer semester</b> <br>
• Diploma project 1 <br>
• Numerical control methods - Design of control circuits for mechatronic systems models<br>
• Multiphysical processes in mechatronics - modeling of thermal, thermoelastic, thermoelectric and piezoelectric systems <br>
• Advanced Information Technologies - Client-Server Application, Mechatronic Systems Management in the Internet Environment, Internet Affairs (IoT), Industry 4.0 <br>
• Compulsory elective subject<br>
<br>
<b>Possible PVP for electronics buyers </b><br>
Intelligent Mechatronic Systems - Implementation of Computational and Artificial Intelligence Methods for Mechatronic Systems <br>
MEMS - intelligent sensors and actuators - state-of-the-art sensors used not only in the automotive industry (accelerometers, gyroscopes, CCD sensors), and signal processing by nested microcomputers <br>
<br>
<b>Possible PVP for car buyers </b><br>
Transmission systems of cars and electric vehicles - transmission mechanisms of cars and electric cars <br>
Propulsion systems and sources in electric cars - modeling and simulation of the traction and power system of the electric car <br>
<br>
<b>Possible PVP for IT Prospectors </b><br>
Intelligent Mechatronic Systems - Implementation of Computational and Artificial Intelligence Methods for Mechatronic Systems <br>
Selected chapters of automatic control for mechatronics - equalizing subject from automation <br>
MEMS - intelligent sensors and actuators - state-of-the-art sensors used not only in the automotive industry (accelerometers, gyroscopes, CCD sensors), and signal processing by nested microcomputers <br>
<br>
A complete study plan for the academic year 2017-2018: <a href="subory/SP20172018i.pdf" download="Kompletný_študijný_plán">dowmload</a><br>
<br>
<b>Admission Exams for Engineering Study</b> June 28, 2017 at 10:00 am in D124 <br>
<b>Reception commission</b><br> prof. Ing. Mikuláš Huba, PhD. (Chairman) <br>
prof. Ing. Justin Murin, DrSc. (chairman)<br>
prof. Ing. Viktor Ferencey, PhD<br>
prof. Ing. Štefan Kozák, PhD<br>
doc. Ing. Katarina Žakova, PhD<br>
<br>
Learn more at <a href="http://www.mechatronika.cool">http://www.mechatronika.cool</a>
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
