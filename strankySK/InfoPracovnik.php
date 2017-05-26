<?php
require_once '../dbconnect.php';
require_once 'fetchPracovnik.php';?>
<?php


$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));

if ($method == 'GET'){

if ($request[0]=='id') {

    $idecka = $request[1];

    }
}


    $dbh = connect_to_db();
    $podrobnosti = fetchInfo($dbh,$idecka);

echo '<div class="informacie">';

echo '</br>';
if(!empty($podrobnosti[0][6])) {
echo '<img src="../photos/'.$podrobnosti[0][6].'">';}
else{
    echo '<img src="../photos/nahrada.jpg">';

}

echo '<div class="informacie">';
echo '<p><b>Meno a priezvisko:</b> '.$podrobnosti[0][3].' '. $podrobnosti[0][1].' '. $podrobnosti[0][2].' '. $podrobnosti[0][4].'</p>';
echo '<p><b>Zaradenie:</b> '.$podrobnosti[0][10].'</p>';
echo '<p><b>Oddelenie:</b> '.$podrobnosti[0][9].'</p>';
echo '<p><b>Telefon:</b> +421 2 60291' .$podrobnosti[0][8].'</p>';
echo '<p><b>Miestnost:</b> '.$podrobnosti[0][7].'</p>';

echo '</div>';

if(!empty($podrobnosti[0][5])) {

    $ldapURL = "ldap.stuba.sk";
    $ldapLink = 'ou=People, DC=stuba, DC=sk';
    $ldap = ldap_connect($ldapURL);
    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);

    $result = ldap_search($ldap, $ldapLink, "uid=" . $podrobnosti[0][5]);
    $uid = ldap_get_entries($ldap, $result);
    $uisid = $uid[0]['uisid'][0];

// echo $uisid;


    $ch = curl_init('http://is.stuba.sk/lide/clovek.pl');

// zostavenie dat pre POST dopyt
    $data = array(
        'order_by' => 'rok_uplatneni',
        'zvolit_rok' => 'Zvoliť',
        'lang' => 'sk',
        'rok' => '1',
        'id' => $uisid,//'4948',$uisid
        'zalozka' => '5',
    );

// nastavenie curl-u pre pouzitie POST dopytu
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
// nastavenie curl-u pre ulozenie dat z odpovede do navratovej hodnoty z volania curl_exec
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

// vykonanie dopytu
    $result = curl_exec($ch);
    curl_close($ch);


// parsovanie odpovede pre ziskanie pozadovanych dat
    $doc = new DOMDocument();
    libxml_use_internal_errors(true);
    $doc->loadHTML($result);
    $xPath = new DOMXPath($doc);
    $tableRows = $xPath->query('//html/body/div/div/div/table[last()]/tbody/tr');


//var_dump($result);


    echo "<br>";

    $a = 0;
    while (!empty($tableRows[$a]->childNodes[0]->textContent)) {
        $a++;
    };


    echo '<table class="publikacie">' . "<thead>";
    echo "<th><b>" . "Publikacie " . "</b></th>";
    echo "<th><b>" . "Druh vysledku " . "</b></th>";
    echo "<th><b>" . "Rok " . "</b></th>";
    echo '</thead>';


    for ($i = 0; $i < $a; $i++) {
        $typ = $tableRows[$i]->childNodes[2]->textContent[0];
        $rok = $tableRows[$i]->childNodes[3]->textContent;

        if (($typ == 'm') && ($rok > 2012)) {
            echo "<tr class='zaznam'>";
            echo "<td >" . $tableRows[$i]->childNodes[1]->textContent . "</td>";
            echo "<td>" . $tableRows[$i]->childNodes[2]->textContent . "</td>";
            echo "<td>" . $tableRows[$i]->childNodes[3]->textContent . "</td>";
            echo "</tr>";

        }
    }

    for ($i = 0; $i < $a; $i++) {
        $typ = $tableRows[$i]->childNodes[2]->textContent[2];
        $rok = $tableRows[$i]->childNodes[3]->textContent;


        if (($typ == 'l') && ($rok > 2012)) {
            echo "<tr class='zaznam'>";
            echo "<td >" . $tableRows[$i]->childNodes[1]->textContent . "</td>";
            echo "<td>" . $tableRows[$i]->childNodes[2]->textContent . "</td>";
            echo "<td>" . $tableRows[$i]->childNodes[3]->textContent . "</td>";
            echo "</tr>";
        }
    }

    for ($i = 0; $i < $a; $i++) {
        $prva = $tableRows[$i]->childNodes[2]->textContent[0];
        $rok = $tableRows[$i]->childNodes[3]->textContent;


        if (($prva == 'p') && ($rok > 2012)) {
            echo "<tr class='zaznam'>";
            echo "<td>" . $tableRows[$i]->childNodes[1]->textContent . "</td>";
            echo "<td>" . $tableRows[$i]->childNodes[2]->textContent . "</td>";
            echo "<td>" . $tableRows[$i]->childNodes[3]->textContent . "</td>";
            echo "</tr>";
        }
    }

    echo "</table>";

    echo "</>";
}
?>

