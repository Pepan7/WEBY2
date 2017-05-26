<?php
if(isset($_POST['Datan']) && !empty($_POST['Datan'])) {
    $Datan = $_POST['Datan'];
    $pole = json_decode($Datan, true);

    require('../konfigdatabazy.php');
    $pripojenie = new mysqli($hostname, $username, $password, $dbname);
    if ($pripojenie->connect_error) {
        die("Pripojenie zlyhalo: " . $pripojenie->connect_error);
    }
    $pripojenie->set_charset("utf8");
    foreach ($pole as $key => $value) {
        $rok = $value["rok"];
        $mesiac = $value["mesiac"];
        $den = (int)$value["stlpec"] - 1;
        $nepritomnost = $value["class"];
        $idpracovnik = $value["riadok"];
        $result = $pripojenie->query("SELECT Typ FROM Nepritomnosti");
        $nepritomnosti = [];
        if ($result->num_rows) {
            while ($row = $result->fetch_row()) {
                foreach ($row as $key => $valu)
                    array_push($nepritomnosti, $valu);
            }
        }
        print_r($nepritomnosti);
        for ($h = 0; $h < sizeof($nepritomnosti); $h++) {
            switch ($nepritomnost) {
                case "DOV":
                    $nepritomnost = "dovolenka";
                    break;
                case "SC":
                    $nepritomnost = "služobná cesta";
                    break;
                case "OCR":
                    $nepritomnost = "OČR";
                    break;
                case "PD":
                    $nepritomnost = "plán dovolenky";
                    break;
                default: break;
            }
            if ($nepritomnosti[$h] == $nepritomnost) {
                $h++;
                break;
            }
        }
        $result2 = $pripojenie->query("SELECT ID, Priezvisko FROM Pracovnici ORDER BY Priezvisko ASC");
        $idprac = [];
        $pracid = [];
        if ($result2->num_rows) {
            while ($row2 = $result2->fetch_row()) {
                foreach ($row2 as $key => $val)
                    array_push($idprac, $val);
            }
            for ($v = 0; $v < sizeof($idprac); $v = $v + 2) {
                array_push($pracid, $idprac[$v] . $idprac[$v + 1]);
            }
        }
        for ($c = 0; $c < sizeof($pracid); $c++) {
            if ($c == $idpracovnik) {
                if ($c > 9)
                    $idpracovnik = substr($pracid[$c], 0, 2);
                else $idpracovnik = substr($pracid[$c], 0, 1);
                break;
            }
        }
        $result3 = $pripojenie->query("SELECT ID_nepritomnosti, ID_pracovnika, Datum from Evidencia");
        $kontrola = [];
        if($result3->num_rows)
        {
            while($row4 = $result3->fetch_row())
            {
                foreach($row4 as $key=>$vq)
                    array_push($kontrola,$vq);
            }
        }
        $result4 = $pripojenie->query("SELECT ID FROM Evidencia WHERE ID_pracovnika =$idpracovnik AND Datum ='$rok-$mesiac-$den'");
        $kontr = [];
        if($result4->num_rows)
        {
            while($row5 = $result4->fetch_row())
            {
                foreach($row5 as $key=>$va)
                    array_push($kontr,$va);
            }
        }
        $delete = false;
        if ($den < 10)
            $den = "0$den";
        if ($nepritomnost == "") {
            $delete = true;
            echo "DELETE";
            $sql = "DELETE FROM Evidencia WHERE ID_pracovnika = $idpracovnik AND Datum ='$rok-$mesiac-$den'";
            if ($pripojenie->query($sql) === FALSE) {
                echo "Error: " . $sql . "<br>" . $pripojenie->error;
            }
        }
        else {
            if (empty($kontrola) && $delete == false)
            {
                $sql = "INSERT INTO Evidencia (ID, ID_nepritomnosti, ID_pracovnika, Datum) VALUES (NULL,$h,$idpracovnik,'$rok-$mesiac-$den')";
                if ($pripojenie->query($sql) === FALSE)
                    echo "Error: " . $sql . "<br>" . $pripojenie->error;
                continue;
            }
        }
        if (empty($kontr) && $delete == false){
            $sql = "INSERT INTO Evidencia (ID, ID_nepritomnosti, ID_pracovnika, Datum) VALUES (NULL,$h,$idpracovnik,'$rok-$mesiac-$den')";
            if ($pripojenie->query($sql) === FALSE) {
                echo "Error: " . $sql . "<br>" . $pripojenie->error;
            }
        }
        else {
            echo "UPDATE";
            $sql = "UPDATE Evidencia SET ID_nepritomnosti = $h WHERE ID_pracovnika =$idpracovnik AND Datum ='$rok-$mesiac-$den'";
            if ($pripojenie->query($sql) === FALSE) {
                echo "Error: " . $sql . "<br>" . $pripojenie->error;
            }
        }
    }
}
?>