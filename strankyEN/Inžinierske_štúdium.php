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
      <li><a href='../strankySK/Inžinierske_štúdium.php'><img src='subory/Flag_of_Slovakia.svg.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
      <li><a href=' '><img src='subory/gb.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>
  <br>
   <h1 class = "nad">Engineering study</h1>
 <div class= "texty">

  <h2 class="zvirazni2">General information</h2>
<strong> Engineering Study Schedule </strong> <br> <br>

<b>Winter semester</b>  <br>
<b>Start of Teaching in the semester</b>  19. 09. 2016 <br>
<b>Holiday</b><br> 31. 10. 2016 <br>
18. 11. 2016 <br>
23. 12. 2016 - 01. 01. 2017 <br>
<b>Beginning of the Exam Period</b>  02. 01. 2017 <br>
<b>Completion of the exam period</b>  February 12, 2017 <br> <br>
<b>Summer semester</b>  <br>
<b>Beginning of the course in the semester</b>  13 February 2017 <br>
<b>Holiday</b>  14. 04. 2017 - 18. 04. 2017 <br>
<b>Start of the test period</b>  22 May 2017 <br>
<b>Completion of the exam period</b>  02.07.2017 <br> <br>
<b>Conclusion of Engineering Study</b>  <br>
A<b>ssignment of diploma thesis</b>  13. 02. 2017 <br>
<b>Submission of diploma thesis</b>  19. 05. 2017 <br>
<b>State Exams of Engineering Study</b>  June 13, 2017 - June 16, 2017 <br>
<b>Promotion Date</b> July 10, 2017 - July 14, 2017 <br> <br>

Study plan 2016-2017: <a href="subory/SP20162017i.pdf" download="Študijný_plán">dowmload</a><br>
Study Regulations: <a href="subory/studijny_poriadok.pdf" download="Študijný_poriadok">dowmload</a><br>
Classification scale: <a href="subory/klasifikacna_stupnica.pdf" download="Klasifikačná_stupnica">dowmload</a><br>


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
