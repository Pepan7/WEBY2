<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <title>Administrátorsky panel</title>
    <link type="text/css" rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="../javascript/menu.js"></script>
      <link rel="stylesheet" href="../css/ostatne.css">

      <link rel="stylesheet" href="../css/menu.css">
	</head>
<body>

<?php
include_once ('prihlasenie.php');

if(isset($_SESSION['LDAP'])) {
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


    $rolyvsetky = explode(" ", $roly);
    $user = false;
    $hr = false;
    $reporter = false;
    $editor = false;
    $admin = false;
    for ($z = 0; $z < sizeof($rolyvsetky); $z++)
    {
        if ($rolyvsetky[$z] == 'user')
            $user = true;
        if ($rolyvsetky[$z] == 'hr')
            $hr = true;
        if ($rolyvsetky[$z] == 'reporter')
            $reporter = true;
        if ($rolyvsetky[$z] == 'editor')
            $editor = true;
        if ($rolyvsetky[$z] == 'admin')
            $admin = true;
    }
    if ($user == true || $admin == true)

    {
	echo '<div class = "texty">';
        echo '<div ><h1 class= "nad">Editovanie vlastného profilu</h1><br>';
        echo '<form method="post" action="uloznaserver.php" enctype="multipart/form-data" ><label>Zmena mena: </label> <input required name="meno" type="text" value="'.$_SESSION['riadok'][1].'"><br>';
        echo '<label>Zmena priezviska: </label> <input required name="priezvisko" type="text" value="'.$_SESSION['riadok'][2].'"><br>';
        $sql = "SELECT Titul_pred from Pracovnici WHERE Meno = '".$_SESSION['riadok'][1]."' AND Priezvisko = '".$_SESSION['riadok'][2]."'";
        $result6 = $pripojenie->query($sql);
        if ($result6->num_rows) {
            while ($row6 = $result6->fetch_row()) {
                foreach ($row6 as $key6 => $val6)
                    echo '<label>Zmena titulu pred menom: </label> <input name="titulpred" type="text" value="'.$val6.'"><br>';
            }
        }
        $sql = "SELECT Titul_za from Pracovnici WHERE Meno = '".$_SESSION['riadok'][1]."' AND Priezvisko = '".$_SESSION['riadok'][2]."'";
        $result7 = $pripojenie->query($sql);
        if ($result7->num_rows) {
            while ($row7 = $result7->fetch_row()) {
                foreach ($row7 as $key7 => $val7)
                    echo '<label>Zmena titulu za menom: </label> <input name="titulza" type="text" value="'.$val7.'"><br>';
            }
        }
        $sql = "SELECT Miestnost from Pracovnici WHERE Meno = '".$_SESSION['riadok'][1]."' AND Priezvisko = '".$_SESSION['riadok'][2]."'";
        $result8 = $pripojenie->query($sql);
        if ($result8->num_rows) {
            while ($row8 = $result8->fetch_row()) {
                foreach ($row8 as $key8 => $val8)
                    echo '<label>Zmena miestnosti: </label> <input required name="miestnost" type="text" value="'.$val8.'"><br>';
            }
        }
        $sql = "SELECT Telefon from Pracovnici WHERE Meno = '".$_SESSION['riadok'][1]."' AND Priezvisko = '".$_SESSION['riadok'][2]."'";
        $result9 = $pripojenie->query($sql);
        if ($result9->num_rows) {
            while ($row9 = $result9->fetch_row()) {
                foreach ($row9 as $key9 => $val9)
                    echo '<label>Zmena telefonu: </label> <input name="telefon" type="text" value="'.$val9.'"><br>';
            }
        }
        $sql = "SELECT Oddelenie from Pracovnici WHERE Meno = '".$_SESSION['riadok'][1]."' AND Priezvisko = '".$_SESSION['riadok'][2]."'";
        $result10 = $pripojenie->query($sql);
        if ($result10->num_rows) {
            while ($row10 = $result10->fetch_row()) {
                foreach ($row10 as $key10 => $val10)
                    echo '<label>Zmena oddelenia: </label> <input required name="oddelenie" type="text" value="'.$val10.'"><br>';
            }
        }
        $sql = "SELECT Pozicia_v_skole from Pracovnici WHERE Meno = '".$_SESSION['riadok'][1]."' AND Priezvisko = '".$_SESSION['riadok'][2]."'";
        $result11 = $pripojenie->query($sql);
        if ($result11->num_rows) {
            while ($row11 = $result11->fetch_row()) {
                foreach ($row11 as $key11 => $val11)
                    echo '<label>Zmena pozicii v skole: </label> <input required name="poziciaskola" type="text" value="'.$val11.'"><br>';
            }
        }
        $sql = "SELECT Funkcia from Pracovnici WHERE Meno = '".$_SESSION['riadok'][1]."' AND Priezvisko = '".$_SESSION['riadok'][2]."'";
                $result12 = $pripojenie->query($sql);
                if ($result12->num_rows) {
                    while ($row12 = $result12->fetch_row()) {
                        foreach ($row12 as $key12 => $val12)
                    echo '<label>Zmena funkcie: </label> <textarea name="funkcia">'.$val12.'</textarea><br>';
            }
        }
        $sql = "SELECT Fotka from Pracovnici WHERE Meno = '".$_SESSION['riadok'][1]."' AND Priezvisko = '".$_SESSION['riadok'][2]."'";
        $result13 = $pripojenie->query($sql);
        if ($result13->num_rows) {
            while ($row13 = $result13->fetch_row()) {
                foreach ($row13 as $key13 => $val13)
                    echo '<img src="../photos/'.$val13.'" ><br><br><span>Zmena fotky (treba zadať iný názov fotky ako na serveri): </span><br><label> Vybrať fotku</label> <input name="fotka" type="file">';
            }
        }
        echo '<input type="submit" value="Ulož" name="udajeuloz"></form></div><br>';
        if ($admin == true)
        {
            echo '<form action="uloznaserver.php" method="post">';
            $sql = "SELECT ID, Meno, Priezvisko from Pracovnici";
            $result13 = $pripojenie->query($sql);
            echo '<label>Pridaj rolu: </label><select name="pracovnik">';
            if ($result13->num_rows) {
                while ($row13 = $result13->fetch_row()) {
                        echo '<option value="'.$row13[0].'">'.$row13[1].' '.$row13[2].'</option>';
                }
            }
            echo '</select> na ';
            $sql = "SELECT ID, Typ from Roly_pracovnikov";
            $result14 = $pripojenie->query($sql);
            echo '<select name="roly">';
            if ($result14->num_rows) {
                while ($row14 = $result14->fetch_row()) {
                    echo '<option value="'.$row14[0].'">'.$row14[1].'</option>';
                }
            }
            echo '</select>  <input type="submit" value="Pridaj rolu" name="rolyuloz"></form><br><form action="uloznaserver.php" method="post">';
            $result15 = $pripojenie->query("SELECT Pracovnikove_roly.ID, Pracovnici.Meno, Pracovnici.Priezvisko, Roly_pracovnikov.Typ from Pracovnikove_roly join Pracovnici on Pracovnici.ID = Pracovnikove_roly.ID_pracovnika join Roly_pracovnikov on Roly_pracovnikov.ID = Pracovnikove_roly.ID_Roly");
            echo '<label>Odober rolu: </label><select name="rolynaodber">';
            if($result15->num_rows)
            {
                while($row15 = $result15->fetch_row())
                {
                    echo '<option value="'.$row15[0].'">'.$row15[1].' '.$row15[2].' a rola '.$row15[3].'</option>';
                }
            }
            echo '</select>  <input type="submit" value="Odober rolu" name="rolyodober"></form><br>';
        }
	echo '</div>';

    }

}
else header("Location: prihlasitsadointranetu.php");
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