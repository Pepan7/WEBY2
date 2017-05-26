<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <title>Intranet</title>
    <link type="text/css" rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
    <script type="text/javascript" src="../javascript/texteditor.js"></script>
     <script src="../javascript/menu.js"></script>
      <link rel="stylesheet" href="../css/menu.css">
	</head>
<body>
<?php
include_once ('prihlasenie.php');
require_once ('../konfigdatabazy.php');
$pripojenie = new mysqli($hostname, $username, $password, $dbname);
if ($pripojenie->connect_error) {
die("Pripojenie zlyhalo: " . $pripojenie->connect_error);
}
$pripojenie->set_charset("utf8");
$sql = "SELECT DISTINCT(Typ) from Pracovnikove_roly join Pracovnici on ".$_SESSION['riadok'][0]." = Pracovnikove_roly.ID_pracovnika join Roly_pracovnikov on Roly_pracovnikov.ID = Pracovnikove_roly.ID_Roly";
$result5 = $pripojenie->query($sql);
$roly ='';
if ($result5->num_rows) {
while ($row5 = $result5->fetch_row()) {
foreach ($row5 as $key5 => $val5)
$roly = $val5. ' '.$roly;
}
}
?>
<?php
$text="";
$myfile = fopen("menu.txt", "r") or die("Unable to open file!");
$text=fread($myfile,filesize("menu.txt"));
fclose($myfile);
$text .= "<ul class='nav navbar-nav navbar-right'>
         <a class='odhl' href='odhlasenie.php'><button type='button'>Odhlásenie</button></a>
    <li><p class='meno'><span id='prihl'>". $_SESSION['LDAP']."</span><span id='roly'>(".$roly.")</span></p></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>


    <div id="editujem"></div>
    <input type="button" id="edit" value="Uložiť">
    <div id="totoeditovat">
        <?php
        if(isset($_SESSION['LDAP'])) {
        $subor = fopen("nakupytext.txt", "r") or die("Unable to open file!");
        echo fread($subor,filesize("nakupytext.txt"));
        fclose($subor);
        }
        else header("Location: prihlasitsadointranetu.php");
        ?>
    </div>
   
	<br><br><br><br><br><br><br>
	<?php
$text="";

$myfile = fopen("footer.txt", "r") or die("Unable to open file!");
$text=fread($myfile,filesize("footer.txt"));
fclose($myfile);
echo $text; 
?>
</body>
</html>