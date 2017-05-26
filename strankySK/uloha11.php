<!DOCTYPE html>
<html lang="sk">
	<head>
		<title>Page Title</title>
		<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print">


		<link rel="stylesheet" href="../css/uloha11.css">
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
      <li><a href=''><img src='subory/Flag_of_Slovakia.svg.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
      <li><a href='../strankyEN/uloha11.php'><img src='subory/gb.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>
<h1 class= "nad"> Fotogaleria</h1>
	<div class="tabulka">
<?php
 $matica = array();

function utf8_encode_deep(&$input) {
    if (is_string($input)) {
        $input = utf8_encode($input);
    } else if (is_array($input)) {
        foreach ($input as &$value) {
            utf8_encode_deep($value);
        }

        unset($value);
    } else if (is_object($input)) {
        $vars = array_keys(get_object_vars($input));

        foreach ($vars as $var) {
            utf8_encode_deep($input->$var);
        }
    }
}
function utf8_string_array_encode(&$array){
    $func = function(&$value,&$key){
        if(is_string($value)){
            $value = utf8_encode($value);
        }
        if(is_string($key)){
            $key = utf8_encode($key);
        }
        if(is_array($value)){
            utf8_string_array_encode($value);
        }
    };
    array_walk($array,$func);
    return $array;
}
 function connect()
 {
	require_once ('../konfigdatabazy.php');

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	  return $conn;
	 }
 
   $conn=connect();

	$sql = "SELECT * FROM UDALOSTI";
	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		$i =0;
		while($row = $result->fetch_assoc()) {
			//echo "id: " . $row["ID"]. " - Name: " . $row["MENO"]. " " . $row["PRIEZVISKO"]. "<br>";	
			$matica[$i]=array($row["ID"],$row["DATE"],$row["TITLE-SK"],$row["TITLE-EN"],$row["FOLDER"]);
			$i++;
		}
	}
	$conn->close();
	utf8_string_array_encode($matica);
	//var_dump($matica);
	$poc =0;
	$priecinok=array();
	
	
	////////////////////////////////////////////////////////////////////////////////NOVE
	$cs=0;
	$images=array();
	$array = array();      //pole pre pocet fotiek jednotlivych udalosti
	$array2 = array();     //pole pre nazvy udalosti
	$combin= array();     //ako keby asoc pole pre pametanie si nazvu udalosti a poctu fotiek k tej udalosti
	$array[0]=0;
	$array2[0]=$matica[0][2];
	for($i=0;$i<count($matica);$i++){
		$dirname = "".$matica[$i][4]."/";
		$pomocna = glob($dirname."*.*");
		$array[$i+1]=count($pomocna);
		$array2[$i+1]=$matica[$i+1][2];
		/*var_dump($pomocna);
		echo "aaaaaaaa";
		echo count($pomocna);*/
		$images=array_merge($images,$pomocna);
	}
	////////////////////////////////////////////////kombinovanie dvoch poli a nasledny pristup podla indexov
	$combin = array_combine($array2,$array);
	//var_dump($combin);
	$keys = array_keys($combin);
	//$combin[$keys[1]] = "not so much bling";
	
	
		echo "<div class='row2'>";
		echo "<div class='column2'>";
					//echo "haha";
					echo "<h3>".array_search($combin[$keys[0]], $combin)."</h3>";
					
					
					echo "</div>";
					echo "<div class='row2'>";
					echo "</div>";
		foreach($images as $image) {
			
			for($zed=1;$zed<count($combin)-1;$zed++){
				
					
				if( $cs==$combin[$keys[$zed]] ){
					//echo "<div style='position:relative;height:200px,width:2000px;background-color:red;'>dalsi".."</div>";
					//echo "<br><br><br><br><br><br>";
					
					echo "<div class='row2'>";
					echo "</div>";
					
					echo "<div class='column2'>";
					//echo "haha";
					echo "<h3>".array_search($combin[$keys[$zed]], $combin)."</h3>";
					
					
					echo "</div>";
					echo "<div class='row2'>";
					echo "</div>";
					/*echo "<div class='row'>";
					echo "</div>";*/
				}
			}
			
			////////////////////////
			echo "<div class='column2'>";
			$cs++;
			echo "<img src=".$image." alt='' height='130' onclick='openModal();currentSlide(".$cs.")' class='hover-shadow2'>";
			
			echo "</div>";
		}
		echo "</div>";
		//////////////////////////////////////////////////////velke obrazky
		
		echo       "<div id='myModal2' class='modal2'>";    //cierne pozadie
		echo       "<span class='close2 cursor' onclick='closeModal()'>&times;</span>";
		
		echo    "<div class='modal-content2'>";    //obrazky na ciernom pozadi
		foreach($images as $image) {
			echo "<div class='mySlides2'>";
			echo		"<img src=".$image." alt='' style='height:600px'>";
		
			echo "</div>";
		}
		echo	"</div>";
		
		echo "</div>";
	
	/////////////////////////////////////////////////////////////////////////////////KONEC NOVE
?>
</div>
 <?php
$text="";

$myfile = fopen("footer.txt", "r") or die("Unable to open file!");
$text=fread($myfile,filesize("footer.txt"));
fclose($myfile);
echo $text; 
?>
  <script src="../javascript/uloha11.js"></script>
	</body>
</html>