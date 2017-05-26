<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css/pokus.css">
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
      <li><a href='../strankySK/index.php'><img src='subory/Flag_of_Slovakia.svg.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
      <li><a href=' '><img src='subory/gb.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>

<h1 class = "nad">Intro</h1>

<div class="uvod" > 
<div> 
      <p><strong>Bachelor and Master Thesis - Design your own subject</strong></p>
      <span> We offer a wide variety of bachelor and diploma theses.
Is not any of the topics you offer? Write us to the form,
Which area would interest you and advise you who to turn to.</span>
  
</div><br>
<div> 
      <p><strong>Promotion of the Institute of Automobile Mechatronics</strong></p>
      <span>Check out our promotional site www.mechatronika.cool and video
		Our institute and for those interested in studying Automotive Mechatronics and Applied
		Mechatronics and electromobility.</span>
</div><br>
<div>


      <p><strong>6.-9.6.2017 - 21st International Conference on Process Control, Štrbské Pleso</strong></p>
      <span>The objective is to bring together theoretical experts and control 
			systems specialists, to evaluate the new possibilities of techniques, 
			design procedures and instruments in process control projects.</span>
 </div><br>
</div>
</div>
<div ="pravy"> 

      <div class="nevid" id="pop1"><iframe width="560" height="315" src="https://www.youtube.com/embed/vCYq4JspSCI" frameborder="0" allowfullscreen></iframe></div>
    </div>



<div class="ha">
<p><b>NEW EVENTS</b></p>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3"> 
      <p><strong>Bachelor and engineer</strong></p>
      <div class="nevid" id="pop1"><div class="dolava">Take a look at the latest information on state examinations and bachelor's and diploma theses</div></div>
    </div>
	<div class="col-sm-3"> 
      <p><strong>Assessment of SWOT in the Mechatronics section</strong></p>
      <div class="nevid" id="pop1"><div class="dolava">At FEI STU in Bratislava, on April 27, 2017, a study of students' scientific and professional activities (ŠVOČ)</div></div>
    </div>
	<div class="col-sm-3"> 
      <p><strong>Summer student internship in Trenčín - Adient Slovakia</strong></p>
      <div class="nevid" id="pop1"><div class="dolava">We are looking for 12 creative students in the development center - the internship is running from 3.7.2017 to 11.8.2017</div></div>
    </div>
	<div class="col-sm-3"> 
      <p><strong>Job vacancy - Simulation engineer</strong></p>
      <div class="nevid" id="pop1"><div class="dolava">This is an interesting position in Continental Púchov for the ending students. More info in the news.</div></div>
    </div>
  </div>
</div><br>
</div>

<div class="ha">
<p><b>PRIORITIES AND LETTERS</b></p>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3"> 
      <p><strong>Bachelor and engineer</strong></p>
      <div class="nevid" id="pop1"><div class="dolava">Take a look at the latest information on state examinations and bachelor's and diploma theses</div></div>
    </div>
	<div class="col-sm-3"> 
      <p><strong>Summer student internship in Trenčín - Adient Slovakia</strong></p>
      <div class="nevid" id="pop1"><div class="dolava">We are looking for 12 creative students in the development center - the internship is running from 3.7.2017 to 11.8.2017</div></div>
    </div>
	<div class="col-sm-3"> 
      <p><strong>Job vacancy - Simulation engineer</strong></p>
      <div class="nevid" id="pop1"><div class="dolava">This is an interesting position in Continental Púchov for the ending students. More info in the news.</div></div>
    </div>
	<div class="col-sm-3"> 
      <p><strong>27.4.2017 - ŠVOČ - schedule of the Mechatronics section</strong></p>
      <div class="nevid" id="pop1"><div class="dolava">On 27 April 2017, the SVOČ will be held - the section schedule in the continuation of the news</div></div>
    </div>
  </div>
</div><br>
</div>

<div class="ha">
<p><b>PROPAGAČNÉ AKTIVITY</b></p>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3"> 
      <p><strong>Success in CINEAMA 2017</strong></p>
      <div class="nevid" id="pop1"><div class="dolava">Our youngsters Oto Haffner and Erik Kučera succeeded in the CINEAMA 2017 amateur competition</div></div>
    </div>
	<div class="col-sm-3"> 
      <p><strong>Photo Gallery - Open Door Day - 7.2.2017</strong></p>
      <div class="nevid" id="pop1"><div class="dolava">Take a look at the summary and photo gallery from our DOD, which visited about 100 people</div></div>
    </div>
	<div class="col-sm-3"> 
      <p><strong>Open Door Day - 7.2.2017</strong></p>
      <div class="nevid" id="pop1"><div class="dolava">Come on Tuesday 7.2. From 8:45 to look at our Open Door Day with the subtitle Mechatronics and Virtual Reality</div></div>
    </div>
	<div class="col-sm-3"> 
      <p><strong>Automotive mechatronics in RTVS</strong></p>
      <div class="nevid" id="pop1"><div class="dolava">Look at the VAT session in RTVS, where our Martin Bugar talked about automobile mechatronics</div></div>
    </div>
  </div>
</div><br>
</div>

<div class="ha">
<p><b>MANAGEMENT FROM THE INSTITUTION'S LIFE</b></p>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3"> 
      <p><strong>Assessment of SWOT in the Mechatronics section</strong></p>
      <div class="nevid" id="pop1"><div class="dolava">At FEI STU in Bratislava, on April 27, 2017, a study of students' scientific and professional activities (ŠVOČ)</div></div>
    </div>
	<div class="col-sm-3"> 
      <p><strong>Our PhD student succeeded in the Startup weekend</strong></p>
      <div class="nevid" id="pop1"><div class="dolava">Ing. Erich Stark placed his team with the "Borrow Not Buy" project on the 3rd place.</div></div>
    </div>
	<div class="col-sm-3"> 
      <p><strong>Excursion in VW</strong></p>
      <div class="nevid" id="pop1"><div class="dolava">Students of the Third Year Bc. ELSA (Electronic Automobile Systems) took part in an excursion</div></div>
    </div>
	<div class="col-sm-3"> 
      <p><strong>IFAC Symposium on Advances in Control Education 2016 - videos</strong></p>
      <div class="nevid" id="pop1"><div class="dolava">Watch videos from this important symposium co-organized by our institute</div></div>
    </div>
  </div>
</div><br>
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