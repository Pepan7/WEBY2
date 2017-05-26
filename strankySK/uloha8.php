<!DOCTYPE html>
<html>
	<head>
		<title>Page Title</title>
		<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print">


		<link rel="stylesheet" type="text/css" href="../css/styleUloha8.css">
		<script src="../javascript/uloha8.js"></script>
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
      <li><a href='../strankyEN/uloha8.php'><img src='subory/gb.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>
<h1 class = "nad">Projekty</h1>
<div class = "tabulka">

<?php
$matica = array();
$vegy = array();
$vegy2 = array();
$v=0;
$vriadok=0;
$kegy = array();
$k=0;
$kriadok=0;
$apvv = array();
$a=0;
$ariadok=0;
$ine = array();
$ii=0;
$iiriadok=0;
$medzinarodne = array();
$m=0;
$mriadok=0;
//  Include PHPExcel_IOFactory
include 'PHPExcel/IOFactory.php';

$inputFileName = 'ZP_data.xlsx';

//  Read your Excel workbook
try {
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
} catch(Exception $e) {
    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}

//  Get worksheet dimensions
$sheet = $objPHPExcel->getSheet(3); 
$highestRow = $sheet->getHighestRow(); 
$highestColumn = $sheet->getHighestColumn();
$i=0;
//  Loop through each row of the worksheet in turn
for ($row = 1; $row <= $highestRow; $row++){ 
    //  Read a row of data into an array
	$matica[$i] = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                    NULL,
                                    TRUE,
                                    FALSE);
	$i++;
	
    //  Insert row data array into your database of choice here
}

/*for($j=0;$j<count($matica[0]);$j++){
		echo $matica[0][$j];
		echo "zzzzzzzzz";
	}*/
	//echo $matica[2][0][0];
	//var_dump($matica[0][0][0]);
/*echo "<table>";
for($j=0;$j<count($matica[0][0]);$j++){   //zahlavie
		echo "<td>".$matica[0][0][$j]."</td>";
	}*/
	
		
for($i=1;$i<count($matica);$i++){
	switch ($matica[$i][0][1]) {
    case "VEGA":
		
		$vegy[$vriadok][$v] = trim(substr($matica[$i][0][5],-5));
		$v++;
        for($j=0;$j<count($matica[$i][0])+1;$j++){
			$vegy[$vriadok][$v] = $matica[$i][0][$j]."</td>";
			$v++;
		}
		$v=0;
		$vriadok++;
        break;
    case "KEGA":
		$kegy[$kriadok][$k] = trim(substr($matica[$i][0][5],-5));
		$k++;
        for($j=0;$j<count($matica[$i][0])+1;$j++){
			$kegy[$kriadok][$k] = $matica[$i][0][$j]."</td>";
			$k++;
		}
		$k=0;
		$kriadok++;
        break;
    case "APVV":
		$apvv[$ariadok][$a] = trim(substr($matica[$i][0][5],-5));
		$a++;
        for($j=0;$j<count($matica[$i][0])+1;$j++){
			$apvv[$ariadok][$a] = $matica[$i][0][$j]."</td>";
			$a++;
		}
		$a=0;
		$ariadok++;
        break;
	case "Iné domáce projekty":
		$ine[$iiriadok][$ii] = trim(substr($matica[$i][0][5],-5));
		$ii++;
        for($j=0;$j<count($matica[$i][0])+1;$j++){
			$ine[$iiriadok][$ii] = $matica[$i][0][$j]."</td>";
			$ii++;
		}
		$ii=0;
		$iiriadok++;
        break;
	default:
		$medzinarodne[$mriadok][$m] = trim(substr($matica[$i][0][5],-5));
		$m++;
       for($j=0;$j<count($matica[$i][0])+1;$j++){
			$medzinarodne[$mriadok][$m] = $matica[$i][0][$j]."</td>";
			$m++;
		}
		$m=0;
		$mriadok++;
	}
	
}
foreach ($vegy as $key => $row)
{
    $stlpec[$key]  = $row['0'];
}   
array_multisort ($stlpec, SORT_DESC, $vegy);

foreach ($kegy as $key => $row)
{
    $stlpec2[$key]  = $row['0'];
}   
array_multisort ($stlpec2, SORT_DESC, $kegy);

foreach ($apvv as $key => $row)
{
    $stlpec3[$key]  = $row['0'];
}   
array_multisort ($stlpec3, SORT_DESC, $apvv);

foreach ($medzinarodne as $key => $row)
{
    $stlpec4[$key]  = $row['0'];
}   
array_multisort ($stlpec4, SORT_DESC, $medzinarodne);

foreach ($ine as $key => $row)
{
    $stlpec5[$key]  = $row['0'];
}   
array_multisort ($stlpec5, SORT_DESC, $ine);

////////robenie konk tabuliek
////////////////////////////////KEGA
echo "<h3>KEGA</h3>";
echo "<table>";
//echo "</th>";
/*for($j=0;$j<count($matica[0][0]);$j++){   //zahlavie kegy tabulky
		echo "<td>".$matica[0][0][$j]."</td>";
}*/
echo "<tr>";
	echo "<td><b>číslo projektu</b></td>";
	echo "<td><b>názov projektu</b></td>";
	echo "<td><b>doba riešenia</b></td>";
	echo "<td><b>zodpovedný riešiteľ</b></td>";
	/*for($j=0;$j<count($kegy[$i]);$j++){   
		echo "<td>".$kegy[$i][$j]."</td>";
	}*/
echo "</tr>";
for($i=0;$i<count($kegy);$i++){   //telo kegy tabulky
	//echo "<tr id='".$i.";kegy' onclick='dajMinTab(this.id,".$kegy[$i][10].")' >";
	echo "<tr id='" .$kegy[$i][6]. ";" .$kegy[$i][11]. "' onclick='vypisAnot(this.id)' >";
	echo "<td>".$kegy[$i][3]."</td>";
	echo "<td>".$kegy[$i][4]."</td>";
	echo "<td>".$kegy[$i][6]."</td>";
	echo "<td>".$kegy[$i][7]."</td>";
	/*for($j=0;$j<count($kegy[$i]);$j++){   
		echo "<td>".$kegy[$i][$j]."</td>";
	}*/
	echo "</tr>";
}
/*echo "</table id='tabKegyMin' style='visibility:hidden;'>";
	echo "<tr>";
	echo "<td>doba riešenia</td>";
	echo "<td>anotácia</td>";
echo "</tr>";
echo "<table>";*/

echo "</table>";
//////////////////////////////////VEGA
echo "<h3>VEGA</h3>";
echo "<table>";
echo "<tr>";
	echo "<td><b>číslo projektu</b></td>";
	echo "<td><b>názov projektu</b></td>";
	echo "<td><b>doba riešenia</b></td>";
	echo "<td><b>zodpovedný riešiteľ</b></td>";
echo "</tr>";
for($i=0;$i<count($vegy);$i++){   //telo vegy tabulky
	echo "<tr id='" .$vegy[$i][6]. ";" .$vegy[$i][11]. "' onclick='vypisAnot(this.id)'>";
	echo "<td>".$vegy[$i][3]."</td>";
	echo "<td>".$vegy[$i][4]."</td>";
	echo "<td>".$vegy[$i][6]."</td>";
	echo "<td>".$vegy[$i][7]."</td>";
	echo "</tr>";
}
echo "</table>";
//////////////////////////////////APVV
echo "<h3>APVV</h3>";
echo "<table>";
echo "<tr>";
	echo "<td>číslo projektu</td>";
	echo "<td>názov projektu</td>";
	echo "<td>doba riešenia</td>";
	echo "<td>zodpovedný riešiteľ</td>";
echo "</tr>";
for($i=0;$i<count($apvv);$i++){   //telo apvv tabulky
	echo "<tr id='" .$apvv[$i][6]. ";" .$apvv[$i][11]. "' onclick='vypisAnot(this.id)'>";
	echo "<td>".$apvv[$i][3]."</td>";
	echo "<td>".$apvv[$i][4]."</td>";
	echo "<td>".$apvv[$i][6]."</td>";
	echo "<td>".$apvv[$i][7]."</td>";
	echo "</tr>";
}
echo "</table>";
//////////////////////////////////INE
echo "<h3>Iné domáce projekty</h3>";
echo "<table>";
echo "<tr>";
	echo "<td><b>číslo projektu</b></td>";
	echo "<td><b>názov projektu</b></td>";
	echo "<td><b>doba riešenia</b></td>";
	echo "<td><b>zodpovedný riešiteľ</b></td>";
echo "</tr>";
for($i=0;$i<count($ine);$i++){   //telo ine tabulky
	echo "<tr id='" .$ine[$i][6]. ";" .$ine[$i][11]. "' onclick='vypisAnot(this.id)'>";
	echo "<td>".$ine[$i][3]."</td>";
	echo "<td>".$ine[$i][4]."</td>";
	echo "<td>".$ine[$i][6]."</td>";
	echo "<td>".$ine[$i][7]."</td>";
	echo "</tr>";
}
echo "</table>";
//////////////////////////////////Medzinárodné projekty
echo "<h3>Medzinárodné projekty</h3>";
echo "<table>";
echo "<tr>";
	echo "<td><b>číslo projektu</b></td>";
	echo "<td><b>názov projektu</b></td>";
	echo "<td><b>doba riešenia</b></td>";
	echo "<td><b>zodpovedný riešiteľ</b></td>";
echo "</tr>";
for($i=0;$i<count($medzinarodne);$i++){   //telo Medzinárodnej tabulky
	echo "<tr id='" .$medzinarodne[$i][6]. ";" .$medzinarodne[$i][11]. "' onclick='vypisAnot(this.id)'>";
	echo "<td>".$medzinarodne[$i][3]."</td>";
	echo "<td>".$medzinarodne[$i][4]."</td>";
	echo "<td>".$medzinarodne[$i][6]."</td>";
	echo "<td>".$medzinarodne[$i][7]."</td>";
	echo "</tr>";
}
echo "</table>";
//////////////////////////////////
//var_dump($kegy[0]);
//echo "</table>";
//var_dump($matica);
?>

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