<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <title>Rozdelenie úloh</title>
    <link rel="stylesheet" href="../css/uloha7.css">


    <link type="text/css" rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="../javascript/menu.js"></script>
      <link rel="stylesheet" href="../css/menu.css">
	</head>
<body>
<?php
include_once ('prihlasenie.php');
if(isset($_SESSION['LDAP'])) {
    require_once('../konfigdatabazy.php');
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
    }
else header("Location: prihlasitsadointranetu.php");
?>

<h1 class="nad">Rozdelenie úloh</h1>

<table class = "rozdelenie">
    <thead>
        <th>Meno</th>
        <th>Úlohy</th>
    </thead>

    <tr>
        <th>Šimon Hivko</th>
        <td>Úloha 7 - Pracovníci, Dizajn, Úloha 2 - Responzivnosť a Tlač, Úloha 15 - Rozdelenie úloh  </td>
    </tr>

    <tr>
        <th>Andrea Mášiková</th>
        <td>Úloha 8 - Výskum/Projekt, Úloha 11 - Fotogaléria ,Úloha 12 - Videá </td>
    </tr>

    <tr>
        <th>Pavol Mrva</th>
        <td>Úloha 9 - Aktuality</td>
    </tr>

    <tr>
        <th>Samuel Ogurčák</th>
        <td> Úloha 3 - Dvojjazyčnosť, Úloha 4 - Menu, Úloha 6 - Pätka, Úloha 10 - Kontakt, Úloha 13 - Médiá, Dizajn</td>
    </tr>

    <tr>
        <th>Peter Pažitný</th>
        <td>Úloha 14, Úloha 15 </td>
    </tr>


</table>



<?php
$text="";

$myfile = fopen("footer.txt", "r") or die("Unable to open file!");
$text=fread($myfile,filesize("footer.txt"));
fclose($myfile);
echo $text; 
?>










</body>
</html>