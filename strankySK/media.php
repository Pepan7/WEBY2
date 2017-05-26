<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">  
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print">


   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="../javascript/menu.js"></script>
      <link rel="stylesheet" href="../css/menu.css">
	   <link rel="stylesheet" href="../css/clanky.css">
</head>
<body>
<?php
$text="";
$myfile = fopen("menu.txt", "r") or die("Unable to open file!");
$text=fread($myfile,filesize("menu.txt"));
fclose($myfile);
$text .= "<ul class='nav navbar-nav navbar-right'>
      <li><a href=' '><img src='subory/Flag_of_Slovakia.svg.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
      <li><a href='../strankyEN/media.php'><img src='subory/gb.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>
<?php
$pdf="";
$url="";
$typ="";
$tytle="";
$date="";
require 'spreadsheet/vendor/autoload.php';


$fxls ='ZP_data.xlsx';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fxls);
$xls_data = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);


$nr = count($xls_data); //number of rows
echo "<div class='container-fluid'>";
echo "<div class='row'>";
echo "<h2>Články</h2>";
 echo "</div>";
for($i=2; $i<=$nr; $i++){
$pdf=$xls_data[$i]['E'];
$url=$xls_data[$i]['F'];
$typ=$xls_data[$i]['G'];
$tytle=$xls_data[$i]['B'];
$date=$xls_data[$i]['D'];

if($typ == "c")
{
	if($url != "")
	{
	
	echo "<div class='row'>";
    echo "<div class='col-sm-15' style='background-color:lightgrey;'><a class='clanky' href='".$url."'>".$tytle." (".$date.")</a> </div>";
    echo "</div>";
		
	}
	else
	{
		

	echo "<div class='row'>";
    echo "<div class='col-sm-15' style='background-color:lightgrey;'><a class='clanky' href='".$pdf."'>".$tytle." (".$date.")</a> </div>";
    echo "</div>";
		
		
	}
	
	
}
}
 echo "</div>";

echo "<div class='container-fluid'>";
echo "<div class='row'>";
echo "<h2>Videá</h2>";
echo "</div>";
for($i=2; $i<=$nr; $i++){
$pdf=$xls_data[$i]['E'];
$url=$xls_data[$i]['F'];
$typ=$xls_data[$i]['G'];
$tytle=$xls_data[$i]['B'];
$date=$xls_data[$i]['D'];

if($typ == "v")
{
	if($url != "")
	{
	
	echo "<div class='row'>";
    echo "<div class='col-sm-15' style='background-color:lightgrey;'><a class='clanky' href='".$url."'>".$tytle." (".$date.")</a> </div>";
    echo "</div>";
		
	}
	else
	{
		

	echo "<div class='row'>";
    echo "<div class='col-sm-15' style='background-color:lightgrey;'><a class='clanky' href='".$pdf."'>".$tytle." (".$date.")</a> </div>";
    echo "</div>";
		
		
	}
	
	
}
}
 echo "</div>";






echo "<div class='container-fluid bg-3 text-center'>";
	
echo "<h2>YouTube Videá</h2>";
echo "<div class='row'>";
$pocitadlo=0;
for($i=2; $i<=$nr; $i++){
$pdf=$xls_data[$i]['E'];
$url=$xls_data[$i]['F'];
$typ=$xls_data[$i]['G'];
$tytle=$xls_data[$i]['B'];
$date=$xls_data[$i]['D'];




if($typ == "vy")
{
	$pocitadlo++;
	if($url != "")
	{
	echo "<div class='col-sm-3'>";
	echo "<p>".$tytle."</p>";
    echo "<iframe class='img-responsive' width='100%' height='315' src='$url' frameborder='0' allowfullscreen></iframe>";
    echo "</div>";
		
	}
	else
	{
		
	
	echo "<div class='col-sm-3'>";
	echo "<p>".$tytle."</p>";
     echo "<iframe class='img-responsive' width='100%' src='".$pdf."' frameborder='0' allowfullscreen></iframe>";
    echo "</div>";
		
		
	}
	
	
}




}
  echo "</div>";
	echo "</div>";
?>
  <?php
$text="";

$myfile = fopen("footer.txt", "r") or die("Unable to open file!");
$text=fread($myfile,filesize("footer.txt"));
fclose($myfile);
echo $text; 
?>



</body>
</html>
