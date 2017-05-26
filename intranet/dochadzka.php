<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <title>Evidencia dochádzky</title>
    <link type="text/css" rel="stylesheet" href="../css/dochadzka.css">
    <link type="text/css" rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src='../javascript/pdfmake.min.js'></script>
    <script src='../javascript/vfs_fonts.js'></script>
    <script type="text/javascript" src="../javascript/dochadzka.js"></script>
	 <script src="../javascript/menu.js"></script>
      <link rel="stylesheet" href="../css/menu.css">
</head>
<body>
<header>
    <?php
        if (isset($_POST['submit'])) {
            $mesiac = $_POST['mesiace'];
            $rok = $_POST['roky'];
            $den = $_POST['skryt'];
            $pracovnik = $_POST['dochadzka'];
        }
        include_once ('prihlasenie.php');
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
    </header>
    <article>
    <h1>Evidencia dochádzky</h1>
        <div>
            <form action="dochadzka.php" method="post">
                <span>Mesiac: </span>
                <select id="mesiace" name="mesiace">
                    <option <?php if ($mesiac == 01) echo 'selected'; ?> value="01">Január</option>
                    <option <?php if ($mesiac == 02) echo 'selected'; ?> value="02">Február</option>
                    <option <?php if ($mesiac == 03) echo 'selected'; ?> value="03">Marec</option>
                    <option <?php if ($mesiac == 04) echo 'selected'; ?> value="04">Apríl</option>
                    <option <?php if ($mesiac == 05) echo 'selected'; ?> value="05">Máj</option>
                    <option <?php if ($mesiac == 06) echo 'selected'; ?> value="06">Jún</option>
                    <option <?php if ($mesiac == 07) echo 'selected'; ?> value="07">Júl</option>
                    <option <?php if ($mesiac == "08") echo 'selected'; ?> value="08">August</option>
                    <option <?php if ($mesiac == "09") echo 'selected'; ?> value="09">September</option>
                    <option <?php if ($mesiac == 10) echo 'selected'; ?> value="10">Október</option>
                    <option <?php if ($mesiac == 11) echo 'selected'; ?> value="11">November</option>
                    <option <?php if ($mesiac == 12) echo 'selected'; ?> value="12">December</option>
                </select>
                <span>Rok: </span>
                <select id="roky" name="roky">
                    <option <?php if ($rok == 2015) echo 'selected'; ?> value="2015">2015</option>
                    <option <?php if ($rok == 2016) echo 'selected'; ?> value="2016">2016</option>
                    <option <?php if ($rok == 2017) echo 'selected'; ?> value="2017">2017</option>
                    <option <?php if ($rok == 2018) echo 'selected'; ?> value="2018">2018</option>
                    <option <?php if ($rok == 2019) echo 'selected'; ?> value="2019">2019</option>
                    <option <?php if ($rok == 2020) echo 'selected'; ?> value="2020">2020</option>
                    <option <?php if ($rok == 2021) echo 'selected'; ?> value="2021">2021</option>
                    <option <?php if ($rok == 2022) echo 'selected'; ?> value="2022">2022</option>
                </select>
                <input id="skryt" value="" name="skryt" type="hidden">
                <span>Vyber dochádzku pre: </span>
                <select id="dochadzka" name="dochadzka">
                    <option <?php if ($pracovnik == 'Zamestnancov') echo 'selected'; ?> value="Zamestnancov">Zamestnancov</option>
                    <option <?php if ($pracovnik == 'Doktorantov') echo 'selected'; ?> id="doktorant" hidden value="Doktorantov">Doktorantov</option>
                </select>
                <input id="potvrd" type="submit" name="submit" value="Potrvď">
            </form>
        </div>
        <input type="button" value="Editovací mód" id="editmod">
        <input type="button" value="Prehliadací mód" id="prehladmod">
        <?php
        if(isset($_SESSION['LDAP'])) {
            try {
            $vsetkydni = array('Pon','Ut','St','Št','Pia','So','Ne');
            $den = array_search($den,$vsetkydni,true);
            $datum1=date_create("$rok-$mesiac-1");
            $mesiac2 = $mesiac;
            $rok2 = $rok;
            $mesiac = (int)$mesiac + 1;
            $den2 = $den;
            if ($mesiac == 13)
            {
                $rok = (int)$rok + 1;
                $mesiac = 1;
            }
            $datum2=date_create("$rok-$mesiac-1");
            $pocetdni=date_diff($datum1,$datum2);
            $pocetdni = $pocetdni->format("%a");
            $result = $pripojenie->query("SHOW TABLES");
            $result2 = $pripojenie->query("SELECT Typ FROM Nepritomnosti");
            $nepritomnosti = [];
            if($result2->num_rows)
            {
                while($row3 = $result2->fetch_row())
                {
                    foreach($row3 as $key=>$value)
                        array_push($nepritomnosti,$value);
                }
            }
            $result3 = $pripojenie->query("SELECT Meno, Priezvisko, Typ, Datum from Evidencia join Pracovnici on Pracovnici.ID = Evidencia.ID_pracovnika join Nepritomnosti on Nepritomnosti.ID = Evidencia.ID_nepritomnosti ");
            $dotabulky = [];
            if($result3->num_rows)
            {
                while($row4 = $result3->fetch_row())
                {
                    foreach($row4 as $key=>$value)
                        array_push($dotabulky,$value);
                }
            }
            $velkostdotab = sizeof($dotabulky);
            $b = [];
            $dalo = 5;
            $mesrokspr = 5;
            while($tableName = mysqli_fetch_row($result)) {
                $table = $tableName[0];
                if ($pracovnik == "Doktorantov")
                    $result4 = $pripojenie->query("SELECT Meno, Priezvisko FROM .$table WHERE Pozicia_v_skole = 'doktorand' ORDER BY Priezvisko");
                else  $result4 = $pripojenie->query("SELECT Meno, Priezvisko FROM .$table ORDER BY Priezvisko");
                if($result4->num_rows)
                {
                    echo '<div class="datagrid table-responsive">';
                    echo '<table id='.$mesiac2."-".$rok2.' class="table-hover">';
                    echo '<thead><tr><th rowspan="2">Meno</th><th rowspan="2">Priezvisko</th>';
                    for ($i = 1; $i <= $pocetdni; $i++)
                    {
                        echo "<th>$i</th>";
                    }
                    echo '</tr>';
                    echo '<tr>';
                    for ($i = 1; $i <= $pocetdni; $i++)
                    {
                        if ($den == 5 || $den == 6){
                            echo "<th class='vikend'>$vsetkydni[$den]</th>";
                            if ($den == 5)
                                $den = 6;
                            else
                                $den = 0;
                        }
                        else {
                            echo "<th>$vsetkydni[$den]</th>";
                            $den = $den + 1;
                        }
                    }
                    echo '</tr></thead><tbody>';
                    $den3 = $den2;
                    $g = 0;
                    while($row4 = $result4->fetch_row())
                    {
                        $den2 = $den3;
                        echo '<tr class="riadok">';
                        $j = -1;
                        foreach($row4 as $key=>$value)
                        {
                            $pocetspr = 0;
                            for ($u = 1; $u <= $velkostdotab; $u = $u+4) {
                                if ($dotabulky[$u] == $value) {
                                    array_push($b,$u);
                                    $pocetspr = $pocetspr + 1;
                                    $tuvloz = true;
                                }
                                else
                                    $tuvloz = false;
                            }
                            if ($pocetspr != 0)
                                $tuvloz = true;
                            echo '<th>',$value,'</th>';
                            $j++;
                        }
                        for ($j; $j <= $pocetdni; $j++) {
                            if ($tuvloz == true) {
                                for ($j; $j <= $pocetdni; $j++) {
                                    if (empty($b)){
                                        if ($den2 == 5 || $den2 == 6) {
                                            echo "<td class='vikend'> </td>";
                                            if ($den2 == 5)
                                                $den2 = 6;
                                            else
                                                $den2 = 0;
                                        } else {
                                            echo "<td> </td>";
                                            $den2 = $den2 + 1;
                                        }
                                    }
                                    for ($f = 0; $f < sizeof($b); $f++) {
                                        switch ($dotabulky[$b[$f] + 1]) {
                                            case "dovolenka":
                                                $dotabulky[$b[$f] + 1] = "DOV";
                                                break;
                                            case "služobná cesta":
                                                $dotabulky[$b[$f] + 1] = "SC";
                                                break;
                                            case "OČR":
                                                $dotabulky[$b[$f] + 1] = "OCR";
                                                break;
                                            case "plán dovolenky":
                                                $dotabulky[$b[$f] + 1] = "PD";
                                                break;
                                        }
                                        $datumy = explode('-', $dotabulky[$b[$f] + 2]);
                                        if (($mesiac2 == $datumy[1]) && ($rok2 == $datumy[0])) {
                                            $mesrokspr = true;
                                            if ((int)$datumy[2] == $j && $value == $dotabulky[$b[$f]]) {
                                                if ($den2 == 5 || $den2 == 6) {
                                                    echo '<td class=', $dotabulky[$b[$f] + 1], '>', $dotabulky[$b[$f] + 1], '</td>';
                                                    if ($den2 == 5)
                                                        $den2 = 6;
                                                    else
                                                        $den2 = 0;
                                                } else {
                                                    echo '<td class=', $dotabulky[$b[$f] + 1], '>', $dotabulky[$b[$f] + 1], '</td>';
                                                    $den2 = $den2 + 1;
                                                }
                                                array_splice($b,$f,1);
                                                $dalo = true;
                                                if ($f > sizeof($b)){
                                                    $f = 0;
                                                }
                                                break;
                                            }
                                            else {
                                                $dalo = false;
                                            }
                                        }
                                        else {
                                            $mesrokspr = false;
                                        }
                                    }
                                    if (($dalo != true) || ($mesrokspr == false)){
                                        if ($den2 == 5 || $den2 == 6) {
                                            echo "<td class='vikend'> </td>";
                                            if ($den2 == 5)
                                                $den2 = 6;
                                            else
                                                $den2 = 0;
                                        } else {
                                            echo "<td> </td>";
                                            $den2 = $den2 + 1;
                                        }
                                    }
                                }
                            }
                            else {
                                if ($den2 == 5 || $den2 == 6) {
                                    echo "<td class='vikend'> </td>";
                                    if ($den2 == 5)
                                        $den2 = 6;
                                    else
                                        $den2 = 0;
                                }
                                else {
                                    echo "<td> </td>";
                                    $den2 = $den2 + 1;
                                }
                            }
                        }
                        echo '</tr>';
                        unset($b);
                        $b = [];
                        $g++;
                    }
                    echo '</tbody></table></div><br />';
                }
            }
            echo "<span class='editovanie'>
              <button id='PN' class='$nepritomnosti[0]'>$nepritomnosti[0]</button>
              <button id='OCR' class='OCR'>$nepritomnosti[1]</button>
              <button id='SC' class='SC'>$nepritomnosti[2]</button>
              <button id='dov' class='DOV'>$nepritomnosti[3]</button>
              <button id='PD' class='PD'>$nepritomnosti[4]</button>
              <button id='zrus' class=''>Zrušiť neprítomnosť</button><br>
              <button id='uloz'>Uložiť</button></span>";
            $pripojenie->close();



    echo '<input id="pdf" type="button" value="Exportovať do PDF">';
                echo "</article>";

                $text="";

$myfile = fopen("footer.txt", "r") or die("Unable to open file!");
$text=fread($myfile,filesize("footer.txt"));
fclose($myfile);
echo $text;
        }
        finally
        {
            echo "</article>";
            $text="";

            $myfile = fopen("footer.txt", "r") or die("Unable to open file!");
            $text=fread($myfile,filesize("footer.txt"));
            fclose($myfile);
            echo $text;
        }
        } else header("Location: prihlasitsadointranetu.php");

        ?>
</body>
</html>