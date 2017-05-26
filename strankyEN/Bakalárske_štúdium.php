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
      <li><a href='../strankySK/Bakalárske_štúdium.php'><img src='subory/Flag_of_Slovakia.svg.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
      <li><a href=' '><img src='subory/gb.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>
  <br>
 <h1 class = "nad">Bachelor's degree</h1>
 <div class = "texty">

  <h2 class="zvirazni2">General information</h2>
      <strong>Bachelor study schedule</strong><br><br>
<b>Winter semester </b><br>
<b>Start of Teaching in the semester</b> 19. 09. 2016 <br>
<b>Holiday</b><br>
31. 10. 2016 <br>
18. 11. 2016 <br>
23. 12. 2016 - 01. 01. 2017 <br>
<b>Beginning of the Exam Period</b> 02. 01. 2017 <br>
<b>Completion of the exam period</b> February 12, 2017 <br> <br>
<b>Summer semester</b> <br>
<b>Beginning of the Teaching in the semester</b> 13 February 2017 <br>
<b>Holiday</b> 14. 04. 2017 - 18. 04. 2017 <br>
<b>Start of the test period</b> 22 May 2017 <br>
<b>Completion of the exam period</b> 02.07.2017 <br> <br>
<b>Bachelor's study conclusion</b> <br>
<b>Final thesis assignment</b> 13. 02. 2017 <br>
<b>Submitting a final thesis</b> 19. 05. 2017 <br>
<b>State Exams of Bachelor Studies</b> 06. 07. 2017 - 07. 07. 2017 <br>
<b>Graduation of bachelor study graduation</b> 14. 09. 2016 <br> <br>
Study plan 2016-2017: <a href="subory/SP20162017b.pdf" download="Študijný_plán">dowmload</a><br>
Study Regulations: <a href="subory/studijny_poriadok.pdf" download="Študijný_poriadok">dowmload</a><br>
Classification scale: <a href="subory/klasifikacna_stupnica.pdf" download="Klasifikačná_stupnica">dowmload</a><br>
<br>
<h2 class = "zvirazni2"> Bachelor Thesis </h2>
<P class = "zvirazni2"> Instructions </p>
<Strong> Exit BP1, BP2, BZP </strong> <br> <br>
<b>Bachelor Project 1 </b><br>
<b>Responsible: </b>doc. Ing. Vladimir Kutiš, PhD<br>
<b>Course rating:</b> graded credit<br>
<b>Standard fill time:</b> 3rd year. Bachelor study, winter semester <br>
To obtain a classified credit, the student must submit the technical documentation to his / her supervisor's work within the specified scope no later than January 20th of the year. Work is evaluated by the supervisor.
<br><br><b>Bachelor Project 2 </b><br>
<b>Responsible:</b> doc. Ing. Vladimir Kutiš, PhD<br>
<b>Course rating:</b> graded credit<br>
<b>Standard fill time: </b>3rd year. Bachelor study, summer semester <br>
In order to obtain a classified credit, the student must submit a diploma paper by the date specified in the FEI STU study schedule:
<br>1. in electronic form to AIS <br>
2. in printed form in 2 pieces Ing. Sedlar? (A803) <br>
Or submit the Technical Documentation to its senior work within the specified scope no later than 20 June of that year. hotels
Project leader evaluates project work <br> <br> <br>
<b>Bachelor Thesis <br></b>
<b>Responsible: </b>doc. Ing. Vladimir Kutiš, PhD<br>
<b>Course rating:</b> graded credit<br>
<b>Standard fill time:</b> 3rd year. Bachelor study, summer semester <br>
To obtain the exam, the student must defend the topic of his diploma thesis before the state commission, which also gives a defense mark.
<P class = "zvirazni2"> Free themes </p>
Retrieve AIS themes using CURL (this is a 4th assignment job during the semester). <br>

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
