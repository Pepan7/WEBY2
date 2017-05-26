<!DOCTYPE html>
<html>
<head>
		<title>Page Title</title>
		<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print">


		<link rel="stylesheet" type="text/css" href="../css/uloha12.css">
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
      <li><a href='../strankyEN/uloha12.php'><img src='subory/gb.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>
<h1 class="nad">Videá</h1>
<div class="row texty">
		<h2>Vzdialené experimenty - podpora pre vzdelávanie</h2>
		<iframe class = "videa" width="560"  height="315" src="https://www.youtube.com/embed/Z0zBwR_MKOI" frameborder="0" allowfullscreen></iframe>

		<h2>Vzdialené experimenty - podpora pre vzdelávanie</h2>
		<iframe class = "videa" width="560" height="315" src="https://www.youtube.com/embed/Z0zBwR_MKOI" frameborder="0" allowfullscreen></iframe>
		
		<h2>Vzdialené experimenty - podpora pre vzdelávanie</h2>
		<iframe class = "videa" width="560" height="315" src="https://www.youtube.com/embed/Z0zBwR_MKOI" frameborder="0" allowfullscreen></iframe>
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